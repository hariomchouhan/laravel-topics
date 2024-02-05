@extends('index')

@section('main')
@section('title', 'Home')
<a href="{{ url('/') }}">English</a>
<a href="{{ url('/hi') }}">Hindi</a>
<a href="{{ url('/rus') }}">Russian</a>
<a href="{{ url('/guj') }}">Gujarati</a>
<h1 class="mt-4">@lang('lang.welcome')</h1>

@endsection