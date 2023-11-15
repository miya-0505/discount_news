<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // データベース内のすべてのItemを取得し、item変数に代入
      $items = Item::all();
      // 'items'フォルダ内の'index'viewファイルを返す。
      // その際にview内で使用する変数を代入します。
      return view('layouts/post', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 新しい Item を作成
      $item = new Item;
      // フォームから送られてきたデータをそれぞれ代入
      $item->name = $request->name;
      $item->description = $request->description;
      $item->price = $request->price;
      $item->admin_user_id = 2;
      // データベースに保存
      $item->save();
      // indexページへ遷移
      return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Item::find($id); // idでItemを探し出す
      return view('show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $item = Item::find($id);
      return view('edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $item = Item::find($id);
      $item->name = $request->name;
      $item->description = $request->description;
      $item->price = $request->price;
      $item->save();
      return redirect('items/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $item = Item::find($id);
      $item->delete();
      return redirect('/items');
    }
    
    public function storeInfo(Item $item)
    {
      return view('posts.store_info')->with(['store_info' => $item->get()]);
    }
    
    /*public function show(Item $item)
    {
      return view('posts.store_info')->with(['item' => $item]);
    }
    
    public function show($id)
    {
      return view('posts.top')->with(['item'=>$item]);
    }*/
    
    public function topShowItem(Item $item, AdminUser $adminuser)
    {
      return view('posts/top')->with(['items' => $item->get(),'adminusers'=> $adminuser->get()]);
    }
}
