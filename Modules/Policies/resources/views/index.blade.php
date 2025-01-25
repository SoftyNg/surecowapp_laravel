@extends('policies::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('policies.name') !!}</p>
@endsection
