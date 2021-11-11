<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
      'purchase_date',
      'amount',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_idproduct');
    }
    public function deposits()
    {
        return $this->belongsTo(Deposit::class);
    }
}
