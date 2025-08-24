<?php

namespace App\Http\Resources;

use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
          'id' => $this['id'],
          'comment' => $this['comment'],
          'sum' => $this['sum'],
          'user' =>  $this['user'],
          'products' =>  $this['products'],
          'status' =>  $this['status'],
          'address' =>  $this['address'],
          'payment_type' => $this->paymentType,
          'delivery_method' => $this->deliveryMethod,
        ];
    }
}
