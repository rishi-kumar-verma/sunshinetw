<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PortfolioThreeBanner extends Model
{
    use HasFactory;
    protected $table = 'portfoliothreebanners';
    protected $fillable =[
        
        'title',
        
       
    ];
}
