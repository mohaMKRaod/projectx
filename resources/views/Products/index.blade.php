@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>Create Products</h2>
        </div>
    </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th with="80px">Nof</th>
            <th>Title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th with="140px" class="text-center">
                <a href="{{route('Products.create')}}" class="btn btn-success btn-sm">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
        </tr>
        <?php $no=1; ?>
    @foreach ($product as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->Title }}</td>
        <td>{{ $value->Price }}</td>
        <td>{{ $value->Quantity }}</td>
        <td>
          <a class="btn btn-info btn-sm" href="{{route('Products.show',$value->id)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('Products.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['Products.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
    </table>

@endsection