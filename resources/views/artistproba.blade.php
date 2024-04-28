@extends('master')
@section('title')
Artists
@endsection
<link rel="stylesheet" href="{{asset('css/artist.css')}}">
@section('content')
@if($message=Session::get('success'))
<div class="alert alert-success alert-dismissible">
    {{$message}}
</div>
@endif
<div class="tekstArtisti">
    <h3> Najneverovatniji tim tattoo artisa u Srbiji! </h3>

    <p id="paragraf"> Mi smo tim vrhunskih tattoo umetnika, koji su osvojili nagrade na nekim najvećim konvencijama
        o tetovažama. <br> Postavljamo trendove! Imamo neverovatne koncepte kao što su tetovaže
        sa dvostrukim izlaganjem i minimalizmom. <br>
        <strong> Recite nam da želite nešto jedinstveno i to će biti vaša najbolja odluka ikada! </strong>
    </p>
</div>
<div class="artist">
    <div class="row">
        <div class="col col-md-6">
            <p><b>Upoznajte naše artiste</b></p>
        </div>
        <div class="col col-md-6" id="kolonaDugme">
            @can('isAdmin') <a href="{{route('artist.create')}}" class="btn btn-sm float-end">Dodaj</a>
            <a href="{{route('ocene.index')}}" class="btn btn-sm float-end" style="margin-left: 5px;">Prikaz ocena</a>
            @endcan
        </div>
    </div>
    <div class="card" id="myCard">
        <div class="card-body grid-container">

            @if(count($data)>0)
            @foreach($data as $row)
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
                                <p>
                                <div class="rating" id="averageRating{{$row->id}}">
                                    <b>Prosečna ocena: </b>
                                    <i> {{ $row->prosecnaOcena() }}</i>
                                    @php
                                    $averageRating = $row->prosecnaOcena();
                                    $fullStars = floor($averageRating);
                                    $halfStar = ceil($averageRating - $fullStars);
                                    $emptyStars = 5 - $fullStars - $halfStar;
                                    @endphp
                                    @for($i = 0; $i < $fullStars; $i++) <i class="fas fa-star"></i>
                                        @endfor
                                        @if($halfStar)
                                        <i class="fas fa-star-half"></i>
                                        @endif
                                        @for($i = 0; $i < $emptyStars; $i++) <i class="far fa-star"></i>
                                            @endfor
                                </div>
                                </p>
                                <form action="{{route('ocene.create', ['id' => $row->id])}}" method="GET">
                                    <button type="submit" class="btn">Oceni</button>
                                    <a class="btn" href="{{route('slike.showSlikeForArtist', $row->id)}}"> Portfolio
                                    </a>
                                </form>
                                <form action="{{route('artist.destroy', $row->id)}}" method="POST">
                                    @can('isAdmin') <a class="btn" href="{{route('artist.edit', $row->id)}}"> Uredi
                                    </a>
                                    @endcan
                                    @csrf
                                    @method('DELETE')
                                    @can('isAdmin') <button type="submit" class="btn">Obriši</button> @endcan
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </div>
            @endforeach
            @else
            <div class="text-center">
                Nema nikakvih podataka
            </div>
            @endif

            {!! $data->links() !!}
        </div>
    </div>
</div>
@endsection('content')