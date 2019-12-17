@extends('Fontadmin.master')

@section('page-title')
    Product
@endsection

@section('content-heading')
    Product List
@endsection


@section('main-content')
<div class="col-md-12">
@foreach ($products as $product)
<div class="card" style="float:left; border: 1px solid black;padding: 10px;margin: 10px">
    <img src="../../{{$product->images }}" class="card-img-top" alt="product picture" height="130px" width="195px">
    <div class="card-body" style="padding: 5px;margin: 0px">
      <h6 class="card-title" style="margin: 0px">{{ $product->productName }}</h6>
      <p style="padding: 0px;margin: 0px;font-size: 10px">{{ $product->price }}</p>
      <p style="padding: 0px;margin: 0px;font-size: 10px">Nedded: {{ $product->qtyneed  }}</p>
      <p style="padding: 0px;margin: 0px;font-size: 10px">Received:  {{ $product->qtyreceived }}</p>
    </div>
    <div class="footer" style="padding:0px;margin:5px">
      <a href="#"  style="float: left;color:black"><i class="fas fa-edit"></i></a>
      <a href="#"  style="float: right;color:red"><i class="fas fa-trash-alt"></i></a>
    </div>
</div>

@endforeach
</div>
@endsection
