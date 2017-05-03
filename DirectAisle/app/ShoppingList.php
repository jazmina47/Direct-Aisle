<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    // specified
    protected $primaryKey = 'list_id';
    protected $table = 'lists';

    public function ShoppingList()
   {
       return $this->hasMany('App\ListItem');
   }
}
