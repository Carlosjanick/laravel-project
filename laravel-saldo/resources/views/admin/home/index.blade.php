@extends('adminlte::page')

@section('title', 'Home Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    {{ Breadcrumbs::render('dashboard') }}
@stop

@section('content')
    <p>You are logged in!</p>
@stop
