<div class="row">
  <div class="col-sm-2">
    <?php echo form::label('Title','Title'); ?>

  </div>
  <div class="col-sm-10">
    <div class="form-group <?php echo e($errors->has('Title') ? 'has-error' : ""); ?>">
      <?php echo e(Form::text('Title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Title ...'])); ?>

      <?php echo e($errors->first('Title', '<p class="help-block">:message</p>')); ?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    <?php echo form::label('Price','Price'); ?>

  </div>
  <div class="col-sm-10">
    <div class="form-group <?php echo e($errors->has('Price') ? 'has-error' : ""); ?>">
      <?php echo e(Form::text('Price',NULL, ['class'=>'form-control', 'id'=>'Price', 'placeholder'=>'Price...'])); ?>

      <?php echo e($errors->first('Price', '<p class="help-block">:message</p>')); ?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    <?php echo form::label('Quantity','Quanity'); ?>

  </div>
  <div class="col-sm-10">
    <div class="form-group <?php echo e($errors->has('Quantity') ? 'has-error' : ""); ?>">
      <?php echo e(Form::text('Quantity',NULL, ['class'=>'form-control', 'id'=>'Quantity', 'placeholder'=>'Quantity...'])); ?>

      <?php echo e($errors->first('Quantity', '<p class="help-block">:message</p>')); ?>

    </div>
  </div>
</div>

<div class="form-group">
  <?php echo e(Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit'])); ?>

</div>

<?php /* C:\xampp\htdocs\xclothes\resources\views/Products/form_master.blade.php */ ?>