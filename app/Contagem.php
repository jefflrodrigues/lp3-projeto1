<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contagem extends Model
{
    protected $fillable = [
        'resultado', 'tempoServico', 'tempoFinal', 'contato_id'
    ];

    protected $table = "contagems";
}
