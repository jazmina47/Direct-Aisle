
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Shopping List</div>

                <div class="panel-body">
                    <div align="center">
                        <h1>Add Items to Your List</h1>
                        <hr />
                        <p>Here we will build your grocery shopping list. Keep selecting from the combo boxes then click "Add" until all desired items are added to the list.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- dropdown 1 -->


                            <p align="left">Select Grocery Category:</p>
                            <select name='category' id='category' class="form-control input-sm">
                              <option value="Choose One">Choose One</option>
                              @foreach($categories as $key => $value)
                              <option value="{{$value->category}}">  {{$value->category}}</option>
                              @endforeach
                            </select>



                        </div>
                        <br>
                        <br>
                        <form action="{{ action('ListItemController@store') }}" method="post" >
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="hidden" name="list_id" value="{{$list_id}}">
                        <div class="col-sm-12">
                            <!--dropdown 2 -->
                            <p align="left">Select Specific Item:</p>
                            <select name="product" id="product" class="form-control input-sm">
                              <option value=""></option>

                            </select>
                            <div align="left">
                                <input type="submit" class="btn btn-info" value="Add Item" class="fa fa-plus">
                            </div>
                        </div>
                        </form

                    </div> <!-- end of row -->
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 align="center">Your Current List</h4>
                            <hr />
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th> <!-- Item name -->

                                    </tr>
                                </thead>
                                <tbody>


                            @foreach($items as $key => $value)
                                <tr>
                                    <!--Task name-->
                                    <td>{{$value->description}}</td>





                                </tr>

                        @endforeach

                        </tbody>
                        <!--  -->
                        </table>

                        <form action="{{url('manageLists')}}" method="get">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div align="center"><br>
                                <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus">Done
                                </button>
                                </div>
                                </form>



                        </div>
                    </div>

                </div><!-- end of panel-body -->
            </div>
        </div>
    </div>
</div>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
$(function(){

 $("#category").change(function(){
     var category = this.value;
    console.log(category);

    var url = "/api/product_locations/"+category;
    console.log(url);
     $.get(url, function (data) {
            //success data
            console.log(JSON.stringify(data));
            data.forEach(function(product)
            {

              JSON.stringify(product);
            });
            var listItems;

      for (var i = 0; i < data.length; i++){
        listItems+= "<option value='" + data[i].item_id + "'>" + data[i].description + "</option>";
        console.log("<option value='" + data[i].item_id + "'>" + data[i].description + "</option>");
      }
      $('#product').empty();
      $("#product").html(listItems);


        });
  });
  });


</script>
