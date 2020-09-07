@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tiesību Piešķiršana</h1>
@stop

@section('content')

    @if(Session::has('laratrust-error'))
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }} alert-dismissable">{{ Session::get('laratrust-error') }}</p>
    @endif

    <div class="form-group row">
        <label for="status" class="col-sm-2 col-form-label">
            Modelis
        </label>

        <div class="col-sm-4">
            <select class="form-control" x-model="model">
                @foreach ($models as $model)
                    <option value="{{$model}}">{{ucwords($model)}}</option>
                @endforeach
            </select>
        </div>
    </div>


                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th class="th">ID</th>
                            <th class="th">Vārds</th>
                            <th class="th">Uzvārds</th>
                            <th class="th"># Grupas</th>
                            @if(config('laratrust.panel.assign_permissions_to_user'))<th class="th"># Tiesības</th>@endif
                            <th class="th">Darbības</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{$user->getKey()}}
                                </td>
                                <td>
                                    {{$user->first_name}}
                                </td>
                                <td>
                                    {{$user->last_name}}
                                </td>
                                <td>
                                    {{$user->roles_count}}
                                </td>
                                @if(config('laratrust.panel.assign_permissions_to_user'))
                                    <td>
                                        {{$user->permissions_count}}
                                    </td>
                                @endif
                                <td>
                                    <a href="{{route('asignedit', ['id' => $user->id, 'model' => $modelKey])}}" class="btn btn-warning">Labot</a>
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


