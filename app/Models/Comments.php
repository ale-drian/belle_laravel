<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'publication_date',
        'content'
    ];

    public function userComment()
    {
        return $this->belongsTo(User::class,'user_iduser_comment');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_iduser');
    }
}
