@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')


    <div class="card">
        <div class="card-header bg-dark text-white">Labot Grupas</div>
        <div class="card-body">

            <form x-data="laratrustForm()" x-init="{!! $model ? '' : '$watch(\'displayName\', value => onChangeDisplayName(value))'!!}" method="POST" action="{{$model ? route("updateroles", $model->id) : route("laratrust.{$type}s.store")}}">
                @csrf
                @if ($model)
                    @method('PUT')
                @endif

                <div class="form-group row ">
                    <label class="col-sm-5 col-form-label">Nosaukums
                        <div class="form-group">

                            <input class="form-control" name="display_name" placeholder="Nosaukums" x-model="displayName" value="{{ $model->display_name ?? old('display_name') }}" autocomplete="off">
                        </div>
                    </label>
                </div>

                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Apraksts
                        <div class="form-group">
                            <textarea class="form-control" name="description" placeholder="Apraksts">{{ $model->description ?? old('description') }}</textarea>
                        </div>
                    </label>
                </div>



                @if($type == 'role')
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Tiesības
                            <div class="form-group">
                                @foreach ($permissions as $permission)
                                    <label class="inline-flex items-center mr-6 my-2 text-sm" style="flex: 1 0 20%;">
                                        <input type="checkbox" class="form-checkbox h-4 w-4" name="permissions[]" value="{{$permission->id}}"{!! $permission->assigned ? 'checked' : '' !!}>
                                        <span class="ml-2">{{$permission->display_name ?? $permission->name}}</span>
                                    </label>
                                @endforeach
                            </div>
                        </label>
                    </div>
                @endif



                <div class="flex justify-end">
                    <a href="{{url('/roles')}}" class="btn btn-warning">Atcelt</a>

                    <button class="btn btn-info" type="submit">Saglabāt</button>
                </div>
            </form>
        </div>
    </div>
    </div>


    <script>
        window.laratrustForm =  function() {
            return {
                displayName: '{{ $model->display_name ?? old('display_name') }}',
                name: '{{ $model->name ?? old('name') }}',
                toKebabCase(str) {
                    return str &&
                        str
                            .match(/[A-Z]{2,}(?=[A-Z][a-z]+[0-9]*|\b)|[A-Z]?[a-z]+[0-9]*|[A-Z]|[0-9]+/g)
                            .map(x => x.toLowerCase())
                            .join('-')
                            .trim();
                },
                onChangeDisplayName(value) {
                    this.name = this.toKebabCase(value);
                }
            }
        }
    </script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
