<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    
    protected $fillable = [
      'name','image','link','description','manufacture','model','supplier','category_name'
      ];
}
