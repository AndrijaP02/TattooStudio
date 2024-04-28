@extends('master')
@section('title')
Izmeni
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
            <form method="POST" action="{{route('artist.update', $artist->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Prezime</label>
                    <div class="col-sm-10">
                        <input type="text" name="artist_prezime" value="{{$artist->artist_prezime}}"
                            class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Ime</label>
                    <div class="col-sm-10">
                        <input type="text" name="artist_ime" value="{{$artist->artist_ime}}" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Opis</label>
                    <div class="col-sm-10">
                        <input type="text" name="artist_opis" value="{{$artist->artist_opis}}" class="form-control" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form"> Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="artist_email" value="{{$artist->artist_email}}" class="form-control" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"> Kategorija </label>
                    <div class="col-sm-10">
                        <select name="artist_kategorija" class="form-control">
                            <option value="Realism" <?php if($artist->artist_kategorija=="Realism"){print ' selected'; }
                                ?>
                                >Realism
                            </option>
                            <option value="Black&Gray" <?php if($artist->artist_kategorija=="Black&Gray"){print '
                                selected';}
                                ?>
                                >Black&Gray
                            </option>
                            <option value="Color" <?php if($artist->artist_kategorija=="Color"){print ' selected'; } ?>
                                >Color
                            </option>
                            <option value="Fantasy" <?php if($artist->artist_kategorija=="Fantasy"){print ' selected'; }
                                ?>
                                >Fantasy
                            </option>
                            <option value="Fineline" <?php if($artist->artist_kategorija=="Fineline"){print ' selected';
                                }
                                ?>
                                >Fineline
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form"> Slika</label>
                    <div class="col-sm-10">
                        <input type="file" name="artist_image" />
                        <img src="/img/{{$artist->artist_image}}" width="100px">
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