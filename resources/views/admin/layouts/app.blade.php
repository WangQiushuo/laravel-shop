<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/> 
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="format-detection" content="telephone=no"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Shine 管理系统</title>
    <!-- 样式 -->
    <link rel="stylesheet" href="{{ asset('layui/css/layui.css') }}">
    <link href="{{ asset('css/outer-global.css') }}" rel="stylesheet" type="text/css"  media="all" />
    <link href="{{ asset('css/outer-styles.css') }}" rel="stylesheet" type="text/css"  media="all" />
</head>
<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        @guest
            @include('layouts._header')
            <div class="layui-container">
                <div class="layui-row">
                    <div class="layui-col">
                        <div class="layui-body site-demo">
                            <div class="layui-content">
                            @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts._footer')
        @else
            @include('layouts._header')
            @include('layouts._sidebar')
            <div class="layui-container">
                <div class="layui-row">
                    <div class="layui-col">
                        <div class="layui-body site-demo">
                            <div class="layui-content">
        
                            @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts._footer')
        @endguest
            
    </div>
    <!-- JS 脚本 -->
    <script src="{{ asset('/layui/layui.all.js') }}"></script>
    <script>
    layui.use(['form', 'layedit', 'laydate', 'jquery', 'layer'], function(){
      var form = layui.form
         ,layer = layui.layer
         ,layedit = layui.layedit
         ,laydate = layui.laydate
         ,element = layui.element
         ,$ = layui.jquery;
  
        $(function () {
            $(".site-tree-mobile").click(function () {
                $("body").addClass("site-mobile");
                $(".site-mobile-shade").click(function () {
                    $("body").removeClass("site-mobile");
                });
            });
        });
    });
    </script>
</body>
</html>