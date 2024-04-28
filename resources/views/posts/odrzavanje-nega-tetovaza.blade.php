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
                <div>

                    <img class="mt0" src="/img/blog4-1.jpg" alt="" loading="eager">

                </div>
                <div class="page-content">
                    <p><span>Nakon tetoviranja, koža se tretira kao opekotina i može se zaštititi na sledeća
                            dva načina: <strong>zaštitnom folijom ili gazom.</strong></span></p>
                    <p><span>Ukoliko koristite zaštitnu foliju, ona se ne sme držati preko tetovaže duže od
                            dva sata zato što onemogućava disanje kože. </span></p>
                    <p><span><span>Ukoliko tetovažu prekrivate gazom, <strong>morate je zadržati od 12 do 24
                                    sata.</strong> Gaza upija višak kreme i daje potrebnu vlažnost tetovaži.
                            </span><span>Tetovaža u prvim satima nakon tetoviranja može izbaciti malo boje i
                                sukrvice, pa je gaza prikladnija zaštita jer upije višak tekućina. Poželjno
                                je gazu zadržati preko noći. Ukoliko se gaza zalepi za tetovažu, nikako je
                                nemojte na silu skidati već je natopite mlakom vodom i ona će se
                                odlepiti.</span></span></p>
                    <p><span>Tetovaža mora da se održava i neguje u period zarastanja, <strong>optimalno
                                5-10 dana.</strong> <em>Pravilno zarastanje je jako važno kako bi i boja
                                tetovaže na svim mestima bila jednaka.</em> </span></p>
                    <p><span>Sasušivanje je loše za tetovažu jer ubrzava otpadanje kraste, a prevremeno
                            odbacivanje kraste rezultuje slabijim intenzitetom boje na tom delu tetovaže.
                            Zato je važno tetovažu redovno prati blagim antibakterijskim sapunom niske PH
                            vrendnosti i toplom vodom. Nakon pranja tetovaže, obrišite je čistim
                            ubrusom/kozmetičkom maramicom, blagim tapkanjem po njoj, nikako nemojte trljati
                            grubo.</span></p>
                    <p>&nbsp;</p>
                    <p><span>Nakon toga sledi mazanje PANTENOLOM mast (nikako pantenol emulzija, gel ili
                            krema već isključivo mast). Nemojte nanositi mast direktno iz tube, već je prvo
                            istisnite na prst. 5-10 dana održavati tetovažu masnom, trudite se da je mažete
                            što češće u što tanjem sloju. Nakon mazanja oblačite čistu i pamučnu garderobu.
                            U slučaju da se garderoba zalepi za kožu i tako sasuši, nemojte je odvajati od
                            slike na silu, već pokvasite garderobu mlakom vodom i blago odvojite.</span></p>
                    <p><span>Pantenol mast daje tetovaži neophodnu masnoću koja je potrebna za održavanje
                            elastičnosti kraste. Prvih sedam dana štitite tetovažu od izvora prljavštine,
                            pošto ranu možete zaraziti bakterijama i dovesti do upalnog procesa. Ranu
                            nemojte dirati prljavim rukama, izbegavajte bazene! Zimi zaštitite novu tetovažu
                            od smrzavanja. Nemojte koristiti vazelin - ispod njega koža ne diše. Ako
                            izlazite na sunce u prva dva meseca nakon tetoviranja, štitite Vašu tetovažu čak
                            i u hladu i namažite je kremom sa UV zaštitnim faktorom 50.</span></p>
                    <p>&nbsp;</p>
                    <p><span><strong>Izbegavajte solarijum!</strong> Nakon 10ak dana mazanja pantenolom,
                            nastavite rutinu mazanja kože (ujutru i uveče) ali to možete raditi blagim
                            mlekom za telo koje inače koristite u svojoj rutini, kako biste kožu ostavili
                            hidriranom. Izbegavajte preterano znojenje, treninge, nemojte praviti duge kupke
                            i slično. Dok koža potpuno ne zaceli, nemojte koristiti brijač preko
                            tetovaže.</span></p>
                    <p>&nbsp;</p>
                    <p><span><strong>Ne slušajte savete ljudi koji nisu stručni u ovoj oblasti
                                !</strong></span></p>
                    <p>&nbsp;</p>
                </div>
            </section>
        </main>
    </div>
</div>
@endsection