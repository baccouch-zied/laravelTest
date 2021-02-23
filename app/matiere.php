<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    protected $fillable = [
        'codemat', 'libelle', 'coef'
    ];
}
