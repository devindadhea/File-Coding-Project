<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPrivate extends Model
{
    protected $table = 'user_privates';
    protected $fillable =['id','user_name','password'];
}
