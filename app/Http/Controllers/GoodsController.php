<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sortable;

use App\Models\goods;
use App\Http\Requests\StoregoodsRequest;
use App\Http\Requests\UpdategoodsRequest;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = goods::all();  
        return view('goods.index',['goods' => $goods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregoodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregoodsRequest $request)
    {
        $good = new goods;
        $good->title = $request->good_title;
        $good->description = $request->good_description;
        $good->image_url = $request->good_image_url;
        $good->status_id = $request->good_status_id;
        $good->price = $request->good_price;
        $good->category = $request->good_category;  

        $good->save();

        return redirect()->route('goods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function show(goods $goods)
    {
        return view('goods.show',['goods' => $goods]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function edit(goods $goods)
    {
        return view('goods.edit',['goods' => $goods]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategoodsRequest  $request
     * @param  \App\Models\goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategoodsRequest $request, goods $goods)
    {
        $goods->title = $request->good_title;
        $goods->description = $request->good_description;
        $goods->image_url = $request->good_image_url;
        $goods->status_id = $request->good_status_id;
        $goods->price = $request->good_price;
        $goods->category = $request->good_category;

        $goods->save();

        return redirect()->route('goods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function destroy(goods $goods)
    {
        $goods->delete();
        return redirect()->route('goods.index');
    }
}
