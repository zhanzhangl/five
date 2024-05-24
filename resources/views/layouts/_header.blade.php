<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <div class="item">
        <img class="ui image" style="width:26px;height:26px;margin:-2px 6px 0 0;" src="https://cdn.learnku.com//uploads/communities/WtC3cPLHzMbKRSZnagU9.png!/both/44x44">
        <!-- <img class="ui image" style="width:26px;height:26px;margin:-2px 6px 0 0;" src="https://www.zhanzhangl.com/wp-content/uploads/2024/04/cropped-2024041014585673.jpg"> -->
        <a class="navbar-brand " href="{{ url('/') }}">
          Five App
        </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">文档</a></li>
        <li class="nav-item"><a class="nav-link" href="#">会员</a></li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- 登录注册链接开始 -->
        @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
 aria-haspopup="true" aria-expanded="false">
            <img src="https://www.zhanzhangl.com/wp-content/uploads/2024/04/cropped-2024041014585673.jpg" class="img-responsive img-circle" width="30px" height="30px">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('user_addresses.index') }}" class="dropdown-item">收货地址</a>
            <a class="dropdown-item" id="logout" href="#"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出登录</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </li>
        @endguest
        <!-- 登录注册链接结束 -->
      </ul>
    </div>
  </div>
</nav>
