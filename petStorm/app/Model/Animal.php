<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
   /*
    protected $table = 'product';

    public $timestamps = false;

    protected $fillable = ['name', 'description', 'price_cost', 'price_resale'];
    												custo           venda
   */

    												
    
    public $timestamps = false;

    protected $fillable = ['raca', 'idade'];
    
}
