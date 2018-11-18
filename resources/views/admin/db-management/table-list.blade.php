@extends('admin.layout')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header">
                <h3>Database Table List</h3>
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
                        <th>Tables</th>
                        <th>Index</th>
                        <th>Number Column</th>
                        <th style="width:50px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tables as $table)
                    <tr>
                        <td><label class="ui-check m-a-0"><input type="checkbox" name="post[]"><i
                                        class="dark-white"></i></label></td>
                        <td><a href="{{route('db_detail', ['tableName' => $table->getName()])}}">{{$table->getName()}}</a></td>
                        <td>
                            @foreach($table->getIndexes() as $key => $index)
                                <span class="label green">{{$key}}</span>
                                @foreach($index->getColumns() as $indexCol)
                                    <span class="label blue">{{$indexCol}}</span>
                                @endforeach
                                <br>
                            @endforeach
                        </td>
                        <td>{{count($table->getColumns())}}</td>
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