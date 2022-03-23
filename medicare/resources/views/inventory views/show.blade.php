
@extends('inventory views/layout')
@section('content')
<div class="card">
  <div class="card-header">selected product</div>
  <div class="card-body">
  
        <div class="card-body">
        <h4 class="card-title">Name : {{ $products->productName }}</h4>
        <p class="card-text">Description :{{$products->description}}</p>
        <p class="card-text">NAFDAC REG :{{$products->nafdacno}} </p>
        <p class="card-text">PRICE : {{$products->price}}</p>
        <p class="card-text">PRICE : {{$products->quantity}}</p>
        <h5 class="card-text">PHOTO : {{$products->image}}</h5>
       
  </div>
      
    </hr>
  
  </div>
</div>
@stop