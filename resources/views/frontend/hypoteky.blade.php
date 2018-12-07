@include('frontend/header')
@section('page') Hypoteky @endsection

<section class="service-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pt-50 pb-40 header-text">
                <h3>Všetky informácie o hypotékach na jednom mieste</h3>
                <h5 class="info pt-10">Pre zobrazenie detailu kliknite na danú tému</h5>
            </div>
        </div>
        <div class="row pb-30">
            <div class="col-lg-6 col-md-6 mt-sm-30">
                <div class="">
                    <ul class="unordered-list">
                        <div class="sp_item closed" onclick="showDiv()">
                            <li>Čo je refinancovanie hypotéky?</li>
                            <div class="sp_item_cnt" id="sipka">
                                <blockquote class="hypo-blockquote">
                                    <p>Prenesenie hypotéky - teda refinancovanie - je krok, vďaka ktorému môžete
                                        poriadne ušetriť. Vďaka novej hypotéke môžete mať nižší úrok a aj splátky.
                                        Usporíte tak stovky až tisíce eur.
                                    </p>
                                    <p>
                                        Prenesenie hypotéky - teda refinancovanie - je krok, vďaka ktorému môžete poriadne
                                        ušetriť. Vďaka novej hypotéke môžete mať nižší úrok a aj splátky. Usporíte tak stovky až tisíce eur.
                                    </p>
                                    <p>
                                        Prenesením môžete splatiť akúkoľvek hypotéku alebo úver určený na bývanie. Preniesť hypotéku môžete
                                        kedykoľvek, najlepšie však pred koncom fixácie úrokovej sadzby. Vtedy za predčasné splatenie neplatíte.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv2()">
                            <li>Čo je konsolidácia úverov?</li>
                            <div class="sp_item_cnt" id="sipka2">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Splatenie zlých úverov - teda konsolidácia úverov - je splatenie všetkých Vašich pôžičiek jednou, konsolidačnou hypotékou.
                                    </p>
                                    <p>
                                        Hypotéku založíte nehnuteľnosťou. Vďaka tomu splatíte všetky svoje staré úvery, až do hodnoty vašej
                                        nehnuteľnosti. Konsolidačná hypotéka má nižší úrok a tak Vám zabezpečí nižšie splátky.
                                    </p>
                                    <p>
                                        Splatenie zlých úverov funguje tak, že jednou konsolidačnou hypotékou splatíte všetky doterajšie úvery. Radi
                                        vám pomôžeme a nájdeme vhodnú konsolidačnú hypotéku.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv3()">
                            <li>Čo je to hypotéka?</li>
                            <div class="sp_item_cnt" id="sipka3">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Hypotéka je úver poskytnutý bankou na financovanie kúpy, výstavby alebo
                                        rekonštrukciu nehnuteľnosti a jeho splácanie je zaistené záložným právom na nehnuteľnosť.
                                    </p>
                                    <p>
                                        Využitie úveru môže byť účelové - priama investícia do nehnuteľnosti, prípadne financovanie
                                        do inej nehnuteľnosti, alebo neúčelové - tzv. americká hypotéka.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv4()">
                            <li>Kedy osloviť hypošpecialistu?</li>
                            <div class="sp_item_cnt" id="sipka4">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Ideálny čas na oslovenie hypošpecialistu je ešte pred vypracovaním znaleckého posudku k
                                        nehnuteľnosti, naši hypošpecialisti poznajú aktuálne akcie bánk, čím Vám vedia ušetriť čas a
                                        peniaze, napríklad vo forme bezplatného znaleckého posudku od banky alebo odpustenie poplatku za
                                        spracovanie úveru.
                                    </p>
                                    <p>
                                        Všetky služby hypošpecialistov, sú pre klienta bezplatné. Hypošpecialisti sú platení bankou, s ktorou klient
                                        uzavrie zmluvu o hypotekárnom úvere.&nbsp;
                                    </p>
                                    <p>
                                        Výška odmeny hypošpecialistu za sprostredkovaný úver je rovnaká vo všekých bankách, to zabezpečuje objektivitu
                                        pri porovnávaní ponúk, bez postranného záujmu uprednostniť vybranú banku.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv5()">
                            <li>Jednotlivé kroky pri vybavovaní hypotéky</li>
                            <div class="sp_item_cnt" id="sipka5">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                    <ol class="hypo-list">
                                        <li>
                                            výber hypotekárnej ponuky, vyplnenie a&nbsp;podpis žiadosti o&nbsp;úver, doloženie dokladu
                                            totožnosti, preukázanie výšky príjmu a informácie k&nbsp;zakladanej nehnuteľnosti
                                        </li>
                                        <li>
                                            vypracovanie úverových zmlúv bankou a podpis, splnenie podmienok čerpania úveru
                                        </li>
                                        <li>
                                            po splnení podmienok čerpania úveru nasleduje čerpanie a&nbsp;realizácia samotnej kúpy nehnuteľnosti
                                        </li>
                                    </ol>
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv6()">
                            <li>Koľko peňazí viem získať z hypotéky?</li>
                            <div class="sp_item_cnt" id="sipka6">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Výška poskytnutých peňazí závisí od nasledovných faktorov:
                                    </p>
                                    <p>
                                    <ol class="hypo-list">
                                        <li>
                                            hodnoty zabezpečenej nehnuteľnosti
                                        </li>
                                        <li>
                                            schopnosti žiadateľa splácať úver: jeho príjmy, plánovaná splátka a&nbsp;splátky aktuálnych úverov
                                            &nbsp;(tzv. bonita)
                                        </li>
                                        <li>
                                            pomeru požadovanej výšky úveru a hodnoty nehnuteľnosti (tzv. LTV)
                                        </li>
                                        <li>
                                            druhu hypotéky, a&nbsp;teda či ide o účelovú alebo bezúčelovú hypotéku.
                                        </li>
                                    </ol>
                                    </p>
                                    <p>
                                        Čím vyššia je hodnota zabezpečenej nehnuteľnosti, tým vyššiu hypotéku môže žiadateľ dostať. Banky sú
                                        schopné&nbsp; poskytnúť úver maximálne do výšky hodnoty zabezpečenej nehnuteľnosti, teda 100% LTV.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv7()">
                            <li>Čo potrebujete ku získaniu hypotéky?</li>
                            <div class="sp_item_cnt" id="sipka7">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Pri účelových hypotékach potrebujete nasledovné doklady:
                                    </p>
                                    <ol class="hypo-list">
                                        <li>
                                            doklady totožnosti (občiansky preukaz, banky však môžu požadovať aj druhý doklad)
                                        </li>
                                        <li>
                                            doklady preukazujúce výšku príjmu (potvrdenie o výške príjmu zo závislej činnosti od zamestnávateľa
                                            alebo daňové priznanie v prípade SZČO
                                        </li>
                                        <li>
                                            znalecký posudok. doklady preukazujúce účel čerpania hypotéky (kúpna zmluva, zmluva o výstavbe
                                            atd.).
                                        </li>
                                    </ol>
                                    <p>
                                        Pri bezúčelových hypotékach sú potrebné rovnaké doklady ako pri účelových, avšak nepotrebujete doklady
                                        preukazujúce účel čerpania. Banky poskytujú aj hypotéky bez dokladovania príjmu. Pri týchto hypotékach
                                        nie sú potrebné doklady preukazujúce výšku príjmu.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv8()">
                            <li>Aké náklady sú spojené s hypotékou?</li>
                            <div class="sp_item_cnt" id="sipka8">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Pri hypotékach by ste nemali zabúdať na poplatky spojené s&nbsp;ich vybavením:
                                    </p>
                                    <ol class="hypo-list">
                                        <li>
                                            poplatok za spracovanie úveru, znalecký posudok na nehnuteľnosť, poplatky na katastri
                                        </li>
                                        <li>
                                            Náklady na uzatvorenie produktov súvisiacich s hypotékou (poistenie domácnosti, životné poistenie,
                                            vedenie bežného účtu v banke …)
                                        </li>
                                    </ol>
                                </blockquote>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 mt-sm-30">
                <div class="">
                    <ul class="unordered-list">
                        <div class="sp_item closed" onclick="showDiv9()">
                            <li>Aká je dĺžka splácania hypotéky?</li>
                            <div class="sp_item_cnt" id="sipka9">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Doba splácania hypotéky závisí od:
                                    </p>
                                    <ol class="hypo-list">
                                        <li>
                                            druhu úveru – úver účelový (4-30 rokov), alebo bezúčelový (môže byť aj inak, ako pri účelovom)
                                        </li>
                                        <li>
                                            výšky poskytnutej hypotéky
                                        </li>
                                        <li>
                                            úrokovej sadzby
                                        </li>
                                        <li>
                                            schopnosti klienta splácať
                                        </li>
                                    </ol>
                                    <p>
                                        Dobu splácania je možné na základe dohody s bankou meniť. Treba však dať pozor na poplatky s tým
                                        súvisiace.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv10()">
                            <li>Hypotekrny certifikát</li>
                            <div class="sp_item_cnt" id="sipka10">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Hypotekárnym certifikátom Vám banka postkytne takzvaný úverový prísľub, to znamená
                                        potvrdenie poskytnutia úveru po splnení určitých podmienok.&nbsp;Každý hypotekárny certifikát má svoju
                                        platnosť, väčšinou sú to 3 mesiace.
                                    </p>
                                    <p>
                                        Výhodouhypotekárneho certifikátu je, že klient nemusí mať vybratú nehnuteľnosť v momente,
                                        keď o jeho vystavenie požiada. Hypotekárny certifikát navyše nie je pre klienta záväzný a banka si voči
                                        klientovi nemôže uplatniť žiadny poplatok v prípade ak klient vystavený certifikát nevyužije na financovanie
                                        nehnuteľnosti.
                                    </p>
                                    <p>
                                        Nevýhodou hypotekárneho certifikátu je, že pre banku nemá záväzný charakter. Konečná
                                        úroková sadzba sa môže líšiť, ovplyňuje ju najmä aktuálna výška úrokových sadzieb, či hodnota a lokalita
                                        nehnuteľnosti, ktorú si klient vybral.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv11()">
                            <li>Ako funguje refinancovanie hypoték?</li>
                            <div class="sp_item_cnt" id="sipka11">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                    <ol class="hypo-list">
                                        <li>
                                            dva mesiace pred koncom výročia fixácie oznámi pôvodná banka výšku úrokovej sadzby na nasledujúce
                                            obdobie
                                        </li>
                                        <li>
                                            nasleduje prieskum, či na trhu hypotekárnych úverov existujú lepšie podmienky
                                        </li>
                                        <li>
                                            príprava na refinancovanie hypotéky, vyplatenie a&nbsp;ukončenie pôvodnej hypotéky
                                        </li>
                                    </ol>
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv12()">
                            <li>Kedy je správny čas na refinancovanie hypotéky?</li>
                            <div class="sp_item_cnt" id="sipka12">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Určite by ste mali o tom začať premýšľať najmenej 4-6 mesiacov pred vypršaním fixácie, aby ste si tak
                                        zabezpečili lepšiu vyjednávaciu pozíciu s vašou bankou, resp. konkurenčnými bankami.
                                    </p>
                                    <p>
                                        Možnosti refinancovania si nenechávajte na poslednú chvíľu, pretože vzhľadom na priaznivú situáciu
                                        úrokových sadzieb na trhu, dokážete aj počas fixácie prefinancovať váš úver skôr a ušetriť tak nemalé
                                        finančné prostriedky.
                                    </p>
                                    <p>
                                        Neváhajte nás kontaktovať, vieme Vám bezplatne poradiť, poprípade spraviť bezplatný audit Vašej hypotéky
                                        a odporučíme Vám kroky, ktoré by mohli viesť k zaujímavým úsporám vašich finančných prostriedkov.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv13()">
                            <li>Čo je americká hypotéka?</li>
                            <div class="sp_item_cnt" id="sipka13">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Americká hypotéka predstavuje bankou poskytnutý bezúčelový úver založený nehnuteľnosťou. Maximálna výška hypotekárneho úveru
                                        predstavuje 70% až 90% hodnoty založenej nehnuteľnosti v závislosti od banky a doba splatnosti hypotéky je
                                        nastavená na dobu 20 až 30 rokov.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv14()">
                            <li>Ako preukázať príjem pre získanie hypotéky?</li>
                            <div class="sp_item_cnt" id="sipka14">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                    <ol class="hypo-list">
                                        <li>
                                            <strong>zamestnanec: </strong>potvrdenie o výške príjmu potvrdené zamestnávateľom, výpis z&nbsp;účtu
                                            za 3 celé ukončené mesiace, kde žiadateľ poukazuje svoj príjem (neplatí, ak žiada o hypotéku v&nbsp;domovskej
                                            banke, na ktorej účet mu je vyplácaná mzda)
                                        </li>
                                        <li>
                                            <strong>SZČO: </strong>daňové priznanie, potvrdenie o&nbsp;výške daňovej povinnosti potvrdené
                                            daňovým úradom, výpis z&nbsp;účtu na preukázanie obratov za príslušné obdobie
                                        </li>
                                        <li>
                                            <strong>PO: </strong>výkaz ziskov a&nbsp;strát, súvaha za posledný kalendárny rok, potvrdenie o&nbsp;výške
                                            daňovej povinnosti potvrdené daňovým úradom, výpisy z&nbsp;účtu na preukázanie obratov za príslušné
                                            obdobie
                                        </li>
                                    </ol>
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv15()">
                            <li>Postup pri návrhu na vklad na katastrálnom úrade</li>
                            <div class="sp_item_cnt" id="sipka15">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Po podpise úverových zmlúv má každá banka osobitné podmienky. Súčasťou splnenia
                                        podmienok k čerpaniu každej hypotéky je návšteva klienta na katastri nehnuteľností
                                        so záložnými zmluvami na zakladanú nehnuteľnosť a návrhom na vklad záložného práva
                                        do katastra nehnuteľností, ktoré klient dostane od banky.&nbsp;Následne po zapísaní plomby,
                                        alebo ťarchy na list vlastníctva, banka realizuje čerpanie úveru.
                                    </p>
                                    <p>
                                        Poplatky na katastri nehnuteľností, súvisiace so zápisom plomby, alebo ťarchy na list vlastníctva sú
                                        štandardne 66€ . Kataster realizuje zápis do 30 dní od podania návrhu. Pri zrýchlenom zápise
                                        je poplatok 265,50€, pričom ten je vykonaný do 15 dní od podania návrhu.
                                    </p>
                                    <p>
                                        Pri elektronickom podaní návrhu na vklad do katastra je správny poplatok znížený o&nbsp;polovicu, teda
                                        na 33 €. Pri zrýchlenom konaní na 133 €.Správa katastra potvrdí prijatie návrhu na vklad do
                                        katastra vyznačením dátumu a času jeho podania na pečiatke katastrálneho úradu.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="sp_item closed" onclick="showDiv16()">
                            <li>Je potrebné mať poistenie nehnuteľnosti?</li>
                            <div class="sp_item_cnt" id="sipka16">
                                <blockquote class="hypo-blockquote">
                                    <p>
                                        Poistenie nehnuteľnosti pre potreby úveru nie je podmienené zákonom. Poistenie môže
                                        byť súčasťou podmienok banky pre získanie hypotéky.
                                    </p>
                                    <p>
                                        Aby si banky  poskytujúce hypotéky znížili riziko, vyžadujú od klienta krytie vo forme
                                        finančnej náhrady v prípade živelných udalostí, požiaru či vytopenia. Takýto typ krytia
                                        si zabezpečuje poisťovňa vo forme poistného krytia z poistenia.
                                    </p>
                                    <p>
                                        Pri bytoch sa poisťujú obvodové múry a okná, pri domoch je to aj strecha. Banka nevyžaduje
                                        poistenie pozemkov. Medzi dôležité body pri výbere poistných rizík zakladanej nehnuteľnosti
                                        patrí výška poistnej sumy, ktorá by mala byť minimálne vo výške úveru, optimálne však
                                        vo výške kúpnej ceny alebo hodnoty nehnuteľnosti podľa znaleckého posudku.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
    function showDiv() {
        if( document.getElementById('sipka').style.display === "block") {
            document.getElementById('sipka').style.display = "none";
        } else {
            document.getElementById('sipka').style.display = "block";
        }

    }
</script>

<script type="text/javascript">
    function showDiv2() {
        if( document.getElementById('sipka2').style.display === "block") {
            document.getElementById('sipka2').style.display = "none";
        } else {
            document.getElementById('sipka2').style.display = "block";
        }

    }
</script>

<script type="text/javascript">
    function showDiv3() {
        if( document.getElementById('sipka3').style.display === "block") {
            document.getElementById('sipka3').style.display = "none";
        } else {
            document.getElementById('sipka3').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv4() {
        if( document.getElementById('sipka4').style.display === "block") {
            document.getElementById('sipka4').style.display = "none";
        } else {
            document.getElementById('sipka4').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv5() {
        if( document.getElementById('sipka5').style.display === "block") {
            document.getElementById('sipka5').style.display = "none";
        } else {
            document.getElementById('sipka5').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv6() {
        if( document.getElementById('sipka6').style.display === "block") {
            document.getElementById('sipka6').style.display = "none";
        } else {
            document.getElementById('sipka6').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv7() {
        if( document.getElementById('sipka7').style.display === "block") {
            document.getElementById('sipka7').style.display = "none";
        } else {
            document.getElementById('sipka7').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv8() {
        if( document.getElementById('sipka8').style.display === "block") {
            document.getElementById('sipka8').style.display = "none";
        } else {
            document.getElementById('sipka8').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv9() {
        if( document.getElementById('sipka9').style.display === "block") {
            document.getElementById('sipka9').style.display = "none";
        } else {
            document.getElementById('sipka9').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv10() {
        if( document.getElementById('sipka10').style.display === "block") {
            document.getElementById('sipka10').style.display = "none";
        } else {
            document.getElementById('sipka10').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv11() {
        if( document.getElementById('sipka11').style.display === "block") {
            document.getElementById('sipka11').style.display = "none";
        } else {
            document.getElementById('sipka11').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv12() {
        if( document.getElementById('sipka12').style.display === "block") {
            document.getElementById('sipka12').style.display = "none";
        } else {
            document.getElementById('sipka12').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv13() {
        if( document.getElementById('sipka13').style.display === "block") {
            document.getElementById('sipka13').style.display = "none";
        } else {
            document.getElementById('sipka13').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv14() {
        if( document.getElementById('sipka14').style.display === "block") {
            document.getElementById('sipka14').style.display = "none";
        } else {
            document.getElementById('sipka14').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv15() {
        if( document.getElementById('sipka15').style.display === "block") {
            document.getElementById('sipka15').style.display = "none";
        } else {
            document.getElementById('sipka15').style.display = "block";
        }

    }
</script>
<script type="text/javascript">
    function showDiv16() {
        if( document.getElementById('sipka16').style.display === "block") {
            document.getElementById('sipka16').style.display = "none";
        } else {
            document.getElementById('sipka16').style.display = "block";
        }

    }
</script>
@include('frontend/footer')