<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
        protected $table = 'usuarios';
        /**
          * The attributes that are mass assignable.
          *
          * @var array
          */
         protected $fillable = [
            'nombre', 'apellidos','cedula','telefono', 'email','id'
         ];
        
}
