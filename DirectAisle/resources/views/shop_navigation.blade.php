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




                    <table class="table">
                      <thead>
                      <tr>
                        <th>Aisle</th>
                        <th>Section</th>
                        <th>End Of Store</th>
                        <th>Side</th>
                        <th>Item</th>
                        <th>Bought?</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $key => $value)
                        <tr>
                            <!--Task name-->
                            <td>{{$value->aisle_num}}</td>
                            <td>{{$value->section_num}}</td>
                            <td>{{$value->which_end}}</td>
                            <td>{{$value->which_side}}</td>
                            <td>{{$value->description}}</td>
                            <td><form action="">
  <input type="checkbox" name="bought" value=""><br>

</form>
                        </tr>
                    @endforeach
                  </tbody>
                  </table>

                </div><!-- End of panel-body -->
            </div><!-- End of panel-heading -->
        </div>
    </div>
</div>
@endsection
