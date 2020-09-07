@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tiesības</h1>
@stop

@section('content')

    @if(Session::has('laratrust-successs'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissable">{{ Session::get('laratrust-successs') }}</p>
    @endif

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th class="th">ID</th>
                        <th class="th">Nosaukums</th>
                        <th class="th">Apraksts</th>
                        <th class="th">Darbības</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>
                                {{$permission->id}}
                            </td>
                            <td>
                                {{$permission->display_name}}
                            </td>
                            <td>
                                {{$permission->description}}
                            </td>
                            <td>
                                <a href="{{route('editpermissions', $permission->id)}}" class="btn btn-warning">Labot</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
