<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    
    protected $fillable = [
      'description','email','phone','company','protective','safety','hi','ear','mask','gloves','other'
      ];
}
