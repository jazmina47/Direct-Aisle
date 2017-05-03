<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    //
    protected $primaryKey = 'list_item_id';
    protected $table = 'list_items';

    public function ShoppingList()
   {
       return $this->belongsTo('App\ShoppingList');
   }
}
