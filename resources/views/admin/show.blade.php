@extends('admin.layouts.app')
@section('content')
    <div class="bg-menu-small"></div>
    @include("admin.include.menu")
    <div class="col-xs-12 col-md-8 col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">{{ucfirst($page)}}</div>
            {{--id:{{$id}}<br>page:{{$page}}<br>table:{{$table}}<br>content:{{$content or 'Default'}}--}}
            <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data"
                      action="{{$content? asset('admin/'.$method.'/'.$table.'/'.$content->id  ) : asset('admin/'.$method.'/'.$table) }}">
                    {{ csrf_field() }}
                    <?php $blocks = c8data\Http\Controllers\BlocksController::$table();?>
                    {{--{{var_dump($blocks)}}--}}
                    @foreach($blocks as $block)
                        @include("admin.include.".$block)
                    @endforeach
                    <button type="submit" class="btn btn-block btn-tn-primary">save</button>

                </form>
            </div>
        </div>
    </div>
@endsection