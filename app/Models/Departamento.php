<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\zonaDelPais;
use App\Models\Estacion;

class Departamento extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'departamento';
    protected $fillable =[
        'nombre',
    ];

    public function zonaDelPais()
    {
        return $this->belongsTo(zonaDelPais::class);
    }

    public function Estaciones()
    {
        return $this->hasMany(Estacion::class);
    }
}
