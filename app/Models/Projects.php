<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model{

    protected $table = 'projects';
    public $timestamps = false;

    protected $fillable = [
        'titulo', 'descricao', 'membros', 'etiquetas', 'capas', 'datas', 'localidade', 'motivo', 'cursto'
    ];




}
