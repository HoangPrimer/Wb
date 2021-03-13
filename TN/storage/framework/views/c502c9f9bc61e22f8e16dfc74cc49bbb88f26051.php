<?php $__env->startSection('content'); ?>

        <div class="nav-title">
          <p> Đăng Tin Bán Sản Phẩm</p>
        </div>
        <div class="nav-content">
                  <form  action="<?php echo e(route('pstore')); ?>" method="post" enctype="multipart/form-data">
                         <?php echo csrf_field(); ?>
                         <div class="group-form">
                                 <div class="abc">
                                         <p>Tiêu đề</p>
                                 </div>
                                 <div class="abc">
                                         <input class="a"type="text" name="title">
                                 <div class="abc">
                         </div>
                         <div class="group-form">
                          <select name="tendm">
                                  <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option value="<?php echo e($al->id); ?>"><?php echo e($al->name_directory); ?>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>  <br><br>
                         </div>
                         <div class="group-form">
                                 <label for="tendanhmuc">Mô tả</label><br>
                                 <input type="text" name="mota"><br>
                         </div>
                         <div class="group-form">
                                 <label for="Image">Ảnh</label><br>
                                 <input type="file" name="image"><br><br>
                         </div>
                         <div class="group-form">
                                <button type="submit">thêm</button>
                         </div>
                   </form> 
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutwb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Wb\TN\resources\views/auth\Product.blade.php ENDPATH**/ ?>