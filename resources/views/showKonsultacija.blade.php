@extends('master')
<link rel="stylesheet" href="{{asset('css/createArtist.css')}}">
@section('title')
Konsultacije
@endsection
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="create">
    <div class="card">
        <div class="card-header">Podaci o vašoj konsultaciji</div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Ime</label>
                <div class="col-sm-10">
                    <input type="text" name="ime" value="{{$konsultacije->ime}}" class="form-control" disabled />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Prezime</label>
                <div class="col-sm-10">
                    <input type="text" name="prezime" value="{{$konsultacije->prezime}}" class="form-control"
                        disabled />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" value="{{$konsultacije->email}}" class="form-control" disabled />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Broj telefona </label>
                <div class="col-sm-10">
                    <input type="text" name="brojtelefona" value="{{$konsultacije->brojtelefona}}" class="form-control"
                        disabled />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Datum </label>
                <div class="col-sm-10">
                    <input type="text" name="datum" value="{{$konsultacije->datum}}" class="form-control" disabled />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Vreme </label>
                <div class="col-sm-10">
                    <input type="text" name="vreme" value="{{$konsultacije->vreme}}" class="form-control" disabled />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"> Artist </label>
                <div class="col-sm-10">
                    <input type="text" name="artist" value="{{$konsultacije->artist_id}}" class="form-control"
                        disabled />
                </div>
            </div>
            <div>
                <a class="btn" href="{{route('konsultacije.indexMenadzer')}}"> Vrati se nazad! </a>
            </div>
        </div>
    </div>
</div>
@endsection('content')