<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribuicao extends Model
{
    protected $fillable = [
        'emprego', 'tempoServico'
    ];

    protected $table = "contribuicaos"
}
