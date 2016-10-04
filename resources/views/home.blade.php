@extends('layouts.app')

@section('htmlheader_title')

@endsection

@section('main-content')
    Hola {{ $user-> name }}
@endsection