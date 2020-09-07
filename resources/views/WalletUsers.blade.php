@extends('adminlte::page')

@section('title', 'Talavija')

@section('content_header')
    <h1>Repartīcijas apskate</h1>
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

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Epasts</th>
            <th scope="col">Vārds</th>
            <th scope="col">Uzvārds</th>
            <th scope="col">Tālrunis</th>
            <th scope="col">Bilance</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $showusers)
            <tr>
                <td>{{ $showusers-> id }}</td>
                <td>{{ $showusers-> email }}</td>
                <td>{{ $showusers-> first_name }}</td>
                <td>{{ $showusers-> last_name }}</td>
                <td>{{ $showusers-> phone }}</td>
                <td>

                    <button id="myBtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        {{ $showusers->bilance }}
                    </button>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            </div>
                            <div class="modal-body">


                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Tips</th>
                                        <th scope="col">Datums</th>
                                        <th scope="col">summa</th>
                                        <th scope="col">merkis</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($showpayments as $payments)
                                        <tr>
                                            <td>{{ $payments-> tips }}</td>
                                            <td>{{ $payments-> datums }}</td>
                                            <td>{{ $payments-> summa }}</td>
                                            <td>{{ $payments-> merkis }}</td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
            </div>
        </div>
    </div>


    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


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

