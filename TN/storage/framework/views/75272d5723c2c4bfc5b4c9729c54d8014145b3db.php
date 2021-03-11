<?php $__env->startSection('content'); ?>
  <div class="directory">
      <div class="row">
          <div class="colums">
              <div class="image">
                  <img src="../images/cat-1.jpg">
              </div>
              <div class="nd">
               <h4> Đồ điện tử</h4>
              <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $b; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $d; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $f; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $q; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
          <div class="colums">
              <div class="image">
              <img src="../images/cat-74.jpg"></div>
              <div class="nd">
              <h4> Vật nuôi, Cây cảnh</h4>
              <?php $__currentLoopData = $w; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $e; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $r; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
              <?php $__currentLoopData = $t; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($al->name_directory); ?> </p>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>

      </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutwb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Wb\TN\resources\views/welcome.blade.php ENDPATH**/ ?>