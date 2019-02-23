<?php

namespace App\Http\Controllers;

use App\Pictures;
use App\Products;
use Illuminate\Http\Request;
use App\Categories;
use Illuminate\Support\Facades\Auth;


class SellerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $products=Products::where('user_id',$user->id)->get();

        return view('seller.product.show',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categories::pluck('name','id')->all();
        return view('seller.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'categories_id'=>'required',
            'src'=>'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $user= Auth::user();

        $product=Products::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            'categories_id'=>$request->categories_id,
            'user_id'=>$user->id,
            'status'=>0
        ]);

        if($file=$request->file('src')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);

            Pictures::create([
                'src'=>$name,
                'products_id'=>$product->id
                ]);
        }

        return redirect('seller/product');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pictures::where('products_id',$id)->delete();
        Products::findOrFail($id)->delete();
        return redirect('seller/product');
    }
}
