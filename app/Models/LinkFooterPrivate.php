<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkFooterPrivate extends Model
{
    protected $table = 'link_footer';
    protected $fillable = ['id','myskills', 'shortcut', 'address'];
}
