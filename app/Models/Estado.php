<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Estacion;
use App\Models\Estacion_Tiene_Instrumento;


class Estado extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'estado';
    protected $fillable =[
        'nombre',
        'icono_file_path',
    ];

    public function Estaciones()
    {
        return $this->hasMany(Estacion::class);
    }

    public function Estacion_Tiene_Instrumento()
    {
        return $this->hasMany(Estacion::class);
    }
}
