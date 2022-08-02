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
}
