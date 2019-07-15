<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
        protected $fillable=['name','surname','cedula','employe_category_id','Phone'];
}
