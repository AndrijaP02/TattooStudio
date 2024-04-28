@extends('master')
@section('title')
Konsultacije
@endsection
<link rel="stylesheet" href="{{asset('css/konsultacije.css')}}">
@section('content')
@if($message=Session::get('success'))
<div class="alert alert-success alert-dismissible">
    {{$message}}
</div>
@endif
<div class="prikaz">
    <table class="table table-bordered">
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Email</th>
            <th>Broj telefona</th>
            <th>Datum</th>
            <th>Vreme</th>
            <th>Artist</th>
            <th>Uređivanje</th>
        </tr>
        @if(count($consultations)>0)
        @foreach($consultations as $row)
        <tr>
            <td>{{$row->ime}}</td>
            <td>{{$row->prezime}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->brojtelefona}}</td>
            <td>{{$row->datum}}</td>
            <td>{{$row->vreme}}</td>
            <td>{{$row->artist_ime}} {{$row->artist_prezime}}</td>
            <td>
                <form action="{{route('konsultacije.show', $row->id)}}" method="GET">
                    @csrf
                    <button type="submit" class="btn">Prikaži</button>
                </form>
            </td>


        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="8" class="text-center">Nema nikakvih podataka</td>
        </tr>
        @endif
    </table>
    <div class="dugme">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('konsultacije.create')}}"> Vrati se nazad! </a>
            </div>
        </div>
    </div>
    {!! $consultations->links() !!}
</div>
@endsection