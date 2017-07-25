@extends('layouts.app')
@section('title')
@lang('message.home')
@endsection

{{--@section('sidebar')--}}

    {{--This is the home page sidebar--}}
    {{--@parent--}}
    {{--@endsection--}}

@section('content')
    <a href="/uz">uz</a>
    <a href="/en">en</a>
    @foreach ($count as $item)
        @if ($loop->first)
            <p>This is the first {{$item}}.</p>


        @elseif ($loop->last)
            <p>This is the last {{$item}}.</p>

          @else
            <p>This is the btw user {{$item}}</p>

        @endif

    @endforeach




@endsection