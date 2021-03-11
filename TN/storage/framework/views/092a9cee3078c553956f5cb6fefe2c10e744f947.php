<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="../css/index.css" rel="stylesheet" type="text/css"/>
  <link href="../css/page.css" rel="stylesheet" type="text/css"/>
  <link href="../css/product.css" rel="stylesheet" type="text/css"/>
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
                        <a href="<?php echo e(url('/profile')); ?>"><i class="fas fa-user"></i> Profile</a>
                      
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                 <?php endif; ?>

                 <div class="menu-bar">
                <a href="<?php echo e(route('index')); ?>"><i class="fas fa-home"></i>Home</a>
                <a href="https://oto.com.vn/" title="Truy cập oto.com.vn"><i class="fas fa-car"></i>Oto.com.vn</a>
                <a href="<?php echo e(url('product/create')); ?>"><i class="fas fa-pencil-alt"></i>Đăng Tin </a>
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
     
     <?php echo $__env->yieldContent('content'); ?>
    
     <div class="footer">
       <h1> Hashaghi By Yasuo</h1>
     </div>
   </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\Wb\TN\resources\views/layouts/layoutwb.blade.php ENDPATH**/ ?>