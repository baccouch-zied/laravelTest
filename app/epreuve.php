<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class epreuve extends Model
{
    protected $fillable = [
        'numepreuve', 'datepreuve', 'lieu'
    ];
}
