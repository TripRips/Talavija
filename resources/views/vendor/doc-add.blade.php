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
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Pievienot dokumentu</h1>
        </div>
        <div class="panel-body">

            <div class="card">
                <div class="card-header bg-dark text-white">Dokumenta pievienošana</div>
                <div class="card-body">
                    <form action="{{ url('doc/store') }}" method="post" enctype="multipart/form-data">
                     {{csrf_field()}}
                    <div class="form-group row date">

                        <label for=date" class="col-sm-2 col-form-label required">
                            Datums
                        </label>

                        <div class="col-sm-4">
                            <input name="date" type="date" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="time" class="col-sm-2 col-form-label">
                            Laiks
                        </label>

                        <div class="col-sm-4">
                            <input name="time" type="time" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">
                            Nosaukums
                        </label>

                        <div class="col-sm-4">
                            <input name="name" type="text" class="form-control" placeholder="Nosaukums">
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
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
    </html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
