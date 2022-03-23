@extends('inventory views/layout')
@section('content')
 
<div class="card">
  <div class="card-header">products</div>
  <div class="card-body">
      
      <form action="{{ route('toDo.store') }}" method="POST">
        {!! csrf_field() !!}
        <label>TASK</label></br>
        <input type="text" name="task" id="task" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop