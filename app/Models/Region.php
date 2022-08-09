<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //tabla a conectar a este modelo
    protected $table="regions";
    //la clave primaria de la tabla
    protected $primaryKey = "region_id";
    //omitir campos de auditoria 
    public $timetamps=false;
    use HasFactory;


    //Relacion entre regiones y continentes 
    public function continente(){
        //belongsTo : Parametros
        //1. modelo a relacionar 
        //2. la fk del modelo relacionar del modelo actual 
        return $this->belongsTo(Continente::class,
                                    'continent_id');      
    }
    //Relacion entre region 1 - M Paises 
    public function paises(){
        return $this->hasMany(Country::class,
                                    'region_id');
    }
}
