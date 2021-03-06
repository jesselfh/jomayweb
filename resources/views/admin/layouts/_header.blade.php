<header class="header">
    <div class="container">

            <div class="navbar">
                <div class="logo pull-left">
                    <a href="/"><img src="/images/logo.png">卓镁后台管理</a>
                </div>

                <ul class="nav navbar-nav navbar-right login-box">
                    <!--
                    <input type="text">
                    <a href="javascript:;" class="searchBtn">
                        <i class="iconfont icon-search"></i>
                    </a>-->
                    <li><a href="/">网站主页</a></li>
                    @guest
                        <li><a href="{{ route('login') }}">登录</a></li>
                        <!--<li><a href="{{ route('register') }}">注册</a></li>-->
                    @else

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                                <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                    <img src="{{ Auth::user()->avatar }}" class="img-circle" width="30px" height="30px">
                                </span>

                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">

                                 <li>
                                    <a href="{{ route('users.show', Auth::id()) }}">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>

                                        个人中心
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('users.edit', Auth::id()) }}">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>

                                        编辑资料
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>

                                        退出登录
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>

            </div>
    </div>
</header>