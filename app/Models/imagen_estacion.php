<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Estacion;

class imagen_estacion extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'imagen_estacion';
    protected $fillable =[
        'file_path',
        'descripcion',
    ];

    public function Estacion()
    {
        return $this->belongsTo(Estacion::class);
    }
}
