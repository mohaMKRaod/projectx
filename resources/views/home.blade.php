
@extends('layouts.app')

@section('content')
<section class="bg0 p-t-23 p-b-140">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                       <h2>  welcome '{{auth()->user()->name}}' </h2>
                    
                  
                 <p> you can go to your profile    <a href ='/profile'> here </a><p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
