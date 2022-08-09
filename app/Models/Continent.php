<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //tabla a conectar a este modelo
    protected $table="continents";
    //la clave primaria de la tabla
    protected $primaryKey = "continent_id";
    //omitir campos de auditoria 
    public $timetamps=false;
    
    use HasFactory;
    
    //relacion entre continente y region

    public function regiones(){
        //hasMany Parametros 
        //1. El modelo a relacionar
        //La clave foranea del model actual en el modelo a relacionar 
        return $this->hasMany(Region::class,
                            'continent_id');
    }
    //relacion entre continente y sus paises
    //Abuelo: continente
    //Papa : region
    //nieto: paises 

    public function paises(){
        //hasManyThrough parametros 
        //1 - modelo nieto 
        //2- Modelo papa
        //3- Clave foranea del abuelo en el papa
        //4- FK del papa en el nieto
        return $this->hasManyThrough(Country::class,
                                    Region::class,
                                    'continent_id',
                                    'region_id');
    }
}
