<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=['name','surname','cedula','license','doctor_category_id','Phone'];

  }
