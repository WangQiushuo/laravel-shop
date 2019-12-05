@extends('admin.layouts.app')
@section('title','首页')
<!-- @section('styles')
    <style>
        .layui-tab-title li:first-child > i {
            display: none;
        }
    </style>
@endsection -->
@section('content')
    <div class="layui-body">
        <div class="layui-tab" lay-allowClose="true" lay-filter="tab-switch">
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-text">
                        服务器环境
                    </blockquote>

                    @foreach($envs as $env)
                    <div class="layui-form-item">
                        <label class="layui-form-label">{{$env['name']}}</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" required  lay-verify="required"  class="layui-input" value="{{$env['value']}}">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- @section('scripts')
    <script src="{{ asset('/js/index.js') }}"></script>
@endsection -->