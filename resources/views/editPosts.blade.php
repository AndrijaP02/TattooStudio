@extends('master')
@section('title')
Uredjivanje
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
        <div class="card-header">Izmeni podatke</div>
        <div class="card-body">
            <form method="POST" action="{{route('posts.update', $post->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Datum</label>
                    <div class="col-sm-10">
                        <input type="text" name="datum" value="{{$post->datum}}" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Autor</label>
                    <div class="col-sm-10">
                        <input type="text" name="autor" value="{{$post->autor}}" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Naslov</label>
                    <div class="col-sm-10">
                        <input type="text" name="naslov" value="{{$post->naslov}}" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Opis</label>
                    <div class="col-sm-10">
                        <textarea name="kratak_opis" class="form-control">{{$post->kratak_opis}}</textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"> Slika</label>
                    <div class="col-sm-10">
                        <input type="file" name="post_image" />
                        <img src="/img/{{$post->post_image}}" width="100px">
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn" value="Izmeni" />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection('content')