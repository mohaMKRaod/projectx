<div class="row">
  <div class="col-sm-2">
    {!! form::label('Title','Title') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('Title') ? 'has-error' : "" }}">
      {{ Form::text('Title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Title ...']) }}
      {{ $errors->first('Title', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('Price','Price') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('Price') ? 'has-error' : "" }}">
      {{ Form::text('Price',NULL, ['class'=>'form-control', 'id'=>'Price', 'placeholder'=>'Price...']) }}
      {{ $errors->first('Price', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('Quantity','Quanity') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('Quantity') ? 'has-error' : "" }}">
      {{ Form::text('Quantity',NULL, ['class'=>'form-control', 'id'=>'Quantity', 'placeholder'=>'Quantity...']) }}
      {{ $errors->first('Quantity', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
