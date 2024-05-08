<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function createProduct(Request $request){
        $request->validate([
            'name' => 'required|max:255|string',
            'description'=>'required|max:255|string',
            'price' => 'required|numeric',
        ]);
        Product::create([
            'name'=>$request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return response()->json([
            'message' => 'product details saved',
            'status' => 200,
        ]);
    }
    public function getProducts(){
        $products = Product::get();
        return response()->json([
                'message' => 'All product details',
                'data' => $products,
                'status' => 200,
            ]);
    }

public function getProductDetails($id){
    $product = Product::findOrFail($id);
    return response()->json([
        'message' => 'Product details',
        'data' => $product,
        'status' => 200,
    ]);
}
public function updateProductDetails(Request $request,$id){
    Product::findOrFail($id)->update([
        'name'=>$request->name,
        'description' => $request->description,
        'price' => $request->price,
    ]);

    return response()->json([
        'message' => 'Product details updated',
        'status' => 200,
    ]);
}
public function deleteProductDetails($id){
    $product = Product::find($id);
    $product->delete();
    return response()->json([
        'message' => 'Product details deleted',
        'status' => 200,
    ]);
// }public function getProducts(){
//     $userId = auth()->user()->user_id;
//     $user = User::find($userId);
//     $products = Product::get();
//     return response()->json([
//             'message' => 'All product details',
//             'data' => $products,
//             'status' => 200,
//         ]);

}
}

