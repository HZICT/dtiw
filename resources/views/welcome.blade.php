@extends('layouts.layout')

@section('pageTitle', 'Dashboard')

@section('header', 'Dashboard')

@section('content')

<a href="{{route('sensorvalues.index')}}">Go to sensor values page</a>

@endsection