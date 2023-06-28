<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
       'date',
       'content',
       'user_id',
       'seller_id'
        
    ];

}
