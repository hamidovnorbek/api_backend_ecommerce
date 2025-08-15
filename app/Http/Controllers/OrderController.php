<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;

class OrderController extends Controller
{
    public function index()
    {
        return auth()->user()->orders;
    }


    public function store(StoreOrderRequest $request)
    {

        $sum = 0;
        $products = [];
        $notFoundProducts = [];
        $address = UserAddress::find($request->address_id);

        foreach ($request['products'] as $requestProduct) {
            $product = Product::with('stocks')->findOrFail($requestProduct['product_id']);

            if(
                $product->stocks()->find($requestProduct['stock_id']) &&
                $product->stocks()->find($requestProduct['stock_id'])->quantity >= $requestProduct['quantity']
            ){
                $product->setAttribute('quantity', $requestProduct['quantity']);
                $productResource = new ProductResource($product->withStock($requestProduct['stock_id']));
                $sum += $productResource['price'];
                $products[] = $productResource->resolve();

            } else{
                $notFoundProducts = $requestProduct;
//                dd('Yetishmaydi nimadr');
            }
        }



        if($notFoundProducts === [] && $products !== [] && $sum !== 0){
            $order = auth()->user()->orders()->create([
                'comment' => $request->comment,
                'delivery_method_id' => $request->delivery_method_id,
                'payment_type_id' => $request->payment_type_id,
                'sum' => $sum,
                'address' => $address,
                'products' => $products,

            ]);

            if ($order){
                foreach($products as $product) {
                    $stock = Stock::findOrFail($product['inventory'][0]['id']);
                    $stock->quantity -= $product['order_quantity'];
                    $stock->save();
                }
            }

            return 'success';

        }else{
            return response()->json([
                'success' => false,
                'message' => 'Order not created',
                'not_found_products' =>  $notFoundProducts,
            ]);
        }
    }


    public function show(Order $order)
    {
        return new OrderResource($order);
    }
    public function edit(Order $order)
    {
        //
    }
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }
    public function destroy(Order $order)
    {
        //
    }
}
