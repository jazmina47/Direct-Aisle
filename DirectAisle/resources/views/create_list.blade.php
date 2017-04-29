@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Direct-Aisle Navigation</div>

                <div class="panel-body">


                <form action="{{ action('manageListsController@store') }}" method="POST" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!-- Enter List Name -->
                    <div class="form-group">
                        <label for="list" class="col-sm-3 control-label">List Name</label>

                        <div class="col-sm-6">
                        <input type="text" name="list_name" id="list_name" class="form-control">
                        </div>
                    </div>

                    <!-- add new list button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i> Add New List
                        </div>
                    </div>
                </form>




                </div><!-- end of panel-body -->
            </div>
        </div>
    </div>
</div>
@endsection
