<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Departamento;
use App\Models\Estado;
use App\Models\imagen_estacion;
use App\Models\Estacion_Tiene_Instrumento;
use App\Models\Instrumento;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


class Estacion extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'estacion';
    protected $fillable =[
        'nombre',
        'direccion',
        'latitude',
        'longitude',
        'departamento_id',
        'fecha_de_fundacion',
        'responsable',
        'certificaciones',
        'accesibilidad_y_horarios',
        'estado_id',
    ];

    public function Departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function Estado()
    {
        return $this->belongsTo(Estado::class);
    }

    // public function estacion_tiene_instrumento(): MorphToMany
    // {
    //     return $this->morphToMany(Estacion_Tiene_Instrumento::class, 'estacion_tiene_instrumento');
    // }
    public function instrumentos(){
        return $this->belongsToMany(Instrumento::class)->as('estacion_instrumento')->withPivot(['marca','fecha_de_fundacion','estado_id','id']);
    }

    public function imagen_estacion()
    {
        return $this->hasMany(imagen_estacion::class);
    }

}
