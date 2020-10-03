@extends('layouts.layout')

@section('pageTitle', 'All Sensor Values')

@section('header', 'All Sensor Values')

@section('content')

    <div>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Timestamp</th>
                <th>Name</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sensorvalues as $value)
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['timestamp']}}</td>
                <td>{{$value['name']}}</td>
                <td>{{$value['value']}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection