@extends('master')
@section('title')
Prikaz ocena
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
            <th>User - ime i prezime</th>
            <th>Artist - ime i prezime</th>
            <th>Ocena</th>
        </tr>
        @if(count($ocene)>0)
        @foreach($ocene as $row)
        <tr>
            <td>{{$row->name}} {{$row->prezime}}</td>
            <td>{{$row->artist_ime}} {{$row->artist_prezime}}</td>
            <td>{{$row->ocena}}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="3" class="text-center">Nema nikakvih podataka</td>
        </tr>
        @endif
    </table>
    <table class="table table-bordered">
        <tr>
            <th>Artist - ime i prezime</th>
            <th>Prosečna cena</th>
        </tr>
        @if(count($prosecneOcene)>0)
        @foreach($prosecneOcene as $row)
        <tr>
            <td>{{$row->artist_ime}} {{$row->artist_prezime}}</td>
            <td>{{$row->prosecna_ocena}}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="3" class="text-center">Nema nikakvih podataka</td>
        </tr>
        @endif
    </table>
    <div class="dugme">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('artist.index')}}"> Vrati se nazad! </a>
            </div>
        </div>
    </div>
    {!! $ocene->links() !!}
</div>
@endsection