<?php $__env->startSection('content'); ?>
    <div class="main">
  <div class="directory">
      <div class="row">
          <div class="colums">
              <div class="image">
                  <img src="../images/cat-1.jpg">
              </div>
              <div class="nd">
               <h4> Đồ điện tử</h4>
              <?php $__currentLoopData = $dodientu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-16.jpg">
              </div>
              <div class="nd">
              <h4> Thiết bị, nghe nhìn</h4>
              <?php $__currentLoopData = $nghenhin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-24.jpg">
              </div>
              <div class="nd">
              <h4> Đồ gia dụng</h4>
              <?php $__currentLoopData = $dogiadung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-41.jpg">
              </div>
              <div class="nd">
              <h4> Xe cộ</h4>
              <?php $__currentLoopData = $xeco; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-48.jpg">
              </div>
              <div class="nd">
              <h4> Thời trang, Phụ kiện</h4>
              <?php $__currentLoopData = $thoitrang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>

      </div>

      <div class="row">
          <div class="colums">
              <div class="image">
              <img src="../images/cat-64.jpg">
              </div>
              <div class="nd">
              <h4> Nội, Ngoại thất</h4>
              <?php $__currentLoopData = $noithat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-74.jpg"></div>
              <div class="nd">
              <h4> Vật nuôi, Cây cảnh</h4>
              <?php $__currentLoopData = $vatnuoi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-82.jpg">
              </div>
              <div class="nd">
              <h4> Thể thao</h4>
              <?php $__currentLoopData = $thethao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-86.jpg">
              </div>
              <div class="nd">
              <h4> Sách báo, Nghệ thuật</h4>
              <?php $__currentLoopData = $sach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-92.jpg">
              </div>
              <div class="nd">
              <h4> Máy móc chuyên dụng</h4>
              <?php $__currentLoopData = $may; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>

      </div>
  </div>
 
  <div class="producttt">
             <div class="title">
                     <h1> Có Thể Bạn Quan Tâm</h1>
             </div>
   
            <div class="row">
                <div class="colum-d3">
                   <div class="image-d1">
                         <img src="../images/cat-92.jpg">
                   </div>
                    <div class="nd">
                        <p>Tên Sản Phẩm </p>
                        <p>90000</p>
                    </div>
                </div>

                <div class="colum-d3">
                   <div class="image-d1">
                         <img src="../images/cat-92.jpg">
                   </div>
                    <div class="nd">
                        <p>Tên Sản Phẩm </p>
                        <p>90000</p>
                    </div>
                </div>

                <div class="colum-d3">
                   <div class="image-d1">
                         <img src="../images/cat-92.jpg">
                   </div>
                    <div class="nd">
                        <p>Tên Sản Phẩm </p>
                        <p>90000</p>
                    </div>
                </div>

                <div class="colum-d3">
                   <div class="image-d1">
                         <img src="../images/cat-92.jpg">
                   </div>
                    <div class="nd">
                        <p>Tên Sản Phẩm </p>
                        <p>90000</p>
                    </div>
                </div>

            </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutwb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Wb\TN\resources\views/welcome.blade.php ENDPATH**/ ?>