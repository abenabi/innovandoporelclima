<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Variable;
use App\Models\Instrumento;
use App\Models\Unidad_De_Medida;

class Parametro extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'parametro';
    protected $fillable =[
        'nombre',
        'abreviatura',
        'parametroId',
    ];

    // public function Variable()
    // {
    //     return $this->belongsTo(Variable::class, 'variable_id');
    // }

    public function Instrumento()
    {
        return $this->belongsTo(Instrumento::class);
    }

    public function Unidad_De_Medida()
    {
        return $this->belongsTo(Unidad_De_Medida::class,'unidad_de_medida_id');
    }
}
