<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pizzaa extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price'];
    protected $table = 'pizzas';
}
