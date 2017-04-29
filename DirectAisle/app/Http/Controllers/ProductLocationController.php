<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid = null)
    {
      //If optional parameter of product ID is given, return that product_locations
     if(!is_null($pid))
     {
         $DATA = (array)DB::select( "SELECT * FROM product_locations WHERE item_id = '$pid'");
         print_r($DATA);
     }
     //Otherwise return all posts
     else
     {
        $DATA = (array)DB::select( "SELECT * FROM product_locations" );
        foreach($DATA as $row){
          echo "product: ";
          print_r($row);
          echo "<br />";
        }
     }
     

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
      // store in database
      $this->validate($request, array(
          'aisle_num' => 'required',
          'section_num' => 'required',
          'which_end' => 'required',
          'which_side' => 'required',
          'category' => 'required',
          'description' => 'required'
      ));
      $product = new product_locations;
      $product->aisle_num = $request->input('aisle_num');
      $product->section_num = $request->input('section_num');
      $product->which_end = $request->input('which_end');
      $product->which_side = $request->input('which_side');
      $product->category = $request->input('category');
      $product->description = $request->input('description');

      $product->save();
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
