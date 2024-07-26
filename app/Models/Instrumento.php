<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Parametro;
use App\Models\Estacion;
use App\Models\Estacion_Tiene_Instrumento;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use App\Models\Variable;


class Instrumento extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'instrumento';
    protected $fillable =[
        'nombre',
        'altura_sobre_nivel_suelo',
        'descripcion',
    ];

    public function Parametros()
    {
        return $this->hasMany(Parametro::class);
    }
    // public function estacion_tiene_instrumento(): MorphToMany
    // {
    //     return $this->morphToMany(Estacion_Tiene_Instrumento::class, 'estacion_tiene_instrumento');
    // }

    public function estaciones(){
        return $this->belongsToMany(Estacion::class)->as('estacion_instrumento')->withPivot(['marca','fecha_de_fundacion','estado_id']);
    }

        public function Variable()
    {
        return $this->belongsTo(Variable::class, 'variable_id');
    }
}
