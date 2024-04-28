@extends('master')
@section('title')
Portfolio
@endsection
<link rel="stylesheet" href="{{asset('css/prikazSlika.css')}}">
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
        <div class="col col-md-6"><b>
                <p>Pogledajte moje radove</p>
            </b></div>
        <div class="col col-md-6" id="kolonaDugme">
            @can('isAdmin') <a href="{{route('slike.create')}}" class="btn btn-sm float-end">Dodaj</a> @endcan
            @can('isUser') <a href="{{route('konsultacije.create')}}" class="btn btn-sm float-end">Zakaži svoj
                termin</a> @endcan
        </div>
    </div>
    <div class="swiper1">
        <swiper-container class="mySwiper" navigation="true">
            @foreach($slike as $row)
            <swiper-slide class="image-container">
                <img src="{{ asset('img/' . $row->slika) }}" alt="...">
                @can('isAdmin')
                <form method="post" action="{{ route('slike.destroy', ['slikaId' => $row->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm">Obriši</button>
                </form>
                @endcan
            </swiper-slide>
            @endforeach
        </swiper-container>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
@endsection('content')