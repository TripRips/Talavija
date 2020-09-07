@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Grupas</h1>
@stop

@section('content')

    @if(Session::has('laratrust-warningg'))
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }} alert-dismissable">{{ Session::get('laratrust-warningg') }}</p>
    @endif
    @if(Session::has('laratrust-successs'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissable">{{ Session::get('laratrust-successs') }}</p>
    @endif
    @if(Session::has('laratrust-rediget'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissable">{{ Session::get('laratrust-rediget') }}</p>
    @endif
    @if(Session::has('laratrust-dzest'))
        <p class="alert {{ Session::get('alert-class', 'alert-success') }} alert-dismissable">{{ Session::get('laratrust-dzest') }}</p>
    @endif

<div class="form-group">
        <a href="{{route('createroles')}}" class="btn btn-info">+ Jauna Grupa</a>
</div>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th class="th">ID</th>
                        <th class="th">Nosaukums</th>
                        <th class="th">Apraksts</th>
                        <th class="th"># Tiesības</th>
                        <th class="th">Darbības</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                {{$role->id}}
                            </td>
                            <td >
                                {{$role->display_name}}
                            </td>
                            <td >
                                {{$role->description}}
                            </td>
                            <td >
                                {{$role->permissions_count}}
                            </td>
                            <td>
                                <form action="{{route('rolesdelete', $role->id)}}" method="POST">
                                    <div class="form-row">
                                        <div class="col">
                                                @if (\Laratrust\Helper::roleIsEditable($role))
                                                    <a href="{{route('editroles', $role->id)}}" class="btn btn-warning">Labot</a>
                                                @endif

                                                @csrf

                                                <button type="submit" class="btn btn-danger" @if(!\Laratrust\Helper::roleIsDeletable($role)) disabled @endif> Dzēst </button>
                                        </div>
                                    </div>
                                </form>

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





