<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function index(Product $product)
    {
        return response([
           'overall_rating' => $product->reviews()->avg('rating'),
           'reviews_count' => $product->reviews()->count(),
           'reviews' => ReviewResource::collection($product->reviews()->latest()->paginate(10)),
        ]);
    }
    public function store(Product $product, StoreReviewRequest $request)
    {
        $product->reviews()->create([
            'user_id' => auth()->user()->id,
            'rating' => $request->rating,
            'body' => $request->body
        ]);

        return response([
            'success' => true,
            'message' => 'Your review has been created'
        ]);
    }
}
