@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">       
            	<div class="panel-heading">Hello, user!</div><!-- Star of panel-heading -->
                <div align="center" class="panel-body"><!-- Star of panel-body-->
                    <h1>Store Navigation</h1>

                    <form action="{{url('manageLists')}}" method="get" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <p>List id is {{ $list_id }}</p>
                        <p>List name is {{ $list_name }}</p>

                        <div align="center">
                            <input type="submit" class="btn btn-default" value="Done">
                        </div>
                    </form>
                </div><!-- End of panel-body -->
            </div><!-- End of panel-heading -->
        </div>
    </div>
</div>
@endsection