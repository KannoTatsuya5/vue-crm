<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    /**
     * アイテムテーブルのデータを全件取得.
     *
     * @return アイテムリスト
     */
    public function getItems() {
        $items = DB::table('items')->select('id','name','memo','price','is_selling')->get();
        return $items;
    }

    /**
     * アイテムテーブルのデータを追加.
     *
     * @param String $name
     * @param String $memo
     * @param String $price
     * @return void
     */
    public function storeItem($name,$memo,$price) {
        DB::table('items')->insert([
            'name' => $name,
            'memo' => $memo,
            'price' => $price
        ]);
    }

}
