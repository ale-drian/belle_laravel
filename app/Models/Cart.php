<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'product_idproduct',
        'product_count',
        'user_iduser',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_iduser');
    }
    public function product()
    {
        return $this->belongsTo(Product::class,'product_idproduct');
    }
}
