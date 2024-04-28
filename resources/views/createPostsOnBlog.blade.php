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
        <div class="card-header">Dodaj novi post</div>
        <div class="card-body">
            <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Naslov: </label>
                    <div class="col-sm-10">
                        <input type="text" name="naslov" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Datum: </label>
                    <div class="col-sm-10">
                        <input type="text" name="datum" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Autor: </label>
                    <div class="col-sm-10">
                        <input type="text" name="autor" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Opis: </label>
                    <div class="col-sm-10">
                        <textarea name="kratak_opis" placeholder="Unesite kratak opis!"></textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"> Slika: </label>
                    <div class="col-sm-10">
                        <input type="file" name="post_image" />
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