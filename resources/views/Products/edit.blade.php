@extends('layouts.manger')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($product,['route'=>['Products.update',$product->id],'method'=>'PATCH']) }}
      @include('Products.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection