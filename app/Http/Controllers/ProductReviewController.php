<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\StoreStatusRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function store(Product $product, StoreReviewRequest $request)
    {

    }
}
