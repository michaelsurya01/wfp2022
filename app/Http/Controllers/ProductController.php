<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dengan raw
        // $queryRaw = DB::select(DB::raw("select * from product"));
        // dd($queryRaw);

        // dengan builder
        // $queryBuilder = DB::table('product')->get();
        // dd($queryBuilder);

        // dengan model
        $queryModel = Product::all();
        return view('product.index', compact('queryModel'));
        // dd($queryModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataproduct = DB::table('product')->where('id',$id)->first();
        dd($dataproduct);
        return view('poduct.show', compact('dataproduct'));
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
        //
    }
    public function showInfo()
    {
        // return response()->json(array(
        //     'status'=>'oke',
        //     'msg'=>"<div class='alert alert-info'>
        //              Did you know? <br>This message is sent by a Controller.'</div>"
        //   ),200);
        
        $result=Product::orderBy('harga','DESC')->first();
        return response()->json(array(
          'status'=>'oke',
          'msg'=>"<div class='alert alert-info'>
          Did you know? <br>The most expensive product is ". $result->nama . "</div>"
        ),200);
      
    }

    public function showProduct(Request $request)
    {
        $product = Product::find($request->idproduct);
        return response()->json(array(
            'status'=>'oke',
            'msg' => view('product.show',compact('product'))->render()
        ),200);
    }
}
