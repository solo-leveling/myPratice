<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
 protected $fillable = ['street','city'];
 public function Employee(){
     return $this->belongsTo('App\Employee');
 }
}
