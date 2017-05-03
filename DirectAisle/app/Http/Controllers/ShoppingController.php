<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ShoppingList;
use App\ListItem;
use View;

class ShoppingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $list = ShoppingList::find($list_id);
        //print "list id is: $list";
        //echo $id;
        print "inside shop index";

        //return view('shop_navigation');
    }

    /*showing navigation for the one specified list */
    public function show($list_id)
    {
        /* will give entire list data array*/
        $list = ShoppingList::find($list_id);
        
        //print "list info is: $list";
        //print "inside shop index";

        /* plucking */
        //$id = ShoppingList::where('list_id', $list_id)->pluck('list_id');
        //$list_name = ShoppingList::where('list_id', $list_id)->pluck('list_name');

        return View::make('shop_navigation')
            ->with('list_id', $list->list_id)
            ->with('list_name', $list->list_name);

    }
    
}
?>