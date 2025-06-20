<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qizil',
                'ru' => 'Red'
            ]
        ]);
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Qora',
                'ru' => 'Black'
            ]
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => '2 olcham',
                'ru' => '3xl'
            ]
        ]);
        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => '3 olcham',
                'ru' => '3XL'
            ]
        ]);

        Value::create([
            'attribute_id' => 3,
            'name' => [
                'uz' => 'Temir',
                'ru' => 'Iron'
            ]
        ]);
    }
}
