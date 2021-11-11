<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'state',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_iduser_seller');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_idcategory');
    }
    public function size()
    {
        return $this->belongsTo(Size::class,'size_idsize');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_idbrand');
    }
    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
