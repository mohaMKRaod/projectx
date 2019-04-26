@extends('layouts.manger')
@section('content')
<br/>
<br/>
<br/>
<br/>
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('Products.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           
        <img class="card-img-top" src="/uploads/avatar/{{ $product->Pavatar }}" alt="product image">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title : </strong>
            {{ $product->Title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price : </strong>
            {{ $product->Price}}
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantity : </strong>
            {{ $product->Quantity}}
        </div>
        
    </div>
</div>
</div>
@endsection
