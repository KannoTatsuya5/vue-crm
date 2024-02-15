<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use Inertia\Inertia;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Item $item)
    {
        $items = $item->getItems();
        return Inertia::render('Items/Index',['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Items/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request,Item $item)
    {
        $name = $request->name;
        $memo = $request->memo;
        $price = $request->price;

        $item->storeItem($name,$memo,$price);

        return to_route('items.index')->with(['success'=>'登録しました。']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return Inertia::render('Items/Show', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return Inertia::render('Items/Edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $id = $request->id;
        $name = $request->name;
        $memo = $request->memo;
        $price = $request->price;
        $is_selling = $request->is_selling;

        $item->updateItem($id,$name,$memo,$price,$is_selling);

        return to_route('items.index')->with(['success'=>'更新しました。']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->deleteItem($item->id);
        return to_route('items.index')->with(['success' => '削除しました。']);
    }
}
