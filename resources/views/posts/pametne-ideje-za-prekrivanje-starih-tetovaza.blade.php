@extends('master')
<link rel="stylesheet" href="/css/blog.css" />
@section('content')
<div class="site-wrapper">
    <div class="router-view">
        <main class="pp">
            <!---->
            <section class="page-title">
                <div class="page-heading">
                    <div class="page-heading-eyebrow">{{$post->datum}}</div>
                    <h1 class="page-heading_title">{{$post->naslov}}</h1>
                    <div class="page-heading_subtitle">by {{$post->autor}}</div>
                </div>
            </section>
            <section class="page-content">
                <p align="justify"><span><span><span lang="sr-Latn-ME">Bili ste zaljubljeni u nekog pa
                                ste istetovirali njegovo ime, a sada već niste
                                zajedno.</span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Kako to ispraviti?
                            </span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Odavno postoje laseri za
                                uklanjanje tetovaža ali takvi tretmani znaju biti bolni i na kraju
                                umesto tetovaže, ostane beli ožiljak, kao od opekotine. Pa, ukoliko ste
                                se odlučili da više ne želite da imate staru tetovažu na svome telu,
                                možete jednostavno smisliti dobru tetovažu za preko koja treba biti
                                otprilike iste veličine, eventualno veća.</span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Evo nekih od predloga kada je u
                                pitanju prekrivanje starih tetovaža:</span></span></span></p>
                <ul>
                    <li>
                        <p align="justify"><span><span><span lang="sr-Latn-ME">Prekrivanje tetovaže koja
                                        je ime bivšeg partnera, sa kime više niste u
                                        vezi/braku</span></span></span></p>
                    </li>
                    <li>
                        <p align="justify"><span><span><span lang="sr-Latn-ME">Stara tetovaža je počela
                                        da bledi i treba osveženje ili ste se odlučili da na tom mestu
                                        bude nešto drugo</span></span></span></p>
                    </li>
                    <li>
                        <p align="justify"><span><span><span lang="sr-Latn-ME">Voleli biste veću
                                        tetovažu na tom mestu </span></span></span></p>
                    </li>
                </ul>
                <h2>Da li su tetovaže koje prekrivaju stare bolne?</h2>
                <p align="justify"><span><span><span lang="sr-Latn-ME">To je već sve individualno. Jedni
                                će reći da boli deset puta više od tetovaže koja je bila ranije i koja
                                se prekriva, dok će drugi reći da ne boli ništa više od
                                prethodne.</span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">To zavisi od mnogo faktora, kao
                                na primer: mesto na kome se nalazi tetovaža, veličina tetovaže, boja,
                                stanje prethodne tetovaže,..</span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Svakako da će trebati više
                                vremena, ali ako nađete pravog artistu koji će ispuniti vašu želju,
                                nećete se pokajati, već ćete biti presrećni sa novom
                                tetovažom.</span></span></span></p>
                <h2 align="justify">Boje koje se koriste za prekrivanje starih tetovaža</h2>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Glavno pravilo je da bi za
                                prekrivanje trebalo da se koriste boje tamnije od onih koje su korištene
                                za staru tetovažu. Artisti koriste najčešće crnu za pokrivanje, ali se
                                takođe mogu koristiti i ostale kao što su plava, narandžasta i sve koje
                                mogu poslužiti da zakumfliraju stare. Mogu se dobiti i novi tonovi,
                                kombinacijom starih i novih.</span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Kada su u pitanju bele i svetle
                                tetovaže, onda artisti bez problema mogu napraviti tetovažu iste
                                veličine. Ali kada je u pitanju crna tetovaža, onda se ipak mora
                                napraviti veća kako bi estetski bilo lepo i uredno.</span></span></span>
                </p>
                <h2 align="justify">Može li istetovirano ime biti prekriveno?</h2>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Naravno, čak su imena možda i
                                najlakša za prekriti.</span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Naročito ako se radi o maloj
                                regiji, slova mogu biti iskorištena za novi dizajn.</span></span></span>
                </p>
                <h2 align="justify">Ideje za prekrivanje koje će vas oduševiti</h2>
                <h3>Cvetni dizajn</h3>
                <p><img class="mt0" src="/img/blog2-1.jpg" alt=""></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Šta mislite o tome da prekrijete
                                ime bivšeg partnera i pretvorite tetovažu u cvetni dizajn?
                            </span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Cveće daje vašem artisti dovoljno
                                prostora za kreativnost. Ovakvi dizajni izgledaju sjajno, a možete
                                odabrati različito cveće koje može imati različitu simboliku. Bilo da
                                želite da prenesete čistotu i nevinost ili moć i snagu, cveće može
                                pomoći da pošaljete željenu poruku.</span></span></span></p>
                <h3 align="justify">Krila</h3>
                <p><img class="mt0" src="/img/blog2-2.jpg" alt=""></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Ptice simbolizuju slobodu i
                                nezavisnost, pa može li biti bolje prekrivanje imena bivšeg partnera od
                                ove? </span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Slično cveću, tetovaže ptica mogu
                                imati različite stilove, oblike i veličine. To je ono što artistima daje
                                puno posla kada je u pitanju prekrivanje stare
                                tetovaže.</span></span></span></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Muškarcima su uglavnom
                                interesatni orlovi, dok su za žene labudovi lepi, simbolizuju eleganciju
                                i čistoću.</span></span></span></p>
                <h3 align="justify">Od jednostavnog do složenog dizajna</h3>
                <p><img class="mt0" src="/img/blog2-3.jpg" alt="" width="300" height="284"></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Ako je vaša stara tetovaža počela
                                da bledi, dodavanje više složenosti dizajnu može biti osnova za
                                prekrivanje starih tetovaža. Ukoliko ste imali određeni simbol i želite
                                da ga samo nadogradite, možete dodati i apstraktne ukrase i stvoriti
                                vizuelno impresivnu tetovažu.</span></span></span></p>
                <h3 align="justify">Povećanje kontrasta</h3>
                <p><img class="mt0" src="/img/blog2-4.jpg" alt="" width="600" height="600"></p>
                <p align="justify"><span><span><span lang="sr-Latn-ME">Razmislite i o tetovažama koje
                                povećavaju kontrast boja, ukoliko se radi o tetovaži koja je izbledela.
                                Ovaj pristup je odličan ako imate bledu kožu. Artista će moći da
                                prekrije prethodnu tetovažu skoro u potpunosti, zavisno od trenutnog
                                stanja.</span></span></span></p>
                <h3 align="justify">Dark tetovaže</h3>
                <p><img class="mt0" src="/img/blog2-5.jpg" alt="" width="1080" height="1080"></p>
                <p>Ovo može biti sjajna ideja za prekrivarnje istetoviranih imena, posebno na
                    podlaktici. Artista će koristiti tamno mastilo da potpuno zamaskira staro područje
                    tetovaže. U tom slučaju možete osmisliti jedinstveni dizajn za vašu tetovažu koji će
                    učiniti da taj deo tela izgleda impresivno.</p>
                <h3>Mandala tetovaže</h3>
                <p><img class="mt0" src="/img/blog2-6.jpg" alt="" width="800" height="800"></p>
                <p>Mandala je ritualni simbol koji predstavlja duhovno putovanje, ali i bezvremenost i
                    celovitost.<br>
                    Vaš artista može eksperimentisati sa različitim bojama kako biste dobili različita
                    značenja. Mandala je odličan izbor da zamenite svog bivšeg parnera i da pokažete da
                    ste krenuli dalje!</p>

            </section>
        </main>
    </div>
</div>
@endsection