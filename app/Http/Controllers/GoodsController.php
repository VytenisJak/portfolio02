<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sortable;

use App\Models\goods;
use App\Models\categories;
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
        $goods = goods::sortable()->get();
        $categories = Categories::all(); 
        return view('goods.index', ['goods' => $goods, 'categories'=> $categories]);
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
     * @param  \App\Http\Requests\StoregoodsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function show(goods $goods)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function edit(goods $goods)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\goods  $goods
     * @return \Illuminate\Http\Response
     */
    public function destroy(goods $goods)
    {
        //
    }

    public function storeAjax(Request $request)
    {
        $good = new goods;
        $good->title = $request->good_title;
        $good->description = $request->good_description;
        $good->image_url = $request->good_image_url;
        $good->image_name = $request->good_image_name;
        $good->price = $request->good_price;
        $good->category_id = $request->good_category_id;  
        $good->save();

        $goodsarray = array(
            "GoodID" => $good->id, 
            "GoodTitle" => $good->title,
            "GoodDescription" => $good->description,
            "GoodImage" => $good->image_url,
            "GoodImageName" => $good->image_name,
            "GoodPrice" => $good->price,
            "GoodCategoryID" => $good->category_id,
        );
        $json_response =response()->json($goodsarray); 
        return $json_response;
    }

    public function destroyAjax(goods $goods)
    {
        $goods->delete();
    }
    public function showAjax(goods $goods)
    {
        $goodsarray = array(
            "GoodID" => $goods->id, 
            "GoodTitle" => $goods->title,
            "GoodDescription" => $goods->description,
            "GoodImage" => $goods->image_url,
            "GoodImageName" => $goods->image_name,
            "GoodPrice" => $goods->price,
            "GoodCategory" => $goods->goodcategory->CategoryName,
        );
        $json_response =response()->json($goodsarray); 
        return $json_response;
    }

    public function updateAjax(Request $request, goods $goods)
    {
        $goods->title = $request->good_title;
        $goods->description = $request->good_description;
        $goods->image_url = $request->good_image_url;
        $goods->image_name = $request->good_image_name;
        $goods->price = $request->good_price;
        $goods->category = $request->good_category;  
        $goods->save();  

        $goodsarray = array(
            "GoodID" => $goods->id, 
            "GoodTitle" => $goods->title,
            "GoodDescription" => $goods->description,
            "GoodImage" => $goods->image_url,
            "GoodImageName" => $goods->image_name,
            "GoodPrice" => $goods->price,
            "GoodCategory" => $goods->goodcategory->CategoryName,
        );
        $json_response =response()->json($goodsarray); 
        return $json_response;
    }
}

