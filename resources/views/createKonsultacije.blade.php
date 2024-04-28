@extends('master')
@section('title')
Booking
@endsection
<link rel="stylesheet" href="{{asset('css/booking.css')}}">
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
@if($message=Session::get('success'))
<div class="alert alert-success alert-dismissible">
    {{$message}}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<div class="booking">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-md-12">
                    <div class="mapa">
                        <h4>Kontaktirajte nas ili nas posetite!
                        </h4>
                        <iframe style="width: 100%; height:350px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.2983119370665!2d20.4758911!3d44.815487000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7abbf6cdcb45%3A0x4e87088a7a4bbcba!2sTakovska%2047%2C%20Beograd%2C%20Serbia!5e0!3m2!1sen!2s!4v1692041519997!5m2!1sen!2s"
                            frameborder="0" allowfullscreen=></iframe>
                    </div>
                </div>

                <div class="col-md-12" id="divKontakt"
                    style="display: flex; flex-direction: column; justify-content: space-between;">

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Adresa</h4>
                            <p><i class="fa-solid fa-map-pin fa-beat fa-xl" style="color: #4a4a4a;"></i>
                                Takovska 47 <br>
                                11108 Beograd - Srbija
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <h4>Kontaktirajte nas</h4>
                            <p>
                                <strong><i class="fa-solid fa-phone fa-beat fa-xl"
                                        style="color: #4a4a4a;"></i>Telefon:</strong> +381 64 585 8787<br> <br>
                                <strong><i class="fa-solid fa-envelope fa-beat fa-xl" style="color: #4a4a4a;"></i>
                                    Email:</strong>
                                info@1ustone.com<br>
                            </p>
                        </div>
                    </div>


                    <div class=" row">
                        <div class="col-md-12">
                            <h4>Radno vreme</h4>
                            <p>
                                <strong><i class="fa-solid fa-clock fa-beat fa-xl" style="color: #4a4a4a;"></i> Pon-Sub:
                                    10h - 23h </strong><br>
                                Nedelja: Zatvoreno
                            </p>
                        </div>
                    </div>
                    @if(auth()->check())
                    @if(auth()->user()->role === 'admin')
                    @can('isAdmin')
                    <div class="text-center">
                        <a href="{{ route('konsultacije.index') }}" class="btn">Prikaži konsultacije</a>
                    </div>
                    @endcan
                    @elseif(auth()->user()->role === 'manager')
                    @can('isManager')
                    <div class="text-center">
                        <a href="{{ route('konsultacije.indexMenadzer') }}" class="btn">Prikaži konsultacije</a>
                    </div>
                    @endcan
                    @endif
                    @else
                    <div class="text-center">
                    </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-md-12">
                    <div class="poruka">
                        <h3> Ostavite nam poruku! </h3>
                        <p>Ako imate bilo kakvih pitanja u vezi sa našim uslugama,
                            ili želite da zakažete termin, slobodno ostavite poruku na ovoj stranici,
                            pozovite nas tokom radnog vremena na dole navedene brojeve telefona ili svratite u
                            studio.
                            <br><br>
                            Telefonski pozivi i tekstualne poruke su poželjniji jer će vrieme odgovora biti brže.
                            Obavezno ostavite svoje ime, broj i datum kada bi ste hteli konsultacije, a mi ćemo vam
                            se
                            javiti
                            čim
                            budemo
                            mogli.<br><br>
                            Tetovaža je obaveza na oba kraja i trajno je umetničko delo. Svoj posao shvatamo veoma
                            ozbiljno i
                            samo
                            tražimo
                            da i vi radite isto. Rado bismo razgovarali o tome kako vam možemo dati vaš prvi ili
                            sledeći
                            dizajn,
                            pa
                            nam
                            se
                            javite!
                        </p>
                    </div>
                </div>
                <div class="col-md-12" id="div">
                    <div class="forma">
                        <form method="POST" action="{{route('konsultacije.store')}}" enctype="multipart/form-data">
                            @csrf
                            <label for="kategorija"> Kategorija: </label>
                            <select name="kategorija" id="category">
                                @foreach ($categories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select> <br><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="prezime"> Prezime </label>
                                    <input type="text" name="prezime" />
                                </div>
                                <div class="col-md-6">
                                    <label for="ime"> Ime </label>
                                    <input type="text" name="ime" />
                                </div>
                            </div><br>

                            <label for="email"> Email </label>
                            <input type="text" name="email" /> <br><br>


                            <label for="brojtelefona"> Broj telefona </label>
                            <input type="text" name="brojtelefona" /> <br><br>

                            <label for="datum"> Datum </label>
                            <input type="text" name="datum" /> <br><br>

                            <label for="vreme"> Vreme </label>
                            <input type="text" name="vreme" /> <br><br>

                            <div class="text-center">
                                <input type="submit" class="btn" value="Dodaj" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection ('content')