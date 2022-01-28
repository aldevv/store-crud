<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function createProd(Request $req)
    {
        $prod = new Product();
        $prod->name = $req->Name;
        $prod->price = $req->Price;
        $prod->save();
        return view('products.crud', ['products' => Product::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
    }

    public function updateProd(Request $req)
    {

        $p = Product::find($req->id);
        $p->name = $req->Name;
        $p->price = $req->Price;
        $p->save();
        return view("products.crud", ['products' => Product::all()]);
    }

    public function deleteProd(Request $req)
    {
        $p = Product::find($req->id);
        $p->delete();
        return view("products.crud", ['products' => Product::all()]);
    }

    public function showAll(Request $req)
    {
        return view("products.crud", ['products' => Product::all(), 'user_id' => $req->query('user_id'),'user_name' => $req->query('user_name')]);
    }

    public function buyProduct(Request $req)
    {
        $u = User::find($req->user_id);
        $prod = Product::find($req->product_id);
        $u->products()->attach($prod);
        $u->save();
        return view("clients.crud", ['users' => User::all()]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Product::where('id', $id)->first();
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
    public function update(Request $req, $id)
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
        //
    }
}
