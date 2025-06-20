<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FavoriteController extends Controller
{

    public function index()
    {
        return auth()->user()->favorites()->get();
    }

    public function store(Request $request): JsonResponse
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            'success' => true
        ]);
    }

    public function destroy($favorite_id): JsonResponse
    {
        if(auth()->user()->hasFavorite($favorite_id)) {
            auth()->user()->favorites()->detach($favorite_id);
            return response()->json([
                'success' => true,
            ]);
        }
    }

}
