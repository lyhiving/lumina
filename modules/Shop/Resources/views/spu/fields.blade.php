<x-formItem :label="__('core::field.brand_id')">
	<x-input name="brand_id" verify="required" :value="$spu->brand_id??''"/>
</x-formItem>

<x-formItem :label="__('core::field.category_id')">
	<x-input name="category_id" verify="required" :value="$spu->category_id??''"/>
</x-formItem>

<x-formItem :label="__('core::field.status')">
	<x-input name="status" verify="required" :value="$spu->status??''"/>
</x-formItem>

<x-formItem :label="__('core::field.name')">
	<x-input name="name" verify="required" :value="$spu->name??''"/>
</x-formItem>

<x-formItem :label="__('core::field.description')">
	<x-input name="description" verify="required" :value="$spu->description??''"/>
</x-formItem>

<x-formItem :label="__('core::field.unit')">
	<x-input name="unit" verify="required" :value="$spu->unit??''"/>
</x-formItem>

<x-formItem :label="__('core::field.thumb')">
	<x-input name="thumb" verify="required" :value="$spu->thumb??''"/>
</x-formItem>

<x-formItem :label="__('core::field.pic_url')">
	<x-input name="pic_url" verify="required" :value="$spu->pic_url??''"/>
</x-formItem>

<x-formItem :label="__('core::field.price_fee')">
	<x-input name="price_fee" verify="required" :value="$spu->price_fee??''"/>
</x-formItem>

<x-formItem :label="__('core::field.market_price_fee')">
	<x-input name="market_price_fee" verify="required" :value="$spu->market_price_fee??''"/>
</x-formItem>

<x-formItem :label="__('core::field.create_by')">
	<x-input name="create_by" verify="required" :value="$spu->create_by??''"/>
</x-formItem>

<script type="text/html" id="mall_product_sku_tool">
	<a href="" class="layui-btn layui-btn-danger layui-btn-xs" data-event="remove"><i class="fa fa-delete"></i></a>
</script>
<table id="mall_product_sku" class="layui-table">
	<thead>
	<tr>
		<th colspan="7">
			<h3 class="py-2">SKU管理<a href="javascript:;" class="btn btn-primary ml-4 btn-sm" id="j_addSku">新增</a></h3>
		</th>
	</tr>
	<tr>
		<th width="80">编号</th>
		<th width="250">属性</th>
		<th>售卖价</th>
		<th>市场价</th>
		<th>库存</th>
		<th width="350">图集</th>
		<th>操作</th>
	</tr>
	</thead>
	<tbody></tbody>
</table>


<x-formItem class="layui-layout-admin">
	<div class="layui-footer z-50 shadow" style="left:0;">
		<button class="layui-btn" lay-submit>提交</button>
		<button type="reset" class="layui-btn layui-btn-primary" lay-submit-cancel>重置</button>
	</div>
</x-formItem>

@push('script')
<script>
	layui.extend({
		'MallProductAttrPicker': "modules/mall/product_attr_picker"
	}).use(['table', 'MallProductAttrPicker', 'laytpl', 'autocomplete', 'upload'], function(){
		var $table = $("#mall_product_sku"),
				laytpl = layui.laytpl,
				autocomplete = layui.autocomplete,
				upload = layui.upload,
				MallProductAttrPicker = layui.MallProductAttrPicker,
				skuCouunt = 0,
				IMG_LIMIT = 9,
				_sku_tpl = '<tr data-idx=@{{ d.idx }}>' +
					'<td>#</td>' +
					'<td><a href="javascript:;" class="j_sku_attr_picker">添加属性</a><dl></dl></td>' +
					'<td><input type="number" class="layui-input" name="sku[@{{ d.idx }}][price_fee]"> </td>' +
					'<td><input type="number" class="layui-input" name="sku[@{{ d.idx }}][market_price_fee]"> </td>' +
					'<td><input type="number" class="layui-input" name="sku[@{{ d.idx }}][quantity]"></td>' +
					'<td><div class="m-uploader clearfix" id="">\n' +
					'   <ul class="uploader__files" id="j_uploader_box"></ul>\n' +
					'     	<div class="img__picker j_img_picker" id="imgPicker_@{{d.idx}}"></div>\n' +
					'        <input type="hidden" name=""  value="" class="form-control j_img">\n' +
					'     </div></td>' +
					'<td></td>'+
				'</tr>',
				_autocompleteUrl = '/interface/mall/product-attr-values',
				_attr_tpl = '<div class="layui-form-item">' +
				'<label for="" class="layui-form-label">@{{ d.name }}：</label>' +
				'<div class="layui-input-block"><input type="text" class="layui-input" name="sku[@{{ d.idx }}][attrs][@{{ d.id }}]" lay-autocomplete lay-url="'+_autocompleteUrl+'"></div>' +
				'</div>';

        function renderTpl(){
            $('.j_img_picker').click(function(i ,n) {
                var uploadInst = upload.render({
                    elem: '#'+$(this).attr("id"),
                    url: '{{ url('/interface/core/upload') }}',
                    fileNumLimit: IMG_LIMIT,
                    done: function(res, $el){
                        var $ipt = $el.parent(".m-uploader").find("input.j_img")
                        var $iptVal = $ipt.val();
                        var $imgBox = $el.parent(".m-uploader").find("ul.uploader__files");
                        $iptVal = $iptVal.length>1?$iptVal.split(','):[]
                        if($iptVal.length >= IMG_LIMIT) return;
                        $.each(res, function(i, n){
                            $iptVal.push(n)
                            if($iptVal.length >= IMG_LIMIT) {
                                $el.hide();
                            }
                            $imgBox.append(laytpl(_imgItem).render({
                                upfile: n
                            }))
                        })
                        $ipt.val($iptVal.join(','))
                    }
                });
            })
        }
		$table.on("click","#j_addSku", function(){
			var _body = $table.find("tbody")
			skuCouunt = _body.find("tr").length
            _body.append(laytpl(_sku_tpl).render({'idx': skuCouunt}))

            renderTpl();
		})
		$table.on("click",".j_sku_attr_picker", function(){
			var $this = $(this);
			var _iptHtml = '';
			var _pickerDialog = MallProductAttrPicker.render();
			var _idx = $this.parents("tr").attr("data-idx")

			if(!_idx) return;
			_pickerDialog.on("yes", function(res){
				$.each(res, function(i, n){
					_iptHtml += (laytpl(_attr_tpl).render({
						id: n.id,
						name: n.name,
						idx: _idx
					}))
				})
				$this.next("dl").append(_iptHtml)

				autocomplete.init();
				_pickerDialog.hide()
			})
			// MallProductAttrPicker.on("btn(yes)", function(res){
			// 	console.log(res)
			// })
		})

		// 上传
		var  _imgItem = '<li class="uploader__file" style="background-image: url(@{{ d.upfile }})"><div class="uploader__mask" style="display: none">' +
				'<div class="mask__delete"><a href="javascript:;" class="j_delete" data-id="@{{ d.upfile }}"><i class="fa fa-close"></i></a></div>' +
				'</div></li>';
		// var uploadInst = upload.render({
		// 	elem: '.j_img_picker',
		// 	url: '{{ url('/interface/core/upload') }}',
		// 	fileNumLimit: IMG_LIMIT,
		// 	done: function(res, $el){
		// 		var $ipt = $el.parent(".m-uploader").find("input.j_img")
		// 		var $iptVal = $ipt.val();
		// 		var $imgBox = $el.parent(".m-uploader").find("ul.uploader__files");
		// 		$iptVal = $iptVal.length>1?$iptVal.split(','):[]
		// 		if($iptVal.length >= IMG_LIMIT) return;
		// 		$.each(res, function(i, n){
		// 			$iptVal.push(n)
		// 			if($iptVal.length >= IMG_LIMIT) {
		// 				$el.hide();
		// 			}
		// 			$imgBox.append(laytpl(_imgItem).render({
		// 				upfile: n
		// 			}))
		// 		})
		// 		$ipt.val($iptVal.join(','))
		// 	}
		// });
		// 图片操作层
		$(document).on("mouseenter", ".uploader__file", function(){
			$(this).find(".uploader__mask").show()
		}).on("mouseleave", ".uploader__file", function(){
			$(this).find(".uploader__mask").hide()
		})
		$(document).on("click", ".j_delete", function(){
			var url = $(this).attr("data-id")
			var $ipt = $(this).parents(".m-uploader").find("input.j_img")
			var $picker = $(this).parents(".m-uploader").find(".j_img_picker")
			var $iptVal = $ipt.val();

			$(this).parents(".uploader__file").remove();

			$iptVal = $iptVal.length>1?$iptVal.split(','):[]
			var _idx = $iptVal.indexOf(url);
			if(_idx > -1) {
				$iptVal.splice(_idx, 1);
			}
			$iptVal.length >= IMG_LIMIT?$picker.hide():$picker.show();
			$ipt.val($iptVal.join(','))
		})
	})
</script>

@endpush