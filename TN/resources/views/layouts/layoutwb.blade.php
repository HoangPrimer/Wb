<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="../css/index.css" rel="stylesheet" type="text/css"/>
  <link href="../css/page.css" rel="stylesheet" type="text/css"/>
  <link href="../css/post.css" rel="stylesheet" type="text/css"/>
  <link href="../css/profile.css" rel="stylesheet" type="text/css"/>
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
                                <a href="{{ route('profile') }}">
                                    {{ Auth::user()->email }} 
                                </a>

                                <div >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                 @endif

                 <div class="menu-bar">
                <a href="{{route('index')}}"><i class="fas fa-home"></i>Home</a>
                <a href="https://oto.com.vn/" title="Truy cập oto.com.vn"><i class="fas fa-car"></i>Oto.com.vn</a>
                <a href="{{route('pget')}}"><i class="fas fa-pencil-alt"></i>Đăng Tin </a>
                 </div>
             </div>
          <div class="top-search">
            <div class="logo">
              <a href=""><img src="../images/cong.png"></a>
            </div>
            <div class="box-searh">
                 <span class="icon"><i class="fas fa-search"></i></span>
                 <input type="search"  id="search" placeholder="Search..."> 
            </div>
            <div class="button">
              <button type="submit">Tìm Kiếm</button>
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