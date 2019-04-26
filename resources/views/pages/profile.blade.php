@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <img src="/uploads/avatar/{{ auth()->user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

                   <h2> this is {{auth()->user()->name}} ' profile   </h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
