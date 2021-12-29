<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    
    protected $fillable =['name','user_id','detail','publication_year','image'];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
    
}
