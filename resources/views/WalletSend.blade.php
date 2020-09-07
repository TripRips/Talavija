@extends('adminlte::page')

@section('title', 'Talavija')

@section('content_header')
    <h1>Repartīcijas pievienošana</h1>
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

        <title>Hello, world!</title>
    </head>
    <body>

        <div class="jumbotrom">
            <form method="post" action="walletsend">
                @csrf

                <div class="form-group">
                    <label class="col-md-4 control-label" for="tips">Maksājuma tips</label>
                    <div class="col-md-11">
                        <select id="tips" name="tips" type="text" placeholder="Tips" class="col-md-4 form-control input-md">
                            <option>Maksājums</option>
                            <option>Sods</option>
                            <option>Prēmija</option>
                            <option>Cits</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="datums">Maksājuma Datums</label>
                    <div class="col-md-4">
                        <input id="datums" name="datums" type="date" class="form-control input-md">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="summa">Summa</label>
                    <div class="col-md-4">
                        <input id="summa" name="summa" type="text" placeholder="‎€" class="form-control input-md">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="merkis">‎Maksājuma mērkīs</label>
                    <div class="col-md-4">
                        <input id="merkis" name="merkis" type="text" placeholder="Sods/Ikmēneša maksājums" class="form-control input-md">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="sanemejs">Saņēmējs</label>
                    <div class="col-md-4">
                        <input id="sanemejs" name="sanemejs" type="text" placeholder="Vārds Uzvārds" class="form-control input-md">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Iesniegt</button>
                    </div>
                </div>

            </form>
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




