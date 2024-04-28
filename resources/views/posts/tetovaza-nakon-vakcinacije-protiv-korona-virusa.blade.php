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
                <p><img class="mt0" src="/img/blog3-1.jpg">
                <p>Uvođenje vakcine protiv COVID-19 je napravilo veliku pometnju među ljudima širom
                    sveta. Pitanje se postavlja da li su te vakcine štetne po ljudsko zdravlje, šta
                    ubacuju u naš organizam? I kako to da neko kaže da su spas, a neko pak da ima dosta
                    negativnih posledica?<br>
                    Na to pitanje nam ne može niko dati sto posto tačan odgovor, ali kada su tetovaže u
                    pitanju, evo nekoliko saveta u vezi sa vakcinacijom i tetoviranjem.<br>
                    Jasno je da je tetoviranje proces ubrizgavanja mastila putem igle u našu kožu. Kao i
                    sve ostalo sa čime se nismo rodili, organizam prepoznaje mastilo kao strano telo,
                    što može dovesti do post-tattoo neželjenih efekata kao što su crvenilo, bol,
                    otok.<br>
                    Sa vakcinama je veoma slično, takođe se ubrizgava nepoznat materijal u našu kožu,
                    odnosno krv i ogranizam se bori i sa tim stranim telom na sličan način.</p>
                <p><img class="mt0" src="/img/blog3-2.jpg" alt="" width="1172" height="781"><br>
                    <span lang="sr-Latn-ME">I vakcine protiv COVID-19 i tetovaže mogu prouzrokovati
                        reakcije slične slabim prehladama, glavoboljama, i tome slično. S obzirom na sve
                        okolnosti današnjice, potpuno je normalno biti zbunjen u vezi sa tetoviranjem u
                        istom periodu kada su i vakcine u najvećem jeku.</span><br>
                    <span lang="sr-Latn-ME">I kako će uopšte organizam reagovati, kada su u pitanju dva
                        strana tela?</span><br>
                    <span lang="sr-Latn-ME">Nažalost, vakcine protiv COVID-19 su prilično nove i postoji
                        toliko različitih mišljenja i teorija da na pitanje vezano za tetovaže niko još
                        uvek ne može da odgovori.</span><br>
                    <span lang="sr-Latn-ME">U suštini, ne bi trebalo da predstavlja nikakav problem,
                        niti postoji i jedno istraživanje koje je pokazalo da tetovaže štete funkciji
                        vakcina, niti obrnuto. </span><br>
                    <span lang="sr-Latn-ME">Postoji </span><span lang="sr-Latn-ME"><b>par
                            rizika</b></span><span lang="sr-Latn-ME"> na koje treba obratiti pažnju, a
                        to su:</span>
                </p>
                <ul>
                    <li>
                        <p lang="sr-Latn-ME"><span lang="sr-Latn-ME"><b>COVID-19
                                    infekcija</b></span><span lang="sr-Latn-ME"><b> – </b></span><span
                                lang="sr-Latn-ME">I u slučaju kada je osoba vakcinisana protiv virusa,
                                još uvek nije isključeno da se ne može zaraziti virusom i imati neke
                                simptome. To se najviše dešava na javnim mestima, te sami odlazak na
                                tetoviranje može predstaviti rizik.</span></p>
                    </li>
                    <li>
                        <p lang="sr-Latn-ME"><span lang="sr-Latn-ME"><b>Zabuna </b></span><span lang="sr-Latn-ME"><b>–
                                </b></span><span lang="sr-Latn-ME">Najveći
                                problem sa tetoviranjem i vakcinacijom u sličnom periodu jeste konfuzija
                                oko posledica ukoliko se jave, od čega su se javile. Ako primetite
                                crvenilo ili osetite bol posle tetoviranja ruke, možete misliti da je to
                                samo posledica virusa, dok to može biti prvi simptom infekcije, na
                                primer.</span></p>
                    </li>
                    <li>
                        <p lang="sr-Latn-ME"><span lang="sr-Latn-ME"><b>Pojačane nuspojave
                                </b></span><span lang="sr-Latn-ME">– Tetovaže mogu izazvati nuspojave,
                                kao što može i vakcina. Ako primite oboje u istom danu, možete iskusiti
                                duplo gore nuspojave, kao što su jaki bolovi i veći otok na ruci.</span>
                        </p>
                    </li>
                </ul>
                <p><span lang="sr-Latn-ME">Da biste izbegli ove rizike, najbitnije je pronaći adekvatan
                        tattoo studio i artista koji će uraditi najbolje moguće, kako ne bi došlo do
                        infekcije. Takođe, uvek se ponašajte u skladu sa merama zaštite koji su
                        neophodni pre i tokom vakcinacije.</span></p>
                <h2>Mere predostrožnosti</h2>
                <ul>
                    <li>
                        <p><span lang="sr-Latn-ME"><b>Sačekajte – </b></span><span lang="sr-Latn-ME">Nema određeno
                                koliko vremena treba da prođe između
                                vakcine i tetoviranja, ali je preporučljivo da sačekate makar nekoliko
                                dana kako bi se simptomi vakcinacije umirili.</span></p>
                    </li>
                    <li>
                        <p lang="sr-Latn-ME"><span lang="sr-Latn-ME"><b>Nega –</b></span><span lang="sr-Latn-ME">
                                Pričajte sa artistom o pravilnoj nezi za vašu
                                tetovažu i pratite svaki savet.</span></p>
                    </li>
                    <li>
                        <p lang="sr-Latn-ME"><span lang="sr-Latn-ME"><b>Pitajte svog artista –
                                </b></span><span lang="sr-Latn-ME">On će vam najbolje dati savet za negu
                                što se tiče konkretno vaše tetovaže.</span></p>
                    </li>
                    <li>
                        <p lang="sr-Latn-ME"><span lang="sr-Latn-ME"><b>Sredstva za čišćenje –
                                </b></span><span lang="sr-Latn-ME">Ne zaboravite da spakujete sva
                                neophodna sredstva za čišćenje i kremice pre putovanja.</span></p>
                    </li>
                </ul>
                <h2>Kako negovati tetovažu tokom putovanja?</h2>
                <ul>
                    <li>
                        <p lang="sr-Latn-ME"><span lang="sr-Latn-ME"><b>Sredstva za čišćenje –
                                </b></span><span lang="sr-Latn-ME">Ne zaboravite da spakujete sva
                                neophodna sredstva za čišćenje i kremice pre putovanja.</span></p>
                    </li>
                    <li><span lang="sr-Latn-ME"><b>Izbegavajte sunce – </b></span><span lang="sr-Latn-ME">Direktni
                            sunčevi zraci mogu prouzrokovati bolnu i crvenu
                            tetovažu, tako da je najbolje da se ne izlažete direktno suncu.</span></li>
                </ul>
                <p>&nbsp;<br>
                    <img class="mt0" src="/img/blog3-3.jpg" alt="" width="800" height="1067">
                </p>
            </section>
        </main>
    </div>
</div>
@endsection