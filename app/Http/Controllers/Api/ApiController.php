<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Exception;

class ApiController extends Controller
{
    // - /api/products
    public function products(){
        try {
            return response()->json([
                'status' => true,
                'data' => Product::all()
            ]);
        }catch (Exception $exception){
            return response()->json([
                'status' => false,
                'data' => []
            ]);
        }
    }

    // - /api/product/{id}
    public function product($id){
        try {
            return response()->json([
                'status' => true,
                'data' => Product::findOrFail($id)
            ]);
        }catch (Exception $exception){
            return response()->json([
                'status' => false,
                'data' => []
            ]);
        }
    }
}
