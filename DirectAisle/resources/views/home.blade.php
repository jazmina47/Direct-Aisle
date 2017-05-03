@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hello, user!</div><!-- Star of panel-heading -->
                <div align="center" class="panel-body"><!-- Star of panel-body-->
                    <h1>Welcome to Direct Aisle!</h1>
                    <p>Please choose a location.</p>


                    <form action={{url('manageLists')}} method="get" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="dropdown"><!-- Start of drop down -->
                                <select class="storeLocation" id="store" name="store">
                                <option>Jewel-Osco, Batavia</option>
                                </select>
                            </div><!-- End of drop down -->
                            <div align="center"><br>
                                <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i>Submit Location
                                </button>
                            </div>
                        </div><!-- End of panel-body -->
                    </form>
                </div><!-- End of panel-heading -->
            </div>
        </div>
</div>
<!-- Start of new  -->
<hr>
<section id="directAisle">
    <div class="container-fluid">
            <h2>DirectAisle</h2>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h3 class="title-red">Make shopping easier</h3>
                <p>No more walking back and forth to find all the items on your list!</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <h3 class="title-red">Find products faster</h3>
                <p>Get out of the store with what you need, in the most efficient way.</p>
            </div>
            </div>
        </div>
    </div>
</section>
<hr>
@endsection
