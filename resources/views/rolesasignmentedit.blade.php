@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')


    <div class="card">
        <div class="card-header bg-dark text-white">Labot Tiesības</div>
        <div class="card-body">

    <div>
    </div>
            <form
                method="POST"
                action="{{route('asignupdate', ['id' => $user->id, 'model' => $modelKey])}}"

            >
                @csrf
                @method('PUT')


                <div class="form-group row ">
                    <label class="col-sm-5 col-form-label">Vārds
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="this-will-be-the-code-name" value="{{$user->first_name}}" readonly autocomplete="off">
                        </div>
                    </label>
                </div>

                <div class="form-group row ">
                    <label class="col-sm-5 col-form-label">Uzvārds
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="this-will-be-the-code-name" value="{{$user->last_name}}" readonly autocomplete="off">
                        </div>
                    </label>
                </div>

                <div class="form-group row ">
                    <label class="col-sm-5 col-form-label">Epasts
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="this-will-be-the-code-name" value="{{$user->email}}" readonly autocomplete="off">
                        </div>
                    </label>
                </div>



                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Grupas
                        <div class="form-group">
                    @foreach ($roles as $role)
                        <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                            <input
                                type="checkbox"
                                @if ($role->assigned && !$role->isRemovable)
                                class="form-checkbox focus:shadow-none focus:border-transparent text-gray-500 h-4 w-4"
                                @else
                                class="form-checkbox h-4 w-4"
                                @endif
                                name="roles[]"
                                value="{{$role->id}}"
                                {!! $role->assigned ? 'checked' : '' !!}
                                {!! $role->assigned && !$role->isRemovable ? 'onclick="return false;"' : '' !!}
                            >
                            <span class="ml-2 {!! $role->assigned && !$role->isRemovable ? 'text-gray-600' : '' !!}">{{$role->display_name ?? $role->name}}</span>
                        </label>
                    @endforeach
                        </div>
                    </label>
                </div>
                @if ($permissions)

                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Tiesības
                            <div class="form-group">

                        @foreach ($permissions as $permission)
                            <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                                <input
                                    type="checkbox"
                                    class="form-checkbox h-4 w-4"
                                    name="permissions[]"
                                    value="{{$permission->id}}"
                                    {!! $permission->assigned ? 'checked' : '' !!}
                                >
                                <span class="ml-2">{{$permission->display_name ?? $permission->name}}</span>
                            </label>
                        @endforeach
                            </div>
                        </label>
                    </div>

                @endif
                <div class="flex justify-end">
                    <a
                        href="{{url('/roles-assignment')}}" class="btn btn-warning"
                    >
                        Atcelt
                    </a>
                    <button class="btn btn-info" type="submit">Saglabāt</button>
                </div>
            </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


