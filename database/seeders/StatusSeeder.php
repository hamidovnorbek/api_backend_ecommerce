<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => [
                'uz' => 'Yangi',
                'ru' => 'New',
            ],
            'code' => 'new',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tasdiqlandi',
                'ru' => 'Confirmed',
            ],
            'code' => 'confirmed',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Jarayonda',
                'ru' => 'Processing',
            ],
            'code' => 'processing',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yolda',
                'ru' => 'Shipped',
            ],
            'code' => 'shipped',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yetkazb Berildi',
                'ru' => 'Delivered',
            ],
            'code' => 'delivered',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tugatildi',
                'ru' => 'Done',
            ],
            'code' => 'completed',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yopildi',
                'ru' => 'Closed',
            ],
            'code' => 'closed',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Bekor Qilindi',
                'ru' => 'Cancelled',
            ],
            'code' => 'cancelled',
            'for' => 'order',
        ]);


        Status::create([
            'name' => [
                'uz' => 'Qaytarb berildi',
                'ru' => 'Refund',
            ],
            'code' => 'refund',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tolov Kutilmoqda',
                'ru' => 'Waiting Payment',
            ],
            'code' => 'waiting_payment',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tolandi',
                'ru' => 'Paid',
            ],
            'code' => 'paid',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tolov Xatolik',
                'ru' => 'Payment Error',
            ],
            'code' => 'payment_error',
            'for' => 'order',
        ]);

        Status::create([
            'name' => [
                'uz' => '###Test_Status###',
                'ru' => 'ruTest#Status',
            ],
            'code' => '#errorTest',
            'for' => 'test',
        ]);
    }
}
