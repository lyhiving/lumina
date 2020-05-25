@extends('core::layouts.blank')

@section('content')
    <div class="container m-4 mx-auto">
        <x-card title="订单详情">
            <h1 class="text-xl font-bold mb-2">订单号：{{ $order->order_id }}</h1>
            <div>订单状态：备货中</div>
            <hr />
            <div class="flex">
                <div class="w-1/3">支付方式：在线支付-微信</div>
                <div class="w-1/3">下单时间：2020/05/19 10:37:34</div>
                <div class="w-1/3">承诺发货时间：2020/05/22 10:37:34</div>
            </div>
            <div class="flex">
                <div class="w-1/3">付款时间：-</div>
                <div class="w-1/3">完成时间: -</div>
            </div>
            <div class="flex">
                <div class="w-1/3">发货时间：-</div>
                <div class="w-1/3">物流单号：-</div>
                <div class="w-1/3">物流公司: -</div>
            </div>
        </x-card>

        <x-card title="商品信息">
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>商品信息</th>
                        <th>单价（元）</th>
                        <th>数量（件）</th>
                        <th>商品总价（元）</th>
                        <th>优惠信息</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($order->skus as $sku)
                    <tr>
                        <td>
                            <div class="flex">
                                <div style="width:75px;height:75px;background-size:100% 100%;background-image: url({{ $sku->spu->thumb }});"></div>
                                <div class="flex-1 ml-2">
                                    <a href="">{{ $sku->spu->name }}</a>
                                    <div>规格：{{ $sku->specVals->implode('value', '|') }}</div>
                                    <div>SKU：{{ $sku->uid }}</div>
                                </div>
                            </div>
                        </td>
                        <td>¥{{ $sku->pivot->price_fee }}</td>
                        <td>{{ $sku->pivot->number }}</td>
                        <td>¥{{ $sku->pivot->subtotal }}</td>
                        <td>无优惠</td>
                    </tr>
                    @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="6" align="right">
                            合计：￥{{ $order->pre_total_fee }},
                            实付款：￥<strong class="text-red-600">{{ $order->total_fee }}</strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </x-card>

        <x-card title="收货信息">
            <div class="flex">
                <div class="w-1/2">收货人：{{ Arr::get($order->address, 'contact_name') }}</div>
                <div class="w-1/2">联系方式：{{ Arr::get($order->address, 'contact_phone') }}</div>
            </div>
            <div class="flex">
                <div class="w-1/2">收货地址：{{ Arr::get($order->address, 'province') }} {{ Arr::get($order->address, 'city') }}{{ Arr::get($order->address, 'district') }}{{ Arr::get($order->address, 'address') }}</div>
                <div class="w-1/2">用户留言：{{ Arr::get($order, 'msg') }}</div>
            </div>
        </x-card>

        {{-- <x-card title="用户信息">
            <div class="flex">
                <div class="w-1/3">货到付款拒收率（含取消）50.00 %</div>
                <div class="w-1/3">历史货到付款订单数 2</div>
                <div class="w-1/3">订单投诉率 0%</div>
            </div>
        </x-card> --}}

        <x-card title="物流信息">
            <div class="mb-4">
                <div>物流公司：中通速递(常用)</div>
                <div>运单号码：75353332329723</div>
            </div>
            <ul class="layui-timeline">
                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis fa fa-check-circle"></i>
                    <div class="layui-timeline-content layui-text">
                        <h4 class="layui-timeline-title mb-2 font-bold">【东莞市】快件离开【虎门中心】发往乌鲁木齐中转</h4>
                        <small>2020-05-19 02:44:48</small>
                    </div>
                </li>

                <li class="layui-timeline-item">
                    <i class="layui-icon layui-timeline-axis fa fa-check-circle text-gray-600"></i>
                    <div class="layui-timeline-content layui-text">
                        <h4 class="layui-timeline-title mb-2">【惠州市】【惠州大湖】(0752-5759880、0752-5759881)的业务员青塘分部-潘浪辉(18512087563)已揽收 青塘分部-潘浪辉18512087563</h4>
                        <small>2020-05-18 20:53:03</small>
                    </div>
                </li>

              </ul>
        </x-card>
    </div>

    {{-- <x-formItem class="layui-layout-admin">
        <div class="layui-footer z-50 shadow" style="left:0;">
            <button class="layui-btn J_ajax" lay-submit>{{ __('core::main.submit') }}</button>
            <button type="reset" class="layui-btn layui-btn-primary" lay-submit-cancel>{{ __('core::main.reset') }}</button>
        </div>
    </x-formItem> --}}
@endsection
