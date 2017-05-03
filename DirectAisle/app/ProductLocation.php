<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLocation extends Model
{
    protected $primaryKey = 'item_id';
    protected $table = 'product_locations';

    public function ShoppingList()
   {
       return $this->belongsTo('App\ShoppingList');
   }
}
