@extends('master')
@section('title')
Početna
@endsection
@section('content')
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div
                class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up">Želiš da se tetoviraš? <br> Na pravom si mestu! </h2>
                <p data-aos="fade-up"> Mi smo tim nagrađivanih tattoo umetnika koji
                    će vam pomoći da dobijete savršenu, kreativnu, prilagođenu tetovažu koja
                    je jedinstveno dizajnirana na osnovu vaših ideja, vrednosti i uverenja. Mi smo
                    brend kome ljudi veruju, prepoznati od strane vas. </p>
                <div class="d-flex">
                    <a href="{{route('konsultacije.create')}}" class="btn-book-a-tattoo"> Zakaži konsultacije</a>
                    <a href="https://www.youtube.com/watch?v=MYn15yDBvxM"
                        class="btn-watch-video d-flex align-items-center" target="_blank"><i> <i
                                class="fa-regular fa-circle-play" style="color: #000000;"></i></i><span>Pogledaj
                            video</span></a>
                </div>
            </div>
            <div class=" col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <img id="ime" src="img/slika.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="testimonials section-bg">
    <div id="nekiDiv" class="container">
        <div class="section-header">
            <h2>UTISCI</h2>
            <p>Šta su rekli <span>o nama</span></p>
        </div>

        <div class="slides-1 swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="fa-solid fa-quote-left fa-xs" style="color: #ffffff;"></i>
                                        Fenomenalno iskustvo! Sve smo se dogovorili za 5 minuta. Dobra
                                        atmosfera, dobra muzika, dobro drustvo. Ispunili su svaku moju
                                        zamisao tacno onako kako sam zelela. Sve pohvale i dolazim opet sigurno!
                                        <i class="fa-solid fa-quote-right fa-xs" style="color: #ffffff;"></i>
                                    </p>
                                    <h3>Ksenija Pajić</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img src="img/ksen.jpg" class="img-fluid testimonial-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="fa-solid fa-quote-left fa-xs" style="color: #ffffff;"></i>
                                        Drago mi je da sam baš ovde došao zbog prve tetovaže. Tattoo umetnik je
                                        ludo talentovan.
                                        Takođe veoma prijateljski nastrojen i koristan, prilikom izbora vaše
                                        tetovaže. Sve preporuke!
                                        <i class="fa-solid fa-quote-right fa-xs" style="color: #ffffff;"></i>
                                    </p>
                                    <h3>Igor Simić</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img src="img/igor.jpg" class="img-fluid testimonial-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="fa-solid fa-quote-left fa-xs" style="color: #ffffff;"></i>
                                        Malo je reći da sam oduševljena! Tim je ekspeditivan, posten, korektan.
                                        Ovakvo iskustvo iziskuje 100 zvezdica! Vrhunski umetnici i ljudi.
                                        Podarili su mi maestralnu - unikatnu sliku na koži. Sve
                                        najsuperlativnije u svakom smislu.
                                        <i class="fa-solid fa-quote-right fa-xs" style="color: #ffffff;"></i>
                                    </p>
                                    <h3>Milica Stamenković</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img src="img/mil.jpg" class="img-fluid testimonial-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                    <p>
                                        <i class="fa-solid fa-quote-left fa-xs" style="color: #ffffff;"></i>
                                        Najbolji studio tetovaža u Beogradu i Srbiji. Sa preko 30 godina
                                        iskustva i visokokvalitetnim korisničkim servisom,
                                        to je oaza za ljubitelje tetovaža.
                                        Dočekaće vas sa velikim osmehom, toplom dobrodošlicom
                                        i visokim nivoom profesionalizma, manira i
                                        visokokvalitetnog rada.
                                        <i class="fa-solid fa-quote-right fa-xs" style="color: #ffffff;"></i>
                                    </p>
                                    <h3>Ivan Bojanić</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 text-center">
                                <img src="img/ivan.jpg" class="img-fluid testimonial-img" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
@endsection