@extends('inventory views/layout')
@section('content')
 
<div class="card">
  <div class="card-header">products</div>
  <div class="card-body">
      
      <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
       @csrf
        <label>Name</label></br>
        <input type="text" name="productName" id="productName" class="form-control"></br>
        <label>DESCRIPTION</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>NAFDAC.NO</label></br>
        <input type="text" name="nafdacno" id="nafdacno" class="form-control"></br>
        <label>PRICE</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>QUANTITY</label></br>
        <input type="number" name="quantity" id="quantity" class="form-control"></br>
        <label>IMAGE</label></br>
        <input type="file" name="image" id="image" class="form-control"></br>
        <input type="submit" value="upload" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop