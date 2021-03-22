<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet"> 
  <link href="<?php echo e(asset('css/index.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo e(asset('css/drproduct.css')); ?>" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=vivaldi">
  <title>Website - SecondHannd</title>
</head>
<body>
    <div class="all">
   
       <div class="header">
             <div class="top-bar">
                 <?php if(Route::has('login')): ?>
                <div class="tab-user">
                    <?php if(auth()->guard()->check()): ?>
                    <div class="dropdown">
                    <img src="/images/avatar/<?php echo e(Auth::user()->image); ?>" width="50px" height="50px" style="border-radius:50%">
                        <div class="dropdown-content">
                        <?php if(Auth::user()->is_admin == 'admin'): ?>
                            <a  href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Đăng xuất')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                          <?php echo csrf_field(); ?>
                                      </form>
                            <a href="<?php echo e(route('profile')); ?>">Trang cá nhân</a>
                            <a href="<?php echo e(route('adpost')); ?>">Trang quản trị</a>
                        <?php else: ?>
                          <a  href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Đăng xuất')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                            <a href="<?php echo e(route('profile')); ?>">Trang cá nhân</a>
                            <a href="<?php echo e(route('listpost')); ?>">Quản lý bài viết</a>
                        <?php endif; ?>
                        </div>
                    </div>         
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                 <?php endif; ?>

                 <div class="menu-bar">
                <a href="<?php echo e(route('home')); ?>"><i class="fas fa-home"></i>Home</a>
                <a href="https://oto.com.vn/" title="Truy cập oto.com.vn"><i class="fas fa-car"></i>Oto.com.vn</a>
                <a href="<?php echo e(route('createpost')); ?>"><i class="fas fa-pencil-alt"></i>Đăng Tin </a>
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
     <?php echo $__env->yieldContent('content'); ?>
    </div>
     <div class="footer">
       <h1> Hashaghi By Yasuo</h1>
     </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Wb\TN\resources\views/layouts/layoutwb.blade.php ENDPATH**/ ?>