<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingList;
use App\ListItem;
use DB;
use View;




class ListItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = null)
    {
      /*
      $categories = DB::table('product_locations')
        ->select('category')
        ->groupBy('category')
        ->get();

       $products = ProductLocation::where('category', $category)->get();

       return View::make('add_items', compact('categories'));
       */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //print_r($_REQUEST);
        //echo("<br>");

        //echo("<br>");

        $list_id=$request->list_id;
        $item_id=$request->product;
        $list = ShoppingList::find($list_id);
        //print_r($list);
        $list_item = new ListItem;


        $list_item->list_id = $list_id;
        $list_item->item_id = $item_id;
        //echo("<br><br>");
        //print_r($list_item);
        $list_item->save();


        $myitemsids = DB::select("select distinct item_id from list_items where list_id = :id", ['id'=>$list_id]);
  //echo("<br><br>");
  $myitems=array();

        foreach($myitemsids as $id)
        {
          //echo "<br>";
          //print_r( $id->item_id);
          //$i=$id->item_id;
          //echo($i);
          $item = DB::select("select * from product_locations where item_id = :id", ['id'=>$id->item_id]);
          $myitems[]=$item[0];
          //rint_r($myitems);
          //echo("<br>");
          //$myitems[]=$item;
        }
        /*
        foreach($myitemsids as $id)
        {
          echo $id->item_id;
          echo "<br>";
          $myitems[]=$id->item_id;
        }
*/
        //echo("<br><br>");
        //echo("items");
        //  print_r($myitems);
        //$results = DB::select('select * from users where id = :id', ['id' => 1]);
        //foreach($myitems as $item){
        //  print_r($item);
        //}
        //echo("<br><br>");

        $categories = DB::table('product_locations')
          ->select('category')
          ->groupBy('category')
          ->get();

         $list_id = $request->list_id;
         //$products = ProductLocation::where('category', $category)->get();

         //return View::make('add_items', compact('categories', 'list_id'));
         return View::make('add_items')->with('categories', $categories)->with('list_id',$list_id)->with('items',$myitems);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
