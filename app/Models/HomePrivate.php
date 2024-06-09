<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homePrivate extends Model
{

    protected $table = 'home';
    protected $fillable = ['id','name', 'greeting', 'description', 'image'];
}

