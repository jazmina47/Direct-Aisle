Skip to content
This repository
Search
Pull requests
Issues
Gist
 @jacobtarter
 Sign out
 Unwatch 2
  Star 0
 Fork 0 kflores88/Direct-Aisle
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Pulse  Graphs
Tree: 8d77d1269e Find file Copy pathDirect-Aisle/DirectAisle/resources/views/shopping_lists.blade.php
8d77d12  7 minutes ago
@jacobtarter jacobtarter delete working
2 contributors @kflores88 @jacobtarter
RawBlameHistory
64 lines (56 sloc)  2.54 KB
@extends('layouts.app')

@section('content')
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><h3>Manage Shopping List</h3></center></div><!-- Star of panel-heading -->
                <div align="center" class="panel-body"><!-- Star of panel-body-->
                    <!--Add table -->
                    <table class="table table-striped task-table">
                    <thead>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DATE</th>
                    </thead>
                    <!--Creating the body-->
                    <tbody>
                        <!--space for the foreach loop-->
                        @foreach($lists as $key => $value)
                            <tr>
                                <!--Task name-->
                                <td>{{$value->list_id}}</td>
                                <td>{{$value->list_name}}</td>
                                <td>{{$value->created_at}}</td>
                               <td>
                               <form action="manageLists/{{$value->list_id}}" method="post" >
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input type="hidden" name="_method" value="delete">

                                    <!--Delete/Destroy button-->
                                    <div align="left">
                                        <input type="submit" class="btn btn-danger" value="delete" class="fa fa-plus">
                                    </div>
                                </td>
                                </tr>
                                </form>
                    @endforeach

                    </tbody>
                    <!--  -->
                    </table>

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
