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
}
