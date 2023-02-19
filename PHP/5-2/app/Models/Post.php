<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'body'
    ];

    public static $rules = array (
        'tweet' => ['required','max:255']
    );
    
}
