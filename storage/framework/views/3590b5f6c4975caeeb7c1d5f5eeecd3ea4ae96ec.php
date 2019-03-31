<?php $__env->startSection('content'); ?>
    <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>Create Products</h2>
        </div>
    </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th with="80px">No</th>
            <th>Title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th with="140px" class="text-center">
                <a href="<?php echo e(route('Products.create')); ?>" class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
        </tr>
        <?php $no=1; ?>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($no++); ?></td>
        <td><?php echo e($value->Title); ?></td>
        <td><?php echo e($value->Price); ?></td>
        <td><?php echo e($value->Quantity); ?></td>
        <td>
          <a class="btn btn-info btn-sm" href="<?php echo e(route('Products.show',$value->id)); ?>">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="<?php echo e(route('Products.edit',$value->id)); ?>">
              <i class="glyphicon glyphicon-pencil"></i></a>
            <?php echo Form::open(['method' => 'DELETE','route' => ['Products.destroy', $value->id],'style'=>'display:inline']); ?>

              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            <?php echo Form::close(); ?>

        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\xclothes\resources\views/Products/index.blade.php */ ?>