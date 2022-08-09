<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
        //tabla a conectar a este modelo
        protected $table="countries";
        //la clave primaria de la tabla
        protected $primaryKey = "country_id";
        //omitir campos de auditoria 
        public $timetamps=false;
        
    use HasFactory;
    //relacion de muchos a mmuchos entre paises e idiomas 
    public function idiomas(){
        //belongstomany : parametros
        //1-modelo a relacionar 
        //2 la tabla pivote
        //3- fk del modelo actual en el pivote 
        //4 - fk del modelo a relacionar en el pivote 
        return $this->belongsToMany(Idioma::class,
                                    'country_languages',
                                    'country_id',
                                    'language_id'
                                    )->withpivot('official');
    }
}
