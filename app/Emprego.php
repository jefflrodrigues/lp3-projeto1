<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprego extends Model
{
    protected $fillable = [
        'descricao', 'tempoFatal'
    ];

    protected $table = "empregos";
    
}
