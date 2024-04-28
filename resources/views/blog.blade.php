@extends('master')
<link rel="stylesheet" href="{{asset('css/artist.css')}}">
@if($message=Session::get('success'))
<div class="alert alert-success alert-dismissible">
    {{$message}}
</div>
@endif
@section('content')
<div class="artist">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Pročitajte najnovije vesti</b></div>
                <div class="col col-md-6">
                    <a href="{{route('posts.create')}}" class="btn btn-sm float-end">Dodaj</a>
                </div>
            </div>
        </div>

        <div class="card-body grid-container">

            @if(count($data)>0)
            @foreach($data as $row)
            <div class="grid-item">
                <td>
                    <div class="col">
                        <div class="thumbnail">
                            <img src="{{asset('img/'. $row->post_image)}}">
                            <div class="caption">
                                <p>{{$row->naslov}}</p>
                                <p> {{$row->kratak_opis}}</p>
                                <p> {{$row->autor}} {{$row->datum}}</p>
                                <form action="{{route('posts.destroy', $row->id)}}" method="POST"
                                    enctype="multipart/form-data">
                                    <a class="btn" href="{{ route('posts.show', ['slug' => $row->slug]) }}"> Prikaži
                                    </a>
                                    <a class="btn" href="{{route('posts.edit', $row->id)}}"> Uredi </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn"
                                        onsubmit="return confirm('Da li ste sigurni da želite da obrišete ovaj post?')">Obriši</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--kraj reda za proizvode-->
                </td>
            </div>

            @endforeach
            @else
            <div class="text-center">
                <td>Nema nikakvih podataka</td>
            </div>
            @endif

            {!! $data->links() !!}
        </div>
    </div>
</div>
@endsection('content')