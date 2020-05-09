
<style>
    @charset "UTF-8";
/* 多规格 */
.goods-spec-many { display: block; /* 添加规格组 */ /* sku容器 */ }
.goods-spec-many .goods-spec-box { margin-top: 15px; border: 1px solid #e4e4e4; padding: 20px; border-radius: 4px; }
.goods-spec-many input { font-size: 1.3rem !important; padding-left: 10px !important; border: 1px solid #e3e2e5 !important; }
.goods-spec-many input.am-field-error { border-color: #dd514c !important; }
.goods-spec-many .spec-group-item { margin-bottom: 25px; }
.goods-spec-many .spec-group-item .spec-group-name { margin-bottom: 15px; }
.goods-spec-many .spec-group-item .spec-group-name span { font-size: 1.5rem; }
.goods-spec-many .spec-group-item .spec-group-name .fa { display: inline-block; }
.goods-spec-many .spec-group-item .spec-list .spec-item { position: relative; margin-right: 12px; margin-bottom: 12px; }
.goods-spec-many .spec-group-item .spec-list .spec-item span { min-width: 50px; display: inline-block; border: 1px solid #ddd; text-align: center; padding: 0 15px; border-radius: 2px; font-size: 1.3rem; line-height: 30px; }
.goods-spec-many .spec-group-item .spec-list .spec-item:hover .fa { visibility: visible; }
.goods-spec-many .spec-group-item .spec-list .spec-item .fa { position: absolute; width: 20px; top: -9px; right: -9px; visibility: hidden; }
.goods-spec-many .spec-group-item .spec-item-add input { width: 110px; border-top-left-radius: 4px; border-bottom-left-radius: 4px; }
.goods-spec-many .spec-group-item .spec-item-add button { display: table-cell; height: 32px; font-size: 1.3rem; border-color: #e3e2e5; border-left: none; border-top-right-radius: 4px; border-bottom-right-radius: 4px; outline: none; }
.goods-spec-many .fa { cursor: pointer; text-align: center; color: #ababab; font-size: 1.3rem; }
.goods-spec-many .fa:hover { color: #6b6b6b; }
.goods-spec-many .spec-group-add { display: none; }
.goods-spec-many .spec-group-add .spec-group-add-item { margin-bottom: 10px; }
.goods-spec-many .spec-group-add .spec-group-add-item input { width: 160px; border-radius: 4px; display: inline-block; margin-left: 12px; }
.goods-spec-many .goods-sku { display: none; /* 批量设置sku */ /* 商品sku表格 */ }
.goods-spec-many .goods-sku .goods-spec-line { border: 1px dashed #e3e2e5; }
.goods-spec-many .goods-sku .spec-batch { margin-bottom: 2rem; }
.goods-spec-many .goods-sku .spec-batch .am-form-label { padding-top: 0; }
.goods-spec-many .goods-sku .spec-batch .am-form-group { margin-left: .6rem; }
.goods-spec-many .goods-sku .spec-batch .am-form-group input { width: 140px; }
.goods-spec-many .goods-sku .spec-sku-tabel td.td-spec-value { padding: .7rem 1.3rem !important; }
.goods-spec-many .goods-sku .spec-sku-tabel input { display: inline-block !important; }

/*# sourceMappingURL=goods.css.map */

</style>

<div class="goods-spec-many am-form-group">
    <div class="goods-spec-box am-u-sm-9 am-u-sm-push-2 am-u-end">
        <!-- 规格属性 -->
        <div class="spec-attr"></div>

        <!-- 添加规格：按钮 -->
        <div class="spec-group-button">
            <button type="button" class="btn-addSpecGroup layui-btn layui-btn-sm">添加规格</button>
        </div>

        <!-- 添加规格：表单 -->
        <div class="spec-group-add">
            <div class="spec-group-add-item am-form-group">
                <label class="am-form-label form-require">规格名 </label>
                <input type="text" class="input-specName tpl-form-input layui-input" placeholder="请输入规格名称">
            </div>
            <div class="spec-group-add-item am-form-group">
                <label class="am-form-label form-require">规格值 </label>
                <input type="text" class="input-specValue tpl-form-input layui-input" placeholder="请输入规格值">
            </div>
            <div class="spec-group-add-item am-margin-top">
                <button type="button" class="btn-addSpecName layui-btn layui-btn-sm"> 确定
                </button>
                <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"> 取消
                </button>
            </div>
        </div>
        <!-- 商品多规格sku信息 -->
        <div class="goods-sku am-scrollable-horizontal">
            <!-- 分割线 -->
            <div class="goods-spec-line my-4"></div>
            <!-- sku 批量设置 -->
            <div class="spec-batch layui-inline">
                <label class="layui-form-label w-48">批量设置</label>
                <div class="layui-input-inline" style="width: 100px;">
                  <input type="text" data-type="goods_no" placeholder="商家编码" class="layui-input">
                </div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="number" data-type="goods_price" placeholder="销售价" class="layui-input">
                </div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="number" data-type="line_price" placeholder="划线价" class="layui-input">
                </div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="number" data-type="stock_num" placeholder="库存数量" class="layui-input">
                </div>
                <div class="layui-input-inline" style="width: 100px;">
                    <input type="number" data-type="goods_weight" placeholder="重量" class="layui-input">
                </div>

                <div class="layui-input-inline" style="width: 100px;">
                    <button type="button" class="btn-specBatchBtn layui-btn">确定</button>
                </div>
            </div>
            <!-- sku table -->
            <table class="spec-sku-tabel layui-table"></table>
        </div>
    </div>
</div>

<!-- 商品规格属性模板 -->
<script id="tpl_spec_attr" type="text/template">
    @{{ each spec_attr }}
    <div class="spec-group-item" data-index="@{{ $index }}" data-group-id="@{{ $value.group_id }}">
        <div class="spec-group-name">
            <span>@{{ $value.group_name }}</span>
            <i class="spec-group-delete fa fa-times-circle" title="点击删除"></i>
        </div>
        <div class="spec-list am-cf">
            @{{ each $value.spec_items item key }}
            <div class="spec-item float-left" data-item-index="@{{ key }}">
                <span>@{{ item.spec_value }}</span>
                <i class="spec-item-delete fa fa-times-circle" title="点击删除"></i>
            </div>
            @{{ /each }}
            <div class="spec-item-add layui-inline">
                <div class="layui-input-inline">
                    <input type="text" class="ipt-specItem layui-input" style="height:32px">
                </div>
                <div class="layui-input-inline">
                    <button type="button" class="btn-addSpecItem layui-btn layui-btn-sm">添加</button>
                </div>
            </div>
        </div>
    </div>
    @{{ /each }}
</script>

<!-- 商品规格table模板 -->
<script id="tpl_spec_table" type="text/template">
    <thead>
        <tr>
            @{{ each spec_attr }}
            <th>@{{ $value.group_name }}</th>
            @{{ /each }}
            <th>商家编码</th>
            <th>销售价</th>
            <th>划线价</th>
            <th>库存</th>
            <th>重量(kg)</th>
        </tr>
    </thead>
    <tbody>
    @{{ each spec_list item }}
    <tr data-index="@{{ $index }}" data-sku-id="@{{ item.spec_sku_id }}">
        @{{ each item.rows td itemKey }}
        <td class="td-spec-value am-text-middle" rowspan="@{{ td.rowspan }}">
            @{{ td.spec_value }}
        </td>
        @{{ /each }}
        <td>
            <input type="text" name="sku[uid]" value="@{{ item.form.goods_no }}" class="ipt-goods-no layui-input am-field-valid" required>
        </td>
        <td>
            <input type="number" name="goods_price" value="@{{ item.form.goods_price }}" class="am-field-valid layui-input" required>
        </td>
        <td>
            <input type="number" name="line_price" value="@{{ item.form.line_price }}" class="am-field-valid layui-input">
        </td>
        <td>
            <input type="number" name="stock_num" value="@{{ item.form.stock_num }}" class="am-field-valid layui-input"
                   required>
        </td>
        <td>
            <input type="number" name="goods_weight" value="@{{ item.form.goods_weight }}" class="am-field-valid layui-input"
                   required>
        </td>
    </tr>
    @{{ /each }}
    </tbody>
</script>
<script src="https://cdn.jsdelivr.net/npm/art-template@4.13.2/lib/template-web.js"></script>


<script>
    layui.extend({
        'attr': 'modules/shop/attr'
    }).use(['attr', 'form', 'element'], function(){
        var attr = layui.attr,
            element = layui.element;

        attr.render({
            container: '.goods-spec-many'
        },{
            spec_attr: [],
            spec_list: []
        })


        // attr.render({
        //     container: '.goods-spec-many'
        // },{
        //     spec_attr: [
        //         {'group_id': 1, 'group_name': '颜色', 'spec_items': [
        //             {'item_id': 11, 'spec_value': '红色'},
        //             {'item_id': 12, 'spec_value': '白色'},
        //             {'item_id': 13, 'spec_value': '蓝色'},
        //         ]},
        //         {'group_id': 2, 'group_name': '内存', 'spec_items': [
        //             {'item_id': 21, 'spec_value': '8G'},
        //             {'item_id': 22, 'spec_value': '16G'},
        //         ]}
        //     ],
        //     spec_list: []
        // })

    })

</script>