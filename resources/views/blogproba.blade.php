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
                <h3>Pročitajte najnovije vesti</h3>
            </div>
            <div class="col col-md-6">
                <div class="row">
                    <div class="col col-md-6">
                        @can('isManager')
                        <a id="dugme" href="{{route('posts.create')}}" class="btn btn-sm float-end">Dodaj</a>
                        @endcan
                        @can('isAdmin')
                        <a id="dugme" href="{{route('posts.potvrdaStatusa')}}" class="btn btn-sm float-end">Potvrdi
                            status</a>
                        @endcan
                    </div>
                    <div class="col col-md-6">
                        <form action="{{ route('posts.search') }}" method="GET">
                            <input type="text" name="pretraga" placeholder="Pretraga po naslovu">
                            <button type="submit">Pretraži</button>
                        </form>
                    </div>
                </div>
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
                            <form action="{{route('posts.destroy', $row->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @can('isManager') <a class="btn" href="{{route('posts.edit', $row->id)}}"> Uredi </a>
                                @endcan
                                <a class="btn" href="{{ route('posts.show', ['slug' => $row->slug]) }}"> Saznaj više...
                                </a>
                                @csrf
                                @method('DELETE')
                                @can('isManager') <button type="submit" class="btn"
                                    onclick="return confirm('Da li ste sigurni da želite da obrišete ovaj post?')">Obriši</button>
                                @endcan
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
<div class="container1">
    <div class="box" id="box1" data-hover-text="
        <h4>Imate li još neka pitanja na umu?</h4> <br><br> <p> Najčešća pitanja naših klijenata</p>"
        data-show-button="false">
        <p class="displayText">Imate li još neka pitanja na umu?</p>
        <div class="hover-content">
            <p class="hoverText"></p>
        </div>
    </div>
    <div class="box" id="box2" data-show-button="true" data-button-text="Javite nam se"
        data-link="{{route('konsultacije.create')}}"
        data-hover-text="
    <h4>Koliko košta tetovaža?</h4><br><br>
    <p>Cena tetovaže zavisi od različitih faktora kao što su veličina,
        složenost dizajna, mesto na kojem se nalazi i naravno od umeća artista,
        međutim mi predlažemo tetovaže koje će se uklopiti u vaš budžet.</p><br>
        <p>Obavljamo besplatne konsultacije, dajte nam da razumemo vaše zahteve i vaš dizajn, i pomoći ćemo vam oko cene i drugih stvari.</p>">
        <p class="displayText">Generalno, koliko koštaju tetovaže?</p>
        <div class="hover-content">
            <p class="hoverText"></p>
        </div>
    </div>
    <div class="box" id="box3" data-show-button="true" data-button-text="Pogledajte portfolio"
        data-link="{{route('artist.index')}}" data-hover-text="
    <h4>Mogu li pokriti svoju staru tetovažu?</h4><br>
    <p>Specijalizovani smo i poznati po tome :) <br>
        Nošenje loše ili stare tetovaže može biti uznemirujuće, posebno za željene/neželjene
        tetovaže kao što su imena bivših momaka ili bivših devojaka.</p><br>
        <p>Tetovaže za prekrivanje zahtevaju posebne veštine i kreativnost i malo umetnika to može raditi.
            Imamo tim umetnika koji se specijalizovao baš za to.</p><br>
            <p>Da li imate jednu takvu?, možemo je pretvoriti u prekrasno umetničko delo.<br>
                Ovdje možete pogledati portfolio naših artista. </p>">
        <p class="displayText">Možete li da popravite moju staru/lošu tetovažu?</p>
        <div class="hover-content">
            <p class="hoverText"></p>
        </div>
    </div>
    <div class="box" id="box4" data-show-button="true" data-button-text="Posetite naš blog"
        data-link="{{route('posts.index')}}"
        data-hover-text="
            <h4>Koliko je tetovaža bolna?</h4><br><br>
            <p>Tetoviranje nije jako bolan proces za većinu dijelova našeg tela.
                To je više iskustvo nego bol. Ipak da vam pomognemo da shvatite, dozvolite nam da vam kažemo da žene upoređuju ovaj nivo boli sa
                depilacijom, kažu da je bol mnogo manji od depilacije ili sličan njoj. </p> <br>
                <p>Bol je podnošljiv, lak i zabavan za većinu ljudi. Postavili smo blog na ovu temu kako bismo vam pomogli da shvatite šta uzrokuje bol,
                    koliki je on i šta se može učiniti da ga smanjite. Molimo kliknite na sledeći link da pročitate </p>">
        <p class="displayText">Koliko je tetoviranje bolno?</p>
        <div class="hover-content">
            <p class="hoverText"></p>
        </div>
    </div>
    <div class="box" id="box5" data-show-button="true" data-button-text="Posetite naš blog"
        data-link="{{route('posts.index')}}"
        data-hover-text="
                <h4>Šta predstavlja nega tetovaže?</h4><br><br>
                <p>Šta je naknadna nega tetovaža?</p> <br>
                <p>Tradicionalna naknadna nega tetovaža je važan proces koji treba pratiti.
                    Za održavanje prve sedmice potrebna je jaka disciplina.
                    Koristimo najnapredniji sistem za naknadnu negu tetovaža. Briga o tetovažama više nije muka.
                    Samo jedan omot nakon tetovaže i spremni ste. Pogledajte kompletan vodič za proces nege na blogu. </p>">
        <p class="displayText">Šta predstavlja nega tetovaže?</p>
        <div class="hover-content">
            <p class="hoverText"></p>
        </div>
    </div>
    <div class="box" id="box6" data-show-button="true" data-button-text="Javite nam se za konsultacije"
        data-link="{{route('konsultacije.create')}}">
        <p class="displayText">Imate li još pitanja?</p>
        <div class="hover-content">
            <p class="hoverText"></p>
        </div>
    </div>
</div>

<script src="/js/blog.js"></script>
@endsection