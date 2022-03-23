<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Auth;
class vendorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
    #$vendor_id=Auth::user()->vendor_id;
    $product = product::all();#here("vendor_id","=",$vendor_id);
      return view("inventory views/index")->with('products',$product);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("inventory views/create") ;//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $request->validate([
          //  "name"=>"required",
        //    "description"=>"required",
      //      "price"=>"required",
    //        "nafdacno"=>"required",
            //"quantity"=>"required",
          //  "image" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048"
        //]);

        
        $product->productName=$request->productName;
        $product->description=$request->description;
        $product->nafdacno=$request->nafdacno;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->image = $request->file('image')->store('storage');
        product::create($product);
        return redirect("products")->with('flash message','product added successfully'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $product = product::find($id);
       return view('inventory views/show')->with('products',$product);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        return view('inventory views/edit')->with('product',$product);//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
            $request->validate([
            "name"=>"required",
            "description"=>"required",
            "price"=>"required",
            "nafdacno"=>"required",
            "quantity"=>"required",
            "image" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048"]);
            product::find($id);
            $product->productName=$request->productName;
            $product->description=$request->description;
            $product->nafdacno=$request->nafdacno;
            $product->price=$request->price;
            $product->quantity=$request->quantity;
            $product->image = $request->file('image')->store('storage');
            return redirect("products")->with("message","product updated successfully "); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = product::destroy($id);
        return redirect("products")->with("message", "product removed");  //
        //
    }
}
