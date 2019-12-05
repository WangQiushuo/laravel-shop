<div class="layui-header header header-demo">
    <div class="layui-main">
        <a class="logo" href="/">
          管理系统
        </a>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        @guest
            <ul class="layui-nav layui-layout-right">
              <li class="layui-nav-item">
                <a href="{{ route('login') }}">
                  登录
                </a>
              </li>
            </ul>
        @else
            <ul class="layui-nav layui-layout-right">
              <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                  <dd><a href="">邮件管理</a></dd>
                  <dd><a href="">消息管理</a></dd>
                  <dd><a href="">授权管理</a></dd>
                </dl>
              </li>
              <li class="layui-nav-item">
                <a href="javascript:;">
                  <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                  {{ Auth::user()->name }}
                </a>
                <dl class="layui-nav-child">
                  <dd><a href="">基本资料</a></dd>
                  <dd><a href="">安全设置</a></dd>
                </dl>
              </li>
              <li class="layui-nav-item">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">退出</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </li>
            </ul>
        @endguest
        
    </div>
</div>