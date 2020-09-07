@extends('adminlte::page')

@section('title', 'Visi biedri')

@section('content_header')
    <h1>Visi biedri</h1>
@stop

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Biedra nr.</th>
                <th scope="col">Vārds</th>
                <th scope="col">Uzvārds</th>
                <th scope="col">E-pasts</th>
                <th scope="col">Telefona nr.</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
