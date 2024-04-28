@extends('master')
<link rel="stylesheet" href="{{asset('css/blog1.css')}}">
@section('title')
Blog
@endsection
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
<div class="blog">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">
                <h3>Potvrdite objavu članka</h3>
            </div>
        </div>
    </div>
    <div class="grid" style="--col-gap-lg: 1.5rem; --col-gap-md: 1.5rem; --col-gap-sm: 1rem;
     --col-gap-xs: 1rem; --row-gap-lg: 3rem; --row-gap-md: 3rem; --row-gap-sm: 2rem;
      --row-gap-xs: 2rem; --col-span-lg: 4; --col-span-md: 4; --col-span-sm: 6; --col-span-xs: 12;">
        @if(count($data)>0)
        @foreach($data as $row)
        <div class="card">
            <a href="{{ route('posts.show', ['slug' => $row->slug]) }}">
                <div class="card__media">
                    <picture>
                        <source type="image/jpg"><img src="{{asset('img/'. $row->post_image)}}" loading="lazy"
                            width="364" height="248">
                    </picture>
                </div>
                <div class="card__content">
                    <article class="card__article">
                        <div class="card__title">
                            <h4>{{$row->naslov}}</h4>
                        </div>
                        <div class="card__description">
                            <p align="justify">{{$row->kratak_opis}}</p>
                        </div>
                        <div class="card__meta">
                            <div class="card__author"><span>by</span> {{$row->autor}}</div>
                            <time class="card__date">{{$row->datum}}</time>
                        </div>
                        <div class="card__form">
                            <form method="POST" id="statusForm"
                                action="{{ route('posts.azurirajStatus', ['postId' => $row->id]) }}"
                                enctype="multipart/form-data">
                                <a class="btn" href="{{ route('posts.show', ['slug' => $row->slug]) }}"> Saznaj više...
                                </a><br>
                                @csrf
                                @method('PUT')
                                <div style="margin: 0 auto; display: flex; align-items: center;">
                                    <label for="status" style="margin-right: 10px;">Izaberi novi status:</label>
                                    <select name="status" id="status"
                                        style="border-radius: 5px; border: 2px solid gray;">
                                        <option value="approved">Approved</option>
                                        <option value="rejected">Rejected</option>
                                    </select>
                                    <button type="submit" class="btn" style="margin-left: 10px;">Potvrdi</button>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
            </a>
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
</script>
<script src="/js/blog.js"></script>
@endsection