@extends('master')
@section('title')
Ocenjivanje
@endsection
<link rel="stylesheet" href="{{asset('css/Ocenartist.css')}}">
@section('content')
@if($message=Session::get('success'))
<div class="alert alert-success alert-dismissible">
    {{$message}}
</div>
@endif
@if($message=Session::get('error'))
<div class="alert alert-danger alert-dismissible">
    {{$message}}
</div>
@endif
<div class="artist">
    <div class="row-1">
        <div class="col col-md-6">
            <p><b>Ocenite naše artiste</b></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card-body grid-container">
                <div class="grid-item">
                    <td>
                        <div class="col">
                            <div class="thumbnail">
                                <h3>{{$row->artist_ime}} {{$row->artist_prezime}}</h3>
                                <img src="{{asset('img/'. $row->artist_image)}}">
                                <div class="caption">
                                    <p align="justify" style="padding:10px">{{$row->artist_opis}}</p>
                                    <p> <b>Kategorija:</b> <i> {{$row->artist_kategorija}} </i></p>
                                    <p> <b>Kontakt: </b> <i> {{$row->artist_email}} </i></p>
                                </div>
                            </div>
                        </div>
                    </td>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ocene-container">
                <div class="ocene">
                    <h3>Oceni artista:</h3>
                    <form action="{{route('ocene.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="artist_id" value="{{ $row->id }}">
                        <div class="form-group">
                            <label for="ocena">Ocena (od 1 do 5):</label>
                            <input type="number" name="ocena" class="form-control" min="1" max="5" required>
                        </div>
                        <button type="submit" class="btn">Oceni</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection('content')