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
                            <select>
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
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>

                                <input style="margin-left: 15px" class="btn btn-default" type="add">
                            </div>
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
