<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'deposit_date',
        'amount',
        'state'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_iduser');
    }
    public function purchase()
    {
        return $this->hasOne(Purchase::class,'purchase_idpurchase');
    }
}
