<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Departamento;

class zonaDelPais extends Model
{
    use HasFactory,Notifiable;    
    protected $table = 'zona_del_pais';
    protected $fillable =[
        'nombre',
    ];

    public function Departamentos()
    {
        return $this->hasMany(Departamento::class);
    }
}
