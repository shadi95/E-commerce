<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishList extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'wish_list',
    ];

    public function customer(){
        return $this->belongsTo(User::class);
    }
}
