@extends('inventory views/layout')
@section('content')
 
<div class="card">
  <div class="card-header">products</div>
  <div class="card-body">
      
      <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @Method("PATCH")
        <label>Name</label></br>
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <input type="text" name="name" id="name" value="{{$product->productName}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$product->description}}" class="form-control"></br>
        <label>NAFDAC.NO</label></br>
        <input type="text" name="nafdacno" id="nafdacno" value="{{$product->nafdacno}}" class="form-control"></br>
        <label>PRICE</label></br>
        <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control"></br>
        <label>QUANTITY</label></br>
        <input type="number" name="quantity" id="quantity" value="{{$product->quantity}}" class="form-control"></br>
        <label>IMAGE</label></br>
        <input type="file" name="image" id="image" value="{{$product->image}}" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop