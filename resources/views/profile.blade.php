@extends('master')
<link rel="stylesheet" href="{{asset('css/profil.css')}}">
@section('title', 'Korisnički profil')
@section('content')
@if($message=Session::get('success'))
<div class="alert alert-success alert-dismissible">
    {{$message}}
</div>
@endif
<div class="profil">
    <div class="row-1">
        <div class="col col-md-12">
            <p><b>Vaši podaci:</b></p>
        </div>
    </div>
    <div class="podaci">
        <div class="row">
            <div class="col col-md-6">
                <p>Ime: <i> {{ $user->name }}</i></p>
                <p>Prezime: <i> {{ $user->prezime }}</i></p>
                <p>Email: <i> {{ $user->email }}</i></p>
                <p>Password: <input type="password" value="{{ $user->password }}" readonly
                        style="border-radius: 5px; border: 1px solid black;">
                </p>
            </div>
            <div class="col col-md-6">
                <div class="d-flex flex-column justify-content-center align-items-end h-100">
                    <p> Ulogovani ste kao: <i> {{ $user->role }}</i> </p>
                    <a class="btn" href="{{ route('user.index') }}" style="margin-right: 15px;">Izmeni lozinku</a>
                </div>
            </div>
        </div>
    </div>
    @can('isManager')
    <div class="obavestenja">
        <div class="row-1">
            <div class="col col-md-12">
                <p><b>Obaveštenja:</b></p>
            </div>
        </div>
        @if($notifications->isEmpty())
        <div class="obavestenje">Nema obaveštenja.</div>
        @else
        @foreach($notifications as $notification)
        <div class="obavestenje">
            @if(isset($notification->data['post_naslov']))
            {{ $notification->data['post_naslov'] }} -
            @endif
            {{ $notification->data['message'] }}
        </div>
        @endforeach
        @endif
    </div>
    @endcan

    @can('isAdmin')
    <div class="obavestenja">
        <div class="row-1">
            <div class="col col-md-12">
                <p><b>Obaveštenja:</b></p>
            </div>
        </div>
        @if($notifications->isEmpty())
        <div class="obavestenje">Nema obaveštenja.</div>
        @else
        @foreach($notifications as $notification)
        <div class="obavestenje">{{ $notification->data['message'] }}</div>
        @endforeach
        @endif
    </div>
    @endcan
    @can('isUser')
    <div class="profil-k">
        <div class="row-1">
            <div class="col col-md-12">
                <p><b>Vaše konsultacije:</b></p>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Broj telefona</th>
                <th>Datum</th>
                <th>Vreme</th>
                <th>Status</th>
                <th>Uređivanje</th>
            </tr>
            @if(count($consultations)>0)
            @foreach($consultations as $row)
            <tr>
                <td>{{$row->brojtelefona}}</td>
                <td>{{$row->datum}}</td>
                <td>{{$row->vreme}}</td>
                <td>
                    @if($row->potvrdjeno)
                    <button> Potvrđeno </button>
                    @else
                    <button> Nije potvrđeno </button>
                    @endif
                </td>
                <td>
                    <form action="{{route('konsultacije.destroy', $row->id)}}" method="POST" class="me-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Obriši</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7" class="text-center">Nema zakazanih konsultacija</td>
            </tr>
            @endif
        </table>
    </div>
    @endcan
</div>
@endsection