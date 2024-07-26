<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use App\Models\Estacion;
use App\Models\Instrumento;
use App\Models\Estado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


class estacion_instrumento extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'estacion_instrumento';
 
    /**
     * Get all of the videos that are assigned this tag.
     */

    //  public function Estacion(): MorphToMany
    //  {
    //      return $this->morphedByMany(Estacion::class, 'estacion_instrumento');
    //  }
  
     /**
      * Get all of the videos that are assigned this tag.
      */
    //  public function Instrumento(): MorphToMany
    //  {
    //      return $this->morphedByMany(Instrumento::class, 'estacion_instrumento');
    //  }
    public function estacion()
    {
        return $this->belongsTo(Estacion::class);
    }

    public function instrumento()
    {
        return $this->belongsTo(Instrumento::class);
    }

    public function Estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
