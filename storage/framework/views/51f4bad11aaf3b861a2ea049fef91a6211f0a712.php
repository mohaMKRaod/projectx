<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <?php echo e(Form::open(['route'=>'Products.store', 'method'=>'POST'])); ?>

        <?php echo $__env->make('Products.form_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo e(form::close()); ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\xclothes\resources\views/Products/create.blade.php */ ?>