<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'payment_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'payment_user_seller');
    }
    public function buyer()
    {
        return $this->belongsTo(User::class,'payment_user_buyer');
    }
}
