@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    </head>
    <body>
    <div class="container-fluid">
        <div class="panel-heading">
            <h1>Labot dokumentu</h1>
        </div>
        <div class="panel-body">

            <div class="card">
                <div class="card-header bg-dark text-white">Dokumenta labošana</div>
                <div class="card-body">
                    <form action="{{ url('doc/update/'.$doc->id.'/'.$doc->document)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row date">

                            <label for=date" class="col-sm-2 col-form-label required">
                                Datums
                            </label>

                            <div class="col-sm-4">
                                <input name="date" type="date" class="form-control" value="{{ $doc-> date }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-sm-2 col-form-label">
                                Laiks
                            </label>

                            <div class="col-sm-4">
                                <input name="time" type="time" class="form-control" value="{{ $doc-> time }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">
                                Nosaukums
                            </label>

                            <div class="col-sm-4">
                                <input name="name" type="text" class="form-control" value="{{ $doc-> name }}" placeholder="Nosaukums">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">
                                Statuss
                            </label>

                            <div class="col-sm-4">
                                <select name="status" class="form-control">
                                    <option value="Neapstiprināts" class="text-danger">Neapstiprināts</option>
                                    <option value="Apstiprināts" class="text-green">Apstiprināts</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="document" class="col-sm-2 col-form-label">
                                Dokuments
                            </label>

                            <div class="col-sm-4">
                                <input type="file" name="document">
                            </div>
                        </div>

                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>

                <br>
                <form action="{{ url("doc/delete/$doc->id/$doc->document") }}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form>

            </section>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
