<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /*agregamos la propiedad $guarded para evitar la asignación masiva*/
    protected $guarded = [];
}
