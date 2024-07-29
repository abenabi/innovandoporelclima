<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\estacion_instrumento;


class registros extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'registros';
    protected $fillable =[
        'fecha',
        'valor',
    ];

    // public function Estacion()
    // {
    //     return $this->belongsTo(Estacion::class);
    // }

    public function estacion_instrumento()
    {
        return $this->belongsTo(estacion_instrumento::class);
    }
}
