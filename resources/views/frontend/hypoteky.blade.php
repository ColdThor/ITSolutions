@include('frontend/header')
@include('frontend/chat')
@section('page') Hypoteky @endsection

<br><br><br><br><br><br>
<h3 style="margin-left: 2%">Informácie o hypotékach si môžete prečítať tu:</h3>


<style>
   .sp_item_cnt {
       display: none;
   }

   .sp_item {
       cursor: pointer;
   }

</style>
<br><br><br>
<div class="finviaFaq" style="margin-left: 2% ; color: #0a0a0a">
    <div class="sp_item closed" onclick="showDiv()">

        <h4>Čo je refinancovanie hypotéky <span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka">Prenesenie hypotéky - teda refinancovanie - je krok, vďaka ktorému môžete poriadne
            ušetriť. Vďaka novej hypotéke môžete mať nižší úrok a aj splátky. Usporíte tak stovky až tisíce eur.<br>
            <br>
            Prenesením môžete splatiť akúkoľvek hypotéku alebo úver určený na bývanie. Preniesť hypotéku môžete
            kedykoľvek, najlepšie však pred koncom fixácie úrokovej sadzby. Vtedy za predčasné splatenie neplatíte.<br>
            <br>
            Obráťte sa na našich expertov, ktorí Vám radi pomôžu. Každú ponuku Vám ušijeme na mieru.
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv2()">

        <h4>Čo je konsolidácia úverov<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka2">Splatenie zlých úverov - teda konsolidácia úverov - je splatenie všetkých Vašich
            pôžičiek jednou, konsolidačnou hypotékou.<br>
            Hypotéku založíte nehnuteľnosťou. Vďaka tomu splatíte všetky svoje staré úvery, až do hodnoty vašej
            nehnuteľnosti. Konsolidačná hypotéka má nižší úrok a tak Vám zabezpečí nižšie splátky.<br>
            <br>
            Splatenie zlých úverov funguje tak, že jednou konsolidačnou hypotékou splatíte všetky doterajšie úvery. Radi
            vám pomôžeme a nájdeme vhodnú konsolidačnú hypotéku.<br>
            <br>
            Obráťte sa na našich expertov, ktorý Vám radi pomôžu. Každú ponuku Vám ušijeme na mieru.
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv3()">

        <h4>Čo je hypotéka?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka3">Čo je hypotéka?Hypotéka je úver poskytnutý bankou na financovanie kúpy, výstavby alebo
            rekonštrukciu nehnuteľnosti a jeho splácanie je zaistené záložným právom na nehnuteľnosť. Využitie úveru
            môže byť účelové - priama investícia do nehnuteľnosti, prípadne financovanie do inej nehnuteľnosti, alebo
            neúčelové - tzv. americká hypotéka.<br>
            <br>
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv4()">

        <h4>Kedy osloviť hypošpecialistu<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka4">
            <ul>
                <li>
                    ideálny čas na oslovenie hypošpecialistu je ešte pred vypracovaním znaleckého posudku k
                    nehnuteľnosti, naši hypošpecialisti poznajú aktuálne akcie bánk, čím Vám vedia ušetriť čas a
                    peniaze, napríklad vo forme bezplatného znaleckého posudku od banky alebo odpustenie poplatku za
                    spracovanie úveru
                </li>
                <li>
                    pokiaľ si nie ste istý výberom úverového produktu, naši Hypošpecialisti Vám vysvetlia parametre
                    jednotlivých produktov a ich výhody a nevýhody
                </li>
                <li>
                    nechajte nás vybojovať Vám najlepšiu sadzbu Vašej hypotéky, naši hypošpecialisti za Vás oslovia
                    všetky banky a vybojujú najvýhodnejšiu sadzbu. Šetríme tým Váš čas a peniaze, priemerne Vám len
                    prípravou ponúk ušetríme 14 hodín, ktoré by ste strávili komunikáciou s bankami a porovnávaním
                    ponúk.
                </li>
            </ul>
            Všetky služby hypošpecialistov, sú pre klienta bezplatné. Hypošpecialisti sú platení bankou, s ktorou klient
            uzavrie zmluvu o hypotekárnom úvere.&nbsp;<strong>Výška odmeny hypošpecialistu za sprostredkovaný úver je
                rovnaká vo všekých bankách, to zabezpečuje objektivitu pri porovnávaní ponúk, bez postranného záujmu
                uprednostniť vybranú banku.&nbsp;</strong><br>
            <br>
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv5()">

        <h4>Aké sú jednotlivé kroky pri vybavovaní hypotéky?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka5">Aké sú jednotlivé kroky pri vybavovaní hypotéky?
            <ol>
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
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv6()">

        <h4>Koľko peňazí viem získať z hypotéky?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka6"><p>
                Výška poskytnutých peňazí závisí od nasledovných faktorov:</p>
            <ul style="text-align: center;">
                <li style="text-align: left;">
                    hodnoty zabezpečenej nehnuteľnosti;
                </li>
                <li style="text-align: left;">
                    schopnosti žiadateľa splácať úver: jeho príjmy, plánovaná splátka a&nbsp;splátky aktuálnych úverov
                    &nbsp;(tzv. bonita);
                </li>
                <li style="text-align: left;">
                    pomeru požadovanej výšky úveru a hodnoty nehnuteľnosti (tzv. LTV);
                </li>
                <li style="text-align: left;">
                    druhu hypotéky, a&nbsp;teda či ide o účelovú alebo bezúčelovú hypotéku.
                </li>
            </ul>
            <p>
                Čím vyššia je hodnota zabezpečenej nehnuteľnosti, tým vyššiu hypotéku môže žiadateľ dostať. Banky sú
                schopné&nbsp; poskytnúť úver maximálne do výšky hodnoty zabezpečenej nehnuteľnosti, teda 100% LTV.</p>
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv7()">

        <h4>Aké doklady potrebujem k získaniu hypotéky?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka7"><p>
                Pri účelových hypotékach potrebujete nasledovné doklady:</p>
            <ul style="text-align: center;">
                <li style="text-align: left;">
                    doklady totožnosti (občiansky preukaz, banky však môžu požadovať aj druhý doklad);
                </li>
                <li style="text-align: left;">
                    doklady preukazujúce výšku príjmu (potvrdenie o výške príjmu zo závislej činnosti od zamestnávateľa
                    alebo daňové priznanie v prípade SZČO.
                </li>
                <li style="text-align: left;">
                    znalecký posudok. doklady preukazujúce účel čerpania hypotéky (kúpna zmluva, zmluva o výstavbe,
                    atd.).
                </li>
            </ul>
            <p>
                Pri bezúčelových hypotékach sú potrebné rovnaké doklady ako pri účelových, avšak nepotrebujete doklady
                preukazujúce účel čerpania. Banky poskytujú aj hypotéky bez dokladovania príjmu. Pri týchto hypotékach
                nie sú potrebné doklady preukazujúce výšku príjmu.</p>
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv8()">

        <h4>Aké sú náklady spojené s hypotékou?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka8"><p>
                Pri hypotékach by ste nemali zabúdať na poplatky spojené s&nbsp;ich vybavením:</p>
            <ul style="text-align: center;">
                <li style="text-align: left;">
                    poplatok za spracovanie úveru, znalecký posudok na nehnuteľnosť, poplatky na katastri,
                </li>
                <li style="text-align: left;">
                    Náklady na uzatvorenie produktov súvisiacich s hypotékou (poistenie domácnosti, životné poistenie,
                    vedenie bežného účtu v banke …)
                </li>
            </ul>
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv9()">

        <h4>Aká je dĺžka splácania hypotéky?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka9"><p>
                Doba splácania hypotéky závisí od:</p>
            <ul style="text-align: center;">
                <li style="text-align: left;">
                    druhu úveru – úver účelový (4-30 rokov), alebo bezúčelový (môže byť aj inak, ako pri účelovom)
                </li>
                <li style="text-align: left;">
                    výšky poskytnutej hypotéky;
                </li>
                <li style="text-align: left;">
                    úrokovej sadzby;
                </li>
                <li style="text-align: left;">
                    schopnosti klienta splácať.
                </li>
            </ul>
            <p>
                Dobu splácania je možné na základe dohody s bankou meniť. Treba však dať pozor na poplatky s tým
                súvisiace.</p>
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv10()">

        <h4>Čo je hypotekárny certifikát<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka10">Hypotekárnym certifikátom Vám banka postkytne takzvaný úverový prísľub, to znamená
            potvrdenie poskytnutia úveru po splnení určitých podmienok.&nbsp;Každý hypotekárny certifikát má svoju
            platnosť, väčšinou sú to 3 mesiace.<br>
            <br>
            <strong>Výhodou</strong> hypotekárneho certifikátu je, že klient nemusí mať vybratú nehnuteľnosť v momente,
            keď o jeho vystavenie požiada. Hypotekárny certifikát navyše nie je pre klienta záväzný a banka si voči
            klientovi nemôže uplatniť žiadny poplatok v prípade ak klient vystavený certifikát nevyužije na financovanie
            nehnuteľnosti.<br>
            <br>
            <strong>Nevýhodou</strong> hypotekárneho certifikátu je, že pre banku nemá záväzný charakter. Konečná
            úroková sadzba sa môže líšiť, ovplyňuje ju najmä aktuálna výška úrokových sadzieb, či hodnota a lokalita
            nehnuteľnosti, ktorú si klient vybral.
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv11()">

        <h4>Ako funguje refinancovanie hypoték?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka11">Ako funguje refinancovanie hypoték?
            <ol>
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
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv12()">

        <h4>Kedy je ten správny čas na refinancovanie vašej hypotéky?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka12">Kedy je ten správny čas na refinancovanie vašej hypotéky? Určite by ste mali o tom
            začať premýšľať najmenej 4-6 mesiacov pred vypršaním fixácie, aby ste si tak zabezpečili lepšiu vyjednávaciu
            pozíciu s vašou bankou, resp. konkurenčnými bankami. Možnosti refinancovania si nenechávajte na poslednú
            chvíľu, pretože vzhľadom na priaznivú situáciu úrokových sadzieb na trhu, dokážete aj počas fixácie
            prefinancovať váš úver skôr a ušetriť tak nemalé finančné prostriedky. Neváhajte nás kontaktovať, vieme Vám
            bezplatne poradiť, poprípade spraviť bezplatný audit Vašej hypotéky a odporučíme Vám kroky, ktoré by mohli
            viesť k zaujímavým úsporám vašich finančných prostriedkov.
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv13()">

        <h4>Čo je americká hypotéka?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka13"><br>
            Predstavuje bankou poskytnutý bezúčelový úver založený nehnuteľnosťou. Maximálna výška hypotekárneho úveru
            predstavuje 70% až 90% hodnoty založenej nehnuteľnosti v závislosti od banky a doba splatnosti hypotéky je
            nastavená na dobu 20 až 30 rokov.
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv14()">

        <h4>Ako preukázať príjem pre získanie hypotéky<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka14">Ako preukázať príjem pre získanie hypotéky?
            <ul>
                <li>
                    <strong>zamestnanec: </strong>potvrdenie o&nbsp;výške príjmu potvrdené zamestnávateľom, výpis z&nbsp;účtu
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
            </ul>
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv15()">

        <h4>Ako postupovať s návrhom na vklad na katastrálnom úrade?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka15">Po podpise úverových zmlúv má každá banka osobitné podmienky. Súčasťou splnenia
            podmienok k čerpaniu každej hypotéky je návšteva klienta na katastri nehnuteľností so Záložnými zmluvami na
            zakladanú nehnuteľnosť a&nbsp;Návrhom na vklad záložného práva do katastra nehnuteľností, ktoré klient
            dostane od banky.&nbsp;Následne po zapísaní plomby, alebo ťarchy na list vlastníctva, banka realizuje
            čerpanie úveru.<br>
            <br>

            <div class="p1" >
                Poplatky na katastri nehnuteľností, súvisiace so zápisom plomby, alebo ťarchy na list vlastníctva sú
                štandardne &nbsp;66€ . Kataster realizuje zápis do 30 dní od podania návrhu. Pri zrýchlenom zápise
                je poplatok 265,50€, pričom ten je vykonaný do 15 dní od podania návrhu.&nbsp;</div>
            <p class="p1">
                Pri elektronickom podaní návrhu na vklad do katastra je správny poplatok znížený o&nbsp;polovicu, teda
                na 33 €. Pri zrýchlenom konaní na 133 €.Správa katastra potvrdí prijatie návrhu na vklad do
                katastra vyznačením dátumu a času jeho podania na pečiatke katastrálneho úradu.</p>
        </div>
    </div>
    <div class="sp_item closed" onclick="showDiv16()">

        <h4>Musím mať poistenie nehnuteľnosti?<span class="lnr lnr-arrow-down"></span></h4>

        <div class="sp_item_cnt" id="sipka16">Musím mať poistenie nehnuteľnosti?Poistenie nehnuteľnosti pre potreby úveru nie je
            podmienené zákonom. Poistenie môže byť súčasťou podmienok banky pre získanie hypotéky. Aby si banky
            poskytujúce hypotéky znížili riziko, vyžadujú od klienta krytie vo forme finančnej náhrady v prípade
            živelných udalostí, požiaru či vytopenia. Takýto typ krytia si zabezpečuje poisťovňa vo forme poistného
            krytia z poistenia. Pri bytoch sa poisťujú obvodové múry a okná, pri domoch je to aj strecha. Banka
            nevyžaduje poistenie pozemkov. Medzi dôležité body pri výbere poistných rizík zakladanej nehnuteľnosti patrí
            výška poistnej sumy, ktorá by mala byť minimálne vo výške úveru, optimálne však vo výške kúpnej ceny alebo
            hodnoty nehnuteľnosti podľa znaleckého posudku.
        </div>
    </div>
</div>
<br/><br/>


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


<br /> <br />
@include('frontend/footer')