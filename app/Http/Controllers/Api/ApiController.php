<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Exception;

class ApiController extends Controller
{

    public function orderStore(Request $request){
        //$order = json_decode($request->json());

        $order = new Order;
        $order->name = $request['customer']['name'] ?? '';
        $order->surname = $request['customer']['surname'] ?? '';
        $order->phone       = $request['customer']['phone'] ?? '';
        $order->comment     = $request['customer']['comment'] ?? '';
        $order->address     = ''; //$request['customer']['address'] ?? '';
        $order->products    = json_encode($request['cart']) ?? '';
        $order->total       = $request['totalPrice'] ?? 0;
        $order->status = false;
        $order->save();

        return response()->json([
            'status' => 1,
            'message' => 'order created',
            'total' => $request->totalPrice,
            'name' => $request['customer']['name']
        ]);
    }

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
