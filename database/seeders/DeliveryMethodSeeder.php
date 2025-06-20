<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    public function run(): void
    {
        DeliveryMethod::create([
           'name' => [
               'uz' => 'Tekin',
               'ru' => 'Free',
           ],
            'estimated_time' => [
                'uz' => '2 kunda',
                'ru' => '2 days'
            ],
            'sum' => 0,

        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Standard',
                'ru' => 'Standard',
            ],
            'estimated_time' => [
                'uz' => '3 kunda',
                'ru' => '3 days'
            ],
            'sum' => 10000,

        ]);

        DeliveryMethod::create([
            'name' => [
                'uz' => 'Pro',
                'ru' => 'Premium',
            ],
            'estimated_time' => [
                'uz' => '20 kunda',
                'ru' => '20 days'
            ],
            'sum' => 90000,

        ]);
    }
}
