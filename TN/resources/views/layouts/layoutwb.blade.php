<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet"> 
  <link href="{{asset('css/index.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('css/drproduct.css')}}" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=vivaldi">
  <title>Website - SecondHannd</title>
</head>
<body>
    <div class="all">
   
       <div class="header">
             <div class="top-bar">
                 @if (Route::has('login'))
                <div class="tab-user">
                    @auth
                    <div class="dropdown">
                    <img src="/images/avatar/{{ Auth::user()->image }}" width="50px" height="50px" style="border-radius:50%">
                        <div class="dropdown-content">
                        @if(Auth::user()->is_admin == 'admin')
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Đăng xuất') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                            <a href="{{ route('profile') }}">Trang cá nhân</a>
                            <a href="{{ route('adpost') }}">Trang quản trị</a>
                        @else
                          <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Đăng xuất') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="{{ route('profile') }}">Trang cá nhân</a>
                            <a href="{{ route('listpost') }}">Quản lý bài viết</a>
                        @endif
                        </div>
                    </div>         
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                 @endif

                 <div class="menu-bar">
                <a href="{{route('home')}}"><i class="fas fa-home"></i>Home</a>
                <a href="https://oto.com.vn/" title="Truy cập oto.com.vn"><i class="fas fa-car"></i>Oto.com.vn</a>
                <a href="{{route('createpost')}}"><i class="fas fa-pencil-alt"></i>Đăng Tin </a>
                 </div>
             </div>
          <div class="top-search">
            <div class="logo">
              <a href=""><img src="/images/cong.png"></a>
            </div>
            <div class="box-searh">
                 <span class="icon"><i class="fas fa-search"></i></span>
                 <input type="search"  id="search" placeholder="Search..."> 
                 <div class="button">
                    <button type="submit">Tìm Kiếm</button>
                 </div>
            </div>
           
          </div>
     </div>
    <div class="mainnn">
     @yield('content')
    </div>
     <div class="footer">
       <h1> Hashaghi By Yasuo</h1>
     </div>
    </div>
</body>
</html>