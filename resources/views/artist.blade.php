@extends('master')
<link rel="stylesheet" href="{{asset('css/artist.css')}}">
@section('content')
@if($message=Session::get('success'))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
<div class="artist">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Upoznajte naše artiste</b></div>
                <div class="col col-md-6">
                    <a href="{{route('artist.create')}}" class="btn btn-sm float-end">Dodaj</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Slika</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Email</th>
                    <th>Kategorija</th>
                    <th>Opis</th>
                    <th>Uređivanje</th>
                </tr>
                @if(count($data)>0)
                @foreach($data as $row)
                <tr>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="{{asset('img/'. $row->artist_image)}}" alt="...">
                                <div class="caption">
                                    <h3>Thumbnail label</h3>
                                    <p>...</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#"
                                            class="btn btn-default" role="button">Button</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <td>{{$row->artist_ime}}</td>
                    <td>{{$row->artist_prezime}}</td>
                    <td>{{$row->artist_email}}</td>
                    <td>{{$row->artist_kategorija}}</td>
                    <td>{{$row->artist_opis}}</td>
                    <td>
                        <form action="{{route('artist.destroy', $row->id)}}" method="POST">
                            <a class="btn btn-primary" href="{{route('artist.show', $row->id)}}"> Prikaži </a>
                            <a class="btn btn-primary" href="{{route('artist.edit', $row->id)}}"> Uredi </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Obriši</button>
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
            {!! $data->links() !!}
        </div>
    </div>
</div>
@endsection('content')