@extends('inventory views/layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>INVENTORY</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('products.create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                      
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>DESCRIPTION</th>
                                        <th>NAFDAC REG</th>
                                        <th>price</th>
                                        <th>QUANTITY</th>
                                        <th>PHOTO</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                
                                <tr>
                                   <td>{{$product->id}}</td>
                                   <td>{{$product->productName}}</td>
                                   <td>{{$product->description}}</td>
                                   <td>{{$product->nafdacno}}</td>
                                   <td>{{$product->price}}</td>
                                   <td>{{$product->quantity}}</td>
                                   <td>{{$product->image}}</td>

 
                                        <td>
                                            <a href="{{ route('products.show', $product->id) }}" title="View product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('products.edit', $product->id ) }}" title="Edit product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ route('products.destroy',$product->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
