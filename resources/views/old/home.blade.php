@extends('layouts.app')

@section('content')
    {{--@foreach($inc as $item)--}}
        @include("include.carousel")
        @include("include.content_products")
        @include("include.our_clients")
        @include("include.try_now")
    {{--@endforeach--}}
@endsection
