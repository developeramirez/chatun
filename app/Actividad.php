<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividads';
    protected $fillable = ['title','picture','description'];
}
