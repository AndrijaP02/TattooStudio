@extends('master')
<link rel="stylesheet" href="{{asset('css/createArtist.css')}}">
@section('title')
Portfolio-slike
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
        <div class="card-header">Dodaj još slika</div>
        <div class="card-body">
            <form method="POST" action="{{route('slike.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"> Artist: </label>
                    <div class="col-sm-10">
                        <select name="artist_id" class="form-control">
                            @foreach($artist as $art)
                            <option value="{{ $art->id }}"> {{ $art->artist_ime }} {{ $art->artist_prezime }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"> Slika: </label>
                    <div class="col-sm-10">
                        <input type="file" name="slika" />
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn" value="Dodaj" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection ('content')