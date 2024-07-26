<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Parametro;
use App\Models\Instrumento;


class Variable extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'variable';
    protected $fillable =[
        'nombre',
    ];

    public function Parametros()
    {
        return $this->hasMany(Instrumento::class);
    }
}
