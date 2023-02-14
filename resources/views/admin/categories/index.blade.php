@extends('layouts.master')

@section('title', 'Sale System | Categorias')

@section('styles')
    @include('my-files.styles')
@stop

@section('navbar')
    @include('layouts.navbar')
@stop

@section('sidebar')
    @include('layouts.sidebar')
@stop

@section('content')
    @include('admin.categories.home')
@stop

@section('footer')
    @include('layouts.footer')
@stop

@section('scripts')
    @include('my-files.scripts')
@stop
