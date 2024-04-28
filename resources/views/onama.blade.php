<link rel="stylesheet" href="{{asset('css/onama.css')}}">
@extends('master')
@section('title')
O nama
@endsection
@section('content')
<section id="onamasekcija" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div
                class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up"> O NAMA</h2>
                <p>
                    Profesionalno tetoviranje podrazumeva pažnju na detalje,
                    a veliki umetnici vode računa o svim detaljima koji su posebni u ovoj umetnosti.
                    Unapred skiciramo vaš dizajn pre stvarne sesije i staramo se da svi
                    potrebni detalji i vaše želje budu uključeni u dizajn i da izbegnu pogrešnu primenu i
                    razmazivanje boja. Obraćamo veliku pažnju na detalje, što znači da
                    dobro mešamo svoje mastilo, da se pridržavamo procedura koje čuvaju higijenu
                    i dobrobit vas i još mnogo toga odakle ovo dolazi. <br> <br> Biti dobar tattoo umetnik znači da čak
                    i
                    ako imate stotine klijenata koji uvek čekaju u redu za vašu uslugu, i dalje možete zadržati
                    apsolutnu i
                    nepodeljenu pažnju i zadržati klijenta .<strong> Prepoznali ste to kod nas, zato i trajemo toliko
                        dugo.</strong> </p>
            </div>
            <div class=" col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <img id="onamaSlika" src="img/onama.jpg" class="img-fluid" alt="">
                <p id="tekst"> <strong> Posetite nas </strong></p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>DOBRODOŠLI STE</h2>
            <p>Potrebna vam je pomoć? <span> Kontaktirajte nas ili nas posetite! </span></p>
        </div>

        <div class="mb-3">
            <iframe style="width: 100%; height:300px; border:0;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.2983119370665!2d20.4758911!3d44.815487000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7abbf6cdcb45%3A0x4e87088a7a4bbcba!2sTakovska%2047%2C%20Beograd%2C%20Serbia!5e0!3m2!1sen!2s!4v1692041519997!5m2!1sen!2s"
                frameborder="0" allowfullscreen=></iframe>
        </div>

        <div class="row gy-4">

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>"Moje telo je moj dnevnik, a moje tetovaže su moja priča"</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <cite title="Source Title">Johnny Depp</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-item d-flex align-items-center">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>"Tako sam zaintrigirana tetovažama. To je cela kultura, i ja je proučavam"</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <cite title="Source Title">Rihanna</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>"Iako neke tetovaže imaju puno značenja, na kraju je to ono što voliš i sviđa ti se kako
                                izgledaju"</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <cite title="Source Title">Kat Von D</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-item  d-flex align-items-center">
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>"Svaka moja tetovaža mi puno znači, jer ima veze sa mojom porodicom ili prijateljima ili
                                sa životnim iskustvom"</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <cite title="Source Title">David Beckham</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection