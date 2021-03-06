@extends('core::dashboard')

@section('dashboard')

    <div class="flex mb-8 space-x-4">
        <div class="lg:w-6/12 xl:w-3/12 ">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">Traffic</h5><span
                                class="font-semibold text-xl text-gray-800">350,897</span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow rounded-full bg-red-500">
                                <i class="fa fa-bar-chart"></i></div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-4"><span class="text-green-500 mr-2"><i class="fa fa-arrow-up"></i>
                            3.48%</span><span class="whitespace-no-wrap">Since last month</span></p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 ">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">New users</h5><span
                                class="font-semibold text-xl text-gray-800">2,356</span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow rounded-full bg-orange-500">
                                <i class="fa fa-pie-chart"></i></div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-4"><span class="text-red-500 mr-2"><i class="fa fa-arrow-down"></i>
                            3.48%</span><span class="whitespace-no-wrap">Since last week</span></p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 ">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">Sales</h5><span
                                class="font-semibold text-xl text-gray-800">924</span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow rounded-full bg-pink-500">
                                <i class="fa fa-users"></i></div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-4"><span class="text-orange-500 mr-2"><i
                                class="fa fa-arrow-down"></i> 1.10%</span><span class="whitespace-no-wrap">Since
                            yesterday</span></p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 ">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-gray-500 uppercase font-bold text-xs">Performance</h5><span
                                class="font-semibold text-xl text-gray-800">49,65%</span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow rounded-full bg-blue-500">
                                <i class="fa fa-percent"></i></div>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mt-4"><span class="text-green-500 mr-2"><i class="fa fa-arrow-up"></i>
                            12%</span><span class="whitespace-no-wrap">Since last month</span></p>
                </div>
            </div>
        </div>
    </div>


@parent
@endsection

@push('script')
<script>
    layui.use(['admin', 'echarts', 'element'], function () {
        var echarts = layui.echarts,
            element = layui.element;
    })

</script>
@endpush
