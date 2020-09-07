@extends('adminlte::page')

@section('title', 'Reģistrēt jaunu biedru')

@section('content_header')
    <h1>Reģistrēt jaunu biedru</h1>
@stop

@section('content')
    <form class="form-horizontal" action="create" method="post">
        @csrf
        <div class="card">
            <div class="card-header bg-dark text-white">Pamata informācija</div>
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="id">Biedra numurs @error('id')<small id="passwordHelp" class="text-danger">{{ $message }}</small>@enderror</label>
                        <input name="id" type="text" class="form-control @error('id') is-invalid @enderror" id="id" placeholder="#" value="{{ old('id') }}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="first_name">Vārds @error('first_name')<small id="passwordHelp" class="text-danger">{{ $message }}</small>@enderror</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="Bebrs" value="{{ old('first_name') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="last_name">Uzvārds @error('last_name')<small id="passwordHelp" class="text-danger">{{ $message }}</small>@enderror</label>
                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Varenais" value="{{ old('last_name') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="email">E-pasts @error('email')<small id="passwordHelp" class="text-danger">{{ $message }}</small>@enderror</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="bebrs.varenais@talavija.lv" value="{{ old('email') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Telefona nr. @error('phone')<small id="passwordHelp" class="text-danger">{{ $message }}</small>@enderror</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="+371 12345678" value="{{ old('phone') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="status">Statuss @error('status')<small id="passwordHelp" class="text-danger">{{ $message }}</small>@enderror</label>
                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                            <option selected value="1">Zēns</option>
                            <option value="2">Filistrs</option>
                            <option value="3">Komiltons</option>
                            <option value="4">Filistrs Brušs</option>
                            <option value="5">Brušs Filistrs</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <!--Dzimsansa info card-->
                <div class="card">
                    <div class="card-header bg-dark text-white">Dzimšanas informācija</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label">Datums</label>
                            <div class="col-sm-9">
                                <input type="date" id="date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-sm-2 col-form-label">Valsts</label>
                            <div class="col-sm-9">
                                <input type="text" id="country" name="country" class="form-control" value
                                       placeholder="Valsts">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-sm-2 col-form-label">Pilsēta</label>
                            <div class="col-sm-9">
                                <input type="text" id="city" name="city" class="form-control" value
                                       placeholder="Pilsēta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="adress" class="col-sm-2 col-form-label">Adrese</label>
                            <div class="col-sm-9">
                                <input type="text" id="adress" name="adress" class="form-control" value
                                       placeholder="Adrese">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="notes" class="col-sm-2 col-form-label">Piezīmes</label>
                            <div class="col-sm-9">
                                <input type="text" id="notes" name="notes" class="form-control" value
                                       placeholder="Piezīmes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!--mirsans info-->
                <div class="card">
                    <div class="card-header bg-dark text-white">Miršanas informācija</div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="rip_date" class="col-sm-2 col-form-label">Datums</label>
                            <div class="col-sm-9">
                                <input type="date" id="rip_date" name="rip_date" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rip_country" class="col-sm-2 col-form-label">Valsts</label>
                            <div class="col-sm-9">
                                <input type="text" id="rip_country" name="rip_country" class="form-control" value
                                       placeholder="Valsts">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rip_city" class="col-sm-2 col-form-label">Pilsēta</label>
                            <div class="col-sm-9">
                                <input type="text" id="rip_city" name="rip_city" class="form-control" value
                                       placeholder="Pilsēta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rip_adress" class="col-sm-2 col-form-label">Adrese</label>
                            <div class="col-sm-9">
                                <input type="text" id="rip_adress" name="rip_adress" class="form-control" value
                                       placeholder="Adrese">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rip_other" class="col-sm-2 col-form-label">Piezīmes</label>
                            <div class="col-sm-9">
                                <input type="text" id="rip_other" name="rip_other" class="form-control" value
                                       placeholder="Piezīmes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <!--Vēsture korpurācijā-->
                <div class="card">
                    <div class="card-header bg-dark text-white">Vēsture korporācijā</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="start_vk" class="col-sm-2 col-form-label">Uzņemts V!K!</label>
                            <div class="col-sm-9">
                                <input type="date" id="start_vk" name="start_vk" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="start_SPK" class="col-sm-2 col-form-label">Uzņemts SP!K</label>
                            <div class="col-sm-9">
                                <input type="date" id="start_spk" name="start_spk" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="start_fil" class="col-sm-2 col-form-label">Fillistrējies</label>
                            <div class="col-sm-9">
                                <input type="date" id="start_fil" name="start_fil" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!--Old!, K!tēvs, K!māte-->
                <div class="card">
                    <div class="card-header bg-dark text-white">Old!, K!tēvs, K!māte</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="olderman_input" class="col-sm-2 col-form-label">Oldermanis</label>
                            <div class="col-sm-9">
                                <input type="text" id="olderman_input" name="olderman_input" class="form-control" value
                                       placeholder="Vārds Uzvārds (Biedra nummurs)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="col_father_input" class="col-sm-2 col-form-label">Krāsu tēvs</label>
                            <div class="col-sm-9">
                                <input type="text" id="col_father_input" name="col_father_input" class="form-control"
                                       value placeholder="Vārds Uzvārds (Biedra nummurs)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="col_mother_input" class="col-sm-2 col-form-label">Krāsu māte</label>
                            <div class="col-sm-9">
                                <input type="text" id="col_mother_input" name="col_mother_input" class="form-control"
                                       value placeholder="Vārds Uzvārds (Biedra nummurs)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm 10">
                <button type="submit" class="btn btn-primary">Reģistrēt</button>
            </div>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
