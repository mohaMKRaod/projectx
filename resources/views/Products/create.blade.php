@extends('layouts.manger')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open(['route'=>'Products.store', 'method'=>'POST']) }}
        @include('Products.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection