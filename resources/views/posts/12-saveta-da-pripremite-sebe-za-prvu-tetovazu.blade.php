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
                <article>
                    <div class="page-content">
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Neki ljudi požele da
                                    imaju tetovažu i jednostavno dođu kod tattoo majstora i ispune svoju želju. Dok
                                    drugima ipak nije to tako jednostavno, njihove ideje za tetovaže stoje dugo na listi
                                    želja. Možda su malo i nesigurni ili neodlučni, što je i razumljivo.</span></span>
                        </p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Tetovaže zahtevaju
                                    određeno vreme i osećaj neprijatnosti ili bola sa kojim se osoba koja se prvi put
                                    tetovira do tog trenutka nije susrela. Upravo zbog toga je razumljivo kada su ljudi
                                    sumnjičavi po pitanju tetoviranja, a naročito ukoliko su slušali ili čitali o
                                    negativnim iskustvima.</span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Iskustva osoba koje
                                    imaju tetovaže zavise od mnogo faktora kao što su tehnika, pravilnost, higijena,
                                    umeće crtanja, boje i mnogi drugi. Takođe pragovi bola i osećaja su individualni,
                                    tako da se osećaj i iskustvo tetoviranja ne mogu predvideti.</span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Da biste se osećali
                                    sigurnije i lakše, izdvojili smo 12 saveta koji vam mogu pomoći pre prvog
                                    tetoviranja.</span></span></p>
                        <h2 align="justify">1. Razumeti tuđa iskustva</h2>
                        <p><img class="mt0" src="/img/blog1.jpg" alt=""></p>
                        <p align="justify"><span lang="sr-Latn-ME">Može biti zbunjujuće to što svako priča drugu priču,
                                neki mogu reći da su bili u teškoj agoniji, dok neki mogu reći da uopšte nije toliko
                                strašno, čak što više da uživaju u tome. U svakom slučaju dobićete generalnu sliku o
                                tome kako može izgledati tetoviranje. Naravno ukoliko vam to nije dovoljno, uvek možete
                                pogledati snimke iskustava na jutjubu, koje ljudi rado dele.</span></p>
                        <h2 align="justify">2. Pronađite cenjen studio ili tattoo majstora</h2>
                        <p><img class="mt0" src="/img/blog1-2.jpg" alt="" width="560" height="698"></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Na bilo kakvu uslugu
                                    da idete, bilo to iz zdravstvenih ili estetskih razloga, ukoliko imate strah
                                    potrebna vam je relaksacija. Ukoliko pronađete studio sa prijatnom atmosferom i
                                    ljubaznim majstorima, sigurno ćete se osećati opuštenije pre
                                    procedure.</span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Pre samog
                                    zakazivanja termina najbolje bi bilo da lično posetite studio, a ukoliko niste u
                                    mogućnosti možete se posavetovati sa poznanicima koji imaju iskustva ili potražiti
                                    na internetu dobro cenjene studije blizu tebe.</span></span></p>
                        <h2 align="justify">3. Tražite osobu za podršku</h2>
                        <p><img class="mt0" src="/img/blog1-3.jpg" alt=""></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Mnogi tattoo studiji
                                    dozvoljavaju svojim mušterijama da povedu sa sobom nekog ko će im biti podrška, dok
                                    se oni tetoviraju. Biti osoba za podršku drugome je odlična stvar, pogotovo ukoliko
                                    i sami planirate da se istetovirate jer možete videti celu proceduru
                                    uživo.</span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Takođe, mnogo znači
                                    ukoliko je u pitanju višesatno tetoviranje, u slučaju da vama ili osobi kojoj ste
                                    podrška treba voda, telefon, bilo šta. Naravno, pre svega treba proveriti sa studiom
                                    da li je njima u redu da povedete prijatelja, rođaka ili sl.</span></span></p>
                        <h2 align="justify">4. Smatrajte vreme koje provedete u studiju kao slobodno vreme i uživajte u
                            tome</h2>
                        <p><img class="mt0" src="/img/blog1-4.jpg" alt=""></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Imajte u glavi da na
                                    termin koji ste došli da se istetovirate treba da uživate i budete srećni jer samim
                                    tim što ste tu, ispunjavate sebi želju. Slobodno ponesite svoju omiljenu knjigu,
                                    odgledajte neki interesantan video snimak na telefonu, proćaskajte sa prijateljem
                                    ili nešto drugo šta inače radite u slobodno vreme.</span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Sigurno da će i
                                    tattoo majstoru biti lakše i lepše da radi ukoliko se opušteno i lepo osećate što
                                    ste tu gde jeste.</span></span></p>
                        <h2 align="justify">5. Prepoznajte svoj prag tolerancije na bol</h2>
                        <p><img class="mt0" src="/img/blog1-5.jpg" alt=""></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Ukoliko prepoznate
                                    da je vaš prag tolerancije na bol kratak, najbolje bi bilo da se odlučite za neku
                                    manju tetovažu, za čiju izradu treba od sat do dva vremena. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">To će ti biti
                                    prilika da osetite kako je tetovirati se i možda se sledeći put usudite na neku
                                    veću.</span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Nemojte da vas to
                                    obeshrabri, bol u tetoviranju je tolerantan i mnogi vremenom postanu zavisni od tog
                                    osećaja nelagodnosti. Da su tetovaže toliko strašne, ne bismo gledali ovoliko
                                    istetoviranih ljudi svuda oko nas.</span></span></p>
                        <h2 align="justify">6. Pravite pauze tokom tetoviranja</h2>
                        <p><img class="mt0" src="/img/blog1-6.jpg" alt="" width="1000" height="667"></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Ukoliko vam zatreba
                                    svež vazduh ili čaša vode, slobodno zatražite pauzu. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Ona će pomoći i vama
                                    i tattoo majstoru da se malo razdrmate, pogotovo ako se radi o višesatnom
                                    tetoviranju. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Pauze su značajne
                                    ali ne smeju biti preduge, sve u dogovoru sa majstorom.</span></span></p>
                        <h2 align="justify">7. Zapamtite da bol nije konstantna</h2>
                        <p><img class="mt0" src="/img/blog1-7.jpg" alt=""></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Tattoo majstor mora
                                    stalno da dopunjava cev mastilom, što znači da bol i penteracija na koži nikako ne
                                    mogu biti u kontinuitetu. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Takođe, različita
                                    mastila izazivaju različite reakcije, tako da nije ni tu uvek ista bol.
                                </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Svakako znajte da
                                    imate vremena da predahnete, u međuvremenu.</span></span></p>
                        <h2 align="justify">8. Meditirajte</h2>
                        <p><img class="mt0 alignnone" src="/img/blog1-8.jpg" alt=""></p>
                        <p>Ovo pravilo je opciono, ali ukoliko ste pod tenzijom i osećate se anksiozno pre samog
                            tetoviranja, najbolje je da uradite meditaciju kako bi se vaše telo i vaš um opustili.</p>
                        <p>Ne mora to da bude meditacija na višem nivou, dovoljno je poslužiti se pravilnom disanju i
                            nekoliko dubljih udaha i izdaha.</p>
                        <p>Takođe, možete pustiti relaksirajuću muziku i uraditi istezanje. Ono mnogo znači jer ćete
                            određeno vreme biti u istom položaju, dok se radi tetovaža, pa bi istezanje doprinelo
                            opuštanju.</p>
                        <h2 align="justify">9. Dovedite svoju ishranu u red</h2>
                        <p><img class="mt0" src="/img/blog1-9.jpg" alt=""></p>
                        <p>&nbsp;</p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Jedite zdravu i
                                    nutritivno bogatu hranu nekoliko dana pre tetoviranja. Hrana koju unosite u
                                    organizam predstavlja pridodnog iscelitelja za sve probleme. Dobar obrok pre
                                    tetoviranja će vam dati energiju koja će vam biti potrebna. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Konzumirajte hranu
                                    bogatu vitaminima, a najviše vitaminom C koji je dobar za energiju.</span></span>
                        </p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Hidrirajte se!
                                    Unosite velike količine vode i prirodne sokove. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Najbolje bi bilo
                                    imati dobar obrok tri sata pre tetoviranja, ali ukoliko znate da ćete ostati duži
                                    vremenski period, ponesite neku zdravu užinu. Izbegavajte mlečne proizvode, slatkiše
                                    i prerađenu hranu.</span></span></p>
                        <h2 align="justify">10. Obucite udobnu odeću</h2>
                        <p><img class="mt0" src="/img/blog1-10.jpg" alt=""></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">S obzirom na to da
                                    ćete biti sve vreme u jednom položaju obucite nešto što je komforno, radi udobnosti
                                    i opušenosti. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Jako je bitno da je
                                    vaša garderoba čista, da ne bi došlo do neke infekcije. Takođe, deo koji se tetovira
                                    treba biti otkriven. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Za svaki slučaj
                                    pametno je poneti i neku presvlaku, ukoliko vam bude hladno ili vruće da možete da
                                    se presvučete.</span></span></p>
                        <h2 align="justify">11. Izbegavajte alkohol/kofein</h2>
                        <p><img class="mt0" src="/img/blog1-11.jpg" alt=""></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Savetuje se da se
                                    makar 24 do 48 sati pre tetoviranja izbegavaju alkohol i kofein. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Oni razblažuju krv,
                                    tako da čine tetoviranje bolnijim. Krvarićete više nego normalno i teže će tetovaža
                                    zarasti. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Doći mamuran ili pod
                                    kofeinom svakako da nije dobra ideja. Treba biti u jednom položaju određeno vreme
                                    smireno i opušteno, tako da to ne ide nikome u prilog.</span></span></p>
                        <h2 align="justify">12. Dobar san i odmor noć pre</h2>
                        <p><img class="mt0" src="/img/blog1-12.jpg" alt=""></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Ako želite da se
                                    tetovirate ne možete biti noćna ptica ili klaber barem nekoliko dana pre tetovaže.
                                </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Trebalo bi da budete
                                    naspavani i odmorni kako vaše telo ne bi trpelo jaču bol i kako bi vaša tetovaža
                                    lepo zarasla. </span></span></p>
                        <p align="justify"><span style="font-size: medium;"><span lang="sr-Latn-ME">Veče pre treba da
                                    spavate normalnih 8 sati, a već nedelju dana ranije počnite da se budite rano i
                                    idete na spavanje ranije.</span></span></p>
                    </div>
                </article>
            </section>
        </main>
    </div>
</div>
@endsection