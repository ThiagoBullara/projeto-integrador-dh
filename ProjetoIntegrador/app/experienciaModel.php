<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experienciaModel extends Model
{
    
    public $table = "experiencia";
    public $primaryKey = "id_experiencia";
    public $guarded = [];

    protected $fillable = [
        'nomeExperiencia',
        'precoExperiencia',
        'quantidadePessoasExperiencia',
        'descricaoExperiencia',
        'sobreExperiencia',
        'funcionamento',
        'nomeRestaurante',
        'video',
        'endereco',
        'sobreRestaurante',
        'fotoExperiencia1',
        'fotoExperiencia2',
        'fotoExperiencia3',
        'logoRestaurante',
        'tag1',
        'tag2',
        'tag3',
        'tag4'
    ];

    public function comentarios() {
        return $this->hasMany("App\comentariosModel", "id_comentario");
    }

    public function rating() {
        return $this->hasMany("App\ratingsModel", "id");
    }
}
