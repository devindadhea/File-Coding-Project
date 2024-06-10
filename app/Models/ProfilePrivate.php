<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePrivate extends Model
{
    protected $table = 'profile';
    protected $fillable =['id','title','biodata','image'];

}
