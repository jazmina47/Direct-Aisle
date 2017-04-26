@extends('layouts.app')

@section('content')
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">       
                <div class="panel-heading">Shopping List History</div><!-- Star of panel-heading -->
                <div align="center" class="panel-body"><!-- Star of panel-body-->
                    <h1>Shopping List</h1>
                 	<br>
                    <form action="manageLists/create" method="get">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div align="center"><br>
                            <button type="submit" class="btn btn-default">
                            <i class="fa fa-plus"></i>Create A List
                            </button>
                            </div>
                            </form>
                        </div><!-- End of panel-body -->
                </div><!-- End of panel-heading -->
            </div>
        </div>
</div>


<!-- Start of new  -->
<hr>
@endsection