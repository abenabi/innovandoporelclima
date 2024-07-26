<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Parametro;

class Unidad_De_Medida extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'unidad_de_medida';
    protected $fillable =[
        'nombre',
        'abreviatura',
    ];

    public function Parametros()
    {
        return $this->hasMany(Parametro::class);
    }
}
