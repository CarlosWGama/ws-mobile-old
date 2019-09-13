<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model {
    
    use SoftDeletes;
    
    //Não protege nenhum campo
    protected $guarded = [];

    /**
     * Retorna os dados do usuário dono da tarefa
     * Inner Join
     */
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario');
    }
}
