<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

    protected $fillable = [ 'nome', 'estado_id' ];
    // protected $guarded = [ 'senha' ];

    public $timestamps = false;


    // Cidade -> Estado
    public function estado()
    {
    	return $this->belongsTo('App\Estado');
    }

    // 1-N -> Cidade -> Alunos
    public function alunos()
    {
    	return $this->hashMany('App\Aluno');
    }
}
