@extends('themes.' . $theme . '.master')

@section('title', 'What happens now you have won?')

@section('content')
    @include('pages.static.won.pay')
@stop