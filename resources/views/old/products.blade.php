@extends('layouts.app')

@section('content')

    <?php $inc = ['content_products','features-tabbed'];?>
    @foreach($inc as $item)
        @include("include.$item")
    @endforeach
@endsection
