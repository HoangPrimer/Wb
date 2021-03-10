<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('product')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="tensanphamc">Tên sản phẩm</label><br>
        <input type="text" name="tensp"><br><br>
        <select name="tendm">
                      <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $al): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option value="<?php echo e($al->id); ?>"><?php echo e($al->name_directory); ?>  
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>  <br><br>
        <label for="tendanhmuc">Mô tả</label><br>
        <textarea name="content"></textarea><br><br>
        <label for="Image">Ảnh</label><br>
        <input type="text" name="image"><br><br>
        
        <button type="submit">thêm</button>
</form>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutwb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Wb\TN\resources\views/auth\Product.blade.php ENDPATH**/ ?>