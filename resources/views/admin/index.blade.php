@extends('admin.layouts.app')
@section('content')
    <div class="bg-menu-small"></div>
    @include("admin.include.menu")
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ucfirst($page)}}</div>
                    <div class="panel-body">
                        {{--table:{{$table}}<br>--}}
                        {{--id_name:{{$id_name}}--}}

                        <a href="{{ url('admin/create/'.$page.'/'.$id_name) }}">
                            <button type="button" class="btn btn-success btn-margin-top">
                                <i class="glyphicon glyphicon-pencil"></i> Добавить
                            </button>
                        </a>
                        <table class="table task-table">
                        @if($page == 'route')
                            <!-- Table Headings -->
                                <thead>
                                <th>&nbsp;</th>
                                <th>Название</th>

                                </thead>
                        @else
                            <!-- Table Headings -->
                                <thead>
                                <th>#</th>
                                <th>Название</th>
                                <th>Id</th>
                                <th>Опубликовано</th>

                                <th>&nbsp;</th>
                                </thead>
                        @endif
                        <!-- Table Body -->
                            <tbody>
                            @foreach($contents as $content)
                                <tr>
                                    <td>{{$content->position}}</td>
                                    <td>{{$content->name or ''}}{{$content->blocks or ''}}{{$content->titleru or ''}}</td>
                                    <td>{{$content->id_name}}</td>
                                    <td>{{$content->publish}}</td>
                                    <td>
                                        @if($page !== 'route')
                                            <button type="submit" class="btn btn-warning">
                                                <a href="#"><i class="glyphicon glyphicon-arrow-up"></i></a>
                                            </button>

                                            <button type="submit" class="btn btn-warning">
                                                <a href="#"><i class="glyphicon glyphicon-arrow-down"></i></a>
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/update/'.$table.'/'.$content->id) }}">
                                            <button type="submit" class="btn btn-warning">
                                                <i class="glyphicon glyphicon-repeat"></i>
                                            </button>
                                        </a>
                                        <form role="form" method="POST" enctype="multipart/form-data"
                                              action="{{asset('admin/delete/'.$table.'/'.$content->id )}}"
                                              onclick="return confirm('Вы уверены что хотите удалить?')">
                                            {!! csrf_field() !!}
                                            {{--{!! method_field('DELETE') !!}--}}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
