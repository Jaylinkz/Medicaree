@extends('inventory views/layout')
@section('content')
 
<div class="card">
  <div class="card-header">EDIT PRODUCT</div>
  <div class="card-body">
      
      <form action="{{ route('products.update',$products->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control"></br>
        <label>DESCRIPTION</label></br>
        <input type="text" name="description" id="description" value="{{$products->description}}" class="form-control"></br>
        <label>NAFDAC REG</label></br>
        <input type="text" name="nafdacno" id="nafdacno" value="{{$products->nafdacno}}" class="form-control"></br>
        <label>PRICE</label></br>
        <input type="text" name="price" id="price" value="{{$products->price}}" class="form-control"></br>
        <label>QUANTITY</label></br>
        <input type="number" name="quantity" id="price" value="{{$products->quantity}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop