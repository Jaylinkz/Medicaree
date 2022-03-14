@extends('inventory views/layout')
@section('content')
 
<div class="card">
  <div class="card-header">products</div>
  <div class="card-body">
      
      <form action="{{ route('products.store') }}" method="POST">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>NAFDAC.NO</label></br>
        <input type="text" name="nafdacno" id="nafdacno" class="form-control"></br>
        <label>PRICE<A/label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>QUANTITY<A/label></br>
        <input type="number" name="quantity" id="quantity" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop