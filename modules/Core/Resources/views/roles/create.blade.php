@extends('core::layouts.master')

@section('content')
    <div class="layui-card">
        <div class="layui-card-header">新增</div>
        <div class="layui-card-body">
            <x-form :action="route('core.roles.store')" method="post">


                <div class="layui-row layui-col-space10">
                    @include('core::roles.fields')
                </div>

            </x-form>
        </div>
    </div>
@endsection
