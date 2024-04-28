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
    <table class="table table-bordered" style="border-radius: 30px">
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Email</th>
            <th>Broj telefona</th>
            <th>Datum</th>
            <th>Vreme</th>
            <th>Artist</th>
            <th>Status</th>
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
                @if($row->potvrdjeno)
                <button> Potvrđeno </button>
                @else
                <button> Nije potvrđeno </button>
                @endif
            </td>
            <td class="d-flex">
                <form action="{{route('konsultacije.destroy', $row->id)}}" method="POST" class="me-2">
                    <a class="btn" href="{{route('konsultacije.show', $row->id)}}"> Prikaži
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Obriši</button>
                </form>

                <form action="{{ route('konsultacije.update', $row->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn">
                        {{ $row->potvrdjeno ? 'Poništi potvrdu' : 'Potvrdi' }}
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="7" class="text-center">Nema nikakvih podataka</td>
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