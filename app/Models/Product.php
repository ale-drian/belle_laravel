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
        'state'
    ];
    public function user_iduser_seller(){
        return $this->belongsTo('App\Models\User');
    }
    public function category_idcategory(){
        return $this->belongsTo('App\Models\Category');
    }
    public function size_idsize(){
        return $this->belongsTo('App\Models\Size');
    }
    public function brand_idbrand(){
        return $this->belongsTo('App\Models\Brand');
    }
}
