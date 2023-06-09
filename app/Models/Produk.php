<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table ='produk';
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'gambar',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
