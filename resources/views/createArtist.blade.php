@extends('master')
@section('title')
Kreiranje
@endsection
<link rel="stylesheet" href="{{asset('css/createArtist.css')}}">
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
        <div class="card-header">Dodaj novog artista</div>
        <div class="card-body">
            <form method="POST" action="{{route('artist.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Prezime: </label>
                    <div class="col-sm-10">
                        <input type="text" name="artist_prezime" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Ime: </label>
                    <div class="col-sm-10">
                        <input type="text" name="artist_ime" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Email: </label>
                    <div class="col-sm-10">
                        <input type="text" name="artist_email" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Opis: </label>
                    <div class="col-sm-10">
                        <input type="text" name="artist_opis" class="form-control" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"> Kategorija: </label>
                    <div class="col-sm-10">
                        <select name="artist_kategorija" class="form-control">
                            <option value="">-MOLIMO VAS IZABERITE-</option>
                            <option value="Black&Gray">Black&Gray</option>
                            <option value="Realism">Realism</option>
                            <option value="Color">Color</option>
                            <option value="Fineline">Fineline</option>
                            <option value="Fantasy">Fantasy</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"> Slika: </label>
                    <div class="col-sm-10">
                        <input type="file" name="artist_image" />
                        <input type="submit" class="btn" value="Dodaj" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection ('content')