<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    /** @use HasFactory<\Database\Factories\ValueFactory> */
    use HasFactory, HasTranslations;
    protected $fillable = ['name'];
    public $translatable = ['name'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
