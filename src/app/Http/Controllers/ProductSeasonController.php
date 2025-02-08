<?php

// app/Http/Controllers/ProductSeasonController.php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Season;
use Illuminate\Http\Request;

class ProductSeasonController extends Controller
{
    // 商品と季節を関連付けるメソッド
    public function attachSeasonToProduct(Request $request, $productId)
    {
        // 入力された季節IDを取得（複数でも1つでも）
        $seasonIds = $request->input('season_ids');

        // 商品を取得
        $product = Product::findOrFail($productId);

        // 季節を商品に関連付け
        $product->seasons()->attach($seasonIds);

        return response()->json([
            'message' => '商品と季節を関連付けました。',
            'product' => $product->load('seasons') // 関連付けられた季節も取得
        ]);
    }

    // 関連付けを外すメソッド（オプション）
    public function detachSeasonFromProduct(Request $request, $productId)
    {
        $seasonIds = $request->input('season_ids');
        $product = Product::findOrFail($productId);

        // 商品と季節の関連付けを外す
        $product->seasons()->detach($seasonIds);

        return response()->json([
            'message' => '商品と季節の関連付けを解除しました。',
            'product' => $product->load('seasons')
        ]);
    }
}
