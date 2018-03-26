<header class="header">
    <div class="container">
        <div class="logo">
            <img src="./images/logo.png" width="56" height="67" alt="">
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li>
                        <a href="">首页</a>
                    </li>
                    <li>
                        <a href="#">产品</a>
                    </li>
                    <li>
                        <a href="{{ route('news.index') }}">新闻</a>
                    </li>
                    <li>
                        <a href="./problem.html">常见问题</a>
                    </li>
                    <li>
                        <a href="#">关于我们</a>
                    </li>
                    <li>
                        <a href="#">人才招聘</a>
                    </li>
                </ul>
            </nav>
            <ul class="nav navbar-nav navbar-right login-box">
                <!--
                <input type="text">
                <a href="javascript:;" class="searchBtn">
                    <i class="iconfont icon-search"></i>
                </a>-->
                @guest
                    <li><a href="{{ route('login') }}">登录</a></li>
                    <li><a href="{{ route('register') }}">注册</a></li>
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
                                <a href="{{ route('users.edit', Auth::id()) }}">编辑资料</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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



