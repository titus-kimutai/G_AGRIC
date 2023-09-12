<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
        return ProductResource::collection(Product::all()); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = product::create($request->all());
        return response($product, 201);
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
        if(is_null($product)){
            return response()->json(['message' => 'product Not Found'],404);
        }
        return response()->json(product::find($id),200);
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
        $product = product::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'product Not Found'],404);
        }
        $product ->update($request -> all());
        return response($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $product = product::find($id);
            if(is_null($product)){
                return response()->json(['message' => 'product Not Found'],404);
            }
            $product ->delete();
            return response($product, 204);    }
}
