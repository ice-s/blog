@extends('admin.layout')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3>Tables: {{$table->getName()}}</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="ui-check m-a-0">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Column</th>
                        <th>Type</th>
                        <th>Length</th>
                        <th>Collation</th>
                        <th>Attributes</th>
                        <th>Null</th>
                        <th>Default</th>
                        <th>Comments</th>
                        <th>Extra</th>
                        <th>Action</th>
                        <th style="width:50px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table->getColumns() as $name => $column)
                        <tr>
                            <td><label class="ui-check m-a-0"><input type="checkbox" name="post[]">
                                    <i class="dark-white"></i></label></td>
                            <td>{{$column->getName()}}</td>
                            <td>{{$column->getType()->getName()}}</td>
                            <td>{{$column->getLength()}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href class="active" ui-toggle-class><i class="fa fa-check text-success none"></i><i
                                            class="fa fa-times text-danger inline"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="dker p-a">
                <div class="row">
                    <div class="col-sm-4 hidden-xs">

                    </div>
                    <div class="col-sm-4 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-a-0">
                            <li><a href><i class="fa fa-chevron-left"></i></a></li>
                            <li class="active"><a href>1</a></li>
                            <li><a href>2</a></li>
                            <li><a href>3</a></li>
                            <li><a href>4</a></li>
                            <li><a href>5</a></li>
                            <li><a href><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection