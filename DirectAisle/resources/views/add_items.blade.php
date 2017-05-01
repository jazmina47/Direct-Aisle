
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Direct-Aisle Navigation</div>

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
                        <div class="col-sm-12">
                            <!--dropdown 2 -->
                            <p align="left">Select Specific Item:</p>
                            <select name="product" id="product" class="form-control input-sm">
                              <option value=""></option>

                            </select>
                        </div>

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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Apple</td>
                                    </tr>
                                    <tr>
                                        <td>Bread</td>
                                    </tr>
                                </tbody>
                            </table>

                            <input align="left" type="submit" value="Submit">

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
            console.log(data);
            var listItems;

      for (var i = 0; i < data.length; i++){
        listItems+= "<option value='" + data[i].description + "'>" + data[i].description + "</option>";
      }
      $("#product").html(listItems);


        });
  });
  });


</script>
