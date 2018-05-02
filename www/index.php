<!doctype html>
<html>
<?php include 'head.php'; ?>
<body data-spy="scroll" data-target="#mainNav" data-offset="70">
<div class="wrapper">
    <?php include 'header.php'; ?>
    <main>
        <section class="top_section" id="video">
            <div class="container">
                <div class="text-wrapper text-center">
                    <p class="title">Uklízejte JINAK</p>
                    <p>
                        Prozkoumejte, jak uklízet rychleji a efektivněji
                    </p>
                </div>
                <div class="logo_wrapper">
                    <a href="http://www.my-concept.cz/" target="_blank">
                        <img src="dist/img/concept_logo.png" alt="concept_logo">
                    </a>
                </div>
            </div>
            <div class="home_video">
                <video preload="auto" autoplay="" muted="" loop="" poster="dist/img/main_img.png">
                    <source src="dist/video/video.mov" type="video/mp4">
                </video>
                <div class="img_wrapper">
                    <img src="dist/img/main_img.png" alt="">
                </div>
            </div>
        </section>
        <section id="list" class=" d-xs-none d-sm-none d-md-block">
            <div class="badges bages--side">
                <a class="badge" href="#vacuuming">
                    <div class="img-wrapper">
                        <img src="dist/icons/vysavani.svg" alt="">
                    </div>
                </a>
                <a class="badge" href="#steam">
                    <div class="img-wrapper">
                        <img src="dist/icons/para.svg" alt="">
                    </div>
                </a>
                <a class="badge" href="#wiping">
                    <div class="img-wrapper">
                        <img src="dist/icons/vytirani.svg" alt="">
                    </div>
                </a>
            </div>
            <div class="container">
                <h1 class="text-center">Perfect Clean</h1>
                <p class="subtitle text-center">Lehce… rychle… čistě…</p>
                <div class="img-wrapper text-center">
                    <img src="dist/img/perfect_clean.png" alt="">
                </div>
            </div>
        </section>
        <section class="pb-0 d-xs-none d-sm-none d-md-block" id="usage">
            <h2 class="text-center">S čím Vám můžeme pomoci?</h2>
            <div class="flat_situation">
                <div class="img-wrapper">
                    <img src="dist/img/flat_situation.png" alt="">
                </div>
                <div class="flat-label flat-label--heat" data-target="#heat_modal" data-toggle="modal">Radiátory</div>
                <div class="flat-label flat-label--carpet" data-target="#carpet_modal" data-toggle="modal">Koberce</div>
                <div class="flat-label flat-label--window" data-target="#window_modal" data-toggle="modal">Okna, zrcadla</div>
                <div class="flat-label flat-label--floor" data-target="#floor_modal" data-toggle="modal">Tvrdé podlahy</div>
                <div class="flat-label flat-label--pavement" data-target="#pavement_modal" data-toggle="modal">Dlažba</div>
                <div class="flat-label flat-label--oven" data-target="#oven_modal" data-toggle="modal">Trouba</div>
                <div class="flat-label flat-label--tiling" data-target="#tiling_modal" data-toggle="modal">Obklady</div>
                <div class="flat-label flat-label--sink" data-target="#sink_modal" data-toggle="modal">Dřez, baterie</div>
                <?php include 'flat-modals.html'; ?>
            </div>
        </section>
        <section class="calc" id="calculate">
            <div class="container">
                <h2 class="text-center">
                    Spočítejte si, kolik<br/>
                    času strávíte uklízením
                </h2>
                <div class="calculate">
                    <form id="calculateForm" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Vysávání podlah</label>
                                    <div class="inputs">
                                        <div class="group">
                                            <span>měsíčně</span>
                                            <select name="vacuuming-floor-period" id="" class="selectpicker">
                                                <option selected value="0">0</option>
                                                <?php
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i x</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="group">
                                            <span>minut</span>
                                            <input type="text" name="vacuuming-floor-minutes" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Vysávání koberců</label>
                                    <div class="inputs">
                                        <div class="group">
                                            <span>měsíčně</span>
                                            <select name="vacuuming-carpet-period" id="" class="selectpicker">
                                                <option selected value="0">0</option>
                                                <?php
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i x</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="group">
                                            <span>minut</span>
                                            <input type="text" name="vacuuming-carpet-minutes" class="form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Vysávání drobků</label>
                                    <div class="inputs">
                                        <div class="group">
                                            <span>měsíčně</span>
                                            <select name="vacuuming-mess-period" id="" class="selectpicker">
                                                <option selected value="0">0</option>
                                                <?php
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i x</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="group">
                                            <span>minut</span>
                                            <input type="text" name="vacuuming-mess-minutes" class="form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="t-0">Domácí mazlíček</label>
                                    <div class="radio-group">
                                        <div class="radio">
                                            <label class="wrap">
                                                ano
                                                <input type="radio" name="pet" value="1">
                                                <span class="radiomark"></span>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label class="wrap">
                                                ne
                                                <input type="radio" name="pet" value="0" checked>
                                                <span class="radiomark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--div class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </div-->
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Vytírání</label>
                                    <div class="inputs">
                                        <div class="group">
                                            <span>měsíčně</span>
                                            <select name="wiping-period" id="" class="selectpicker">
                                                <option selected value="0">0</option>
                                                <?php
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i x</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="group">
                                            <span>minut</span>
                                            <input type="text" name="wiping-minutes" class="form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Zametání</label>
                                    <div class="inputs">
                                        <div class="group">
                                            <span>měsíčně</span>
                                            <select name="sweep-period" id="" class="selectpicker">
                                                <option selected value="0">0</option>
                                                <?php
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i x</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="group">
                                            <span>minut</span>
                                            <input type="text" name="sweep-minutes" class="form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Umývání spár</label>
                                    <div class="inputs">
                                        <div class="group">
                                            <span>měsíčně</span>
                                            <select name="washing-gap-period" id="" class="selectpicker">
                                                <option selected value="0">0</option>
                                                <?php
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i x</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="group">
                                            <span>minut</span>
                                            <input type="text" name="washing-gap-minutes" class="form-control">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Umývání oken</label>
                                    <div class="inputs">
                                        <div class="group">
                                            <span>ročně</span>
                                            <select name="washing-window-period" id="" class="selectpicker">
                                                <option selected value="0">0</option>
                                                <?php
                                                for ($i = 1; $i <= 31; $i++) {
                                                    echo "<option value='$i'>$i x</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="group">
                                            <span>minut</span>
                                            <input type="text" name="washing-window-minutes" class="form-control">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="finish d-flex flex-row align-items-center">
                            <p class="m-0">Kolik času ušetříte díky Perfect Clean?</p>
                            <input type="submit" class="btn btn-turquoise" value="Vypočítat" id="calculate-btn">
                            <div class="clearfix"></div>
                            <p class="text-center error d-none">Vyplňte prosím nějaké hodnoty pro kalkulaci.</p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="results d-none" id="results">
            <div class="bg-grey">
                <div class="container">
                    <p>Za 20 let prouklízíte <span id="days"></span>dní <span id="hours"></span>hod. <span id="minutes"></span>min.</p>
                </div>
            </div>
            <div class="bg-turquoise">
                <div class="container">
                    <h2 class="text-center" id="resultsTitle">

                    </h2>
                    <p class="text-center" id="resultsText">
                    </p>
                    <!-- h2 class="text-center">
                        Odpočiňte si!
                    </h2-->
                    <div class="products">
                        <!-- PÁRA -->
                        <a class="product-box anchor hidden" id="cp3000_link" href="#cp3000" data-toggle="collapse" data-target="#steam_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/cp3000_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>cp3000</p>
                            </div>
                        </a>
                        <a class="product-box anchor hidden" id="cp2000_link" href="#cp2000" data-toggle="collapse" data-target="#steam_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/cp2000_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>cp2000</p>
                            </div>
                        </a>
                        <a class="product-box anchor hidden" id="cp1010_link" href="#cp1010" data-toggle="collapse" data-target="#steam_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/cp1010_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>cp1010</p>
                            </div>
                        </a>

                        <!-- RYCHLOST -->
                        <a class="product-box anchor hidden" id="vp4115_link" href="#vp4200" data-toggle="collapse" data-target="#speed_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/vp4115_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>vp4200</p>
                            </div>
                        </a>
                        <a class="product-box anchor hidden" id="vp4115_link" href="#vp4115" data-toggle="collapse" data-target="#speed_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/vp4115_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>vp4115</p>
                            </div>
                        </a>
                        <a class="product-box anchor hidden" id="cw1000_link" href="#cw1000" data-toggle="collapse" data-target="#speed_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/cw1000_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>cw1000</p>
                            </div>
                        </a>
                        <!--CARPET -->
                        <a class="product-box anchor hidden" id="vp8251_link" href="#vp8251" data-toggle="collapse" data-target="#carpet_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/vp8251_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>vp8251</p>
                            </div>
                        </a>
                        <a class="product-box anchor hidden" id="vp5220_link" href="#vp5220" data-toggle="collapse" data-target="#carpet_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/vp5220_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>vp5220</p>
                            </div>
                        </a>
                        <a class="product-box anchor hidden" id="vp8336_link" href="#vp8336" data-toggle="collapse" data-target="#carpet_collapse">
                            <div class="img-wrapper">
                                <img src="dist/img/products/vp8336_small.png" alt="">
                            </div>
                            <div class="product-name">
                                <p>vp8336</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-0 grey-bg-gradient-vertical" id="steam">
            <div class="steam " data-toggle="collapse" data-target="#steam_collapse" aria-expanded="false" aria-controls="steam_collapse">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h2>Kouzlo páry</h2>
                            <p class="mb-40">
                                Ušetřete peníze za čisticí prostředky, které mohou ohrozit Vaše zdraví, a&nbspvyužijte téměř nadpřirozených účinků páry. Teplota nad 80&nbsp°C spolehlivě zahubí 99&nbsp% všech domácích bakterií, roztočů, virů a&nbspdalších alergenů. V tomto měřítku je stostupňová pára nepřekonatelným vítězem.
                            </p>

                            <ul>
                                <li>Šetrná k životnímu prostředí</li>
                                <li>Široké využití</li>
                                <li><strong>Zahubí všechny alergeny</strong></li>
                                <li>Finančně nenáročná</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-0">
            <div class="steam_collapse collapse" id="steam_collapse">
                <section id="cp3000">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vysavani.svg" alt="">
                            </div>
                        </div>
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/para.svg" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h3>CP3000</h3>
                                <p class="mb-30">
                                    Parní mop a vysavač
                                </p>

                                <p class="mb-30">
                                    Špička v úklidu tvrdých podlah. Vysává a&nbspstírá horkou párou v&nbspjednom tahu. Jednoduše vezmete výrobek, který nejdřív vysaje a&nbspihned vytře. Díky horké páře, která je ale šetrná a&nbspekologická, zneškodníte až 99,95&nbsp% bakterií, roztočů a dalších mikroorganismů. Pokud chcete kvalitní a&nbsprychlý úklid, je to výrobek přímo pro vás.

                                </p>

                                <ul class="mb-30">
                                    <li>3 v 1 – vysává, stírá, vysává a stírá zároveň</li>
                                    <li>Hlučnost: 80 dB</li>
                                    <li>Kapacita nádoby na vodu: 730 ml</li>
                                    <li>Kapacita nádoby na prach: 1 000 ml</li>
                                    <li>Doba nahřátí: 30 s</li>
                                    <li>Doba provozu s párou: 30 min.</li>
                                    <li>Kontrolka nahřátí</li>
                                    <li>Praktický držák na kabel</li>
                                    <li>Barva: bílá + tyrkysová</li>
                                    <li>Příkon: 1 600 W</li>
                                </ul>
                                <p class="price">
                                    Cena: 4 999 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/cp3000-vysavac-a-parni-cistic-perfect-clean-3-v-1_d132832.html" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=UiXCmuYfjpk" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/cp3000-vysavac-a-parni-cistic-perfect-clean-3-v-1_d132832.html" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="img-wrapper">
                                    <img src="dist/img/cp3000.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="cp2000">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/para.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h3>CP2000</h3>
                                <p class="mb-30">
                                    Parní mop 2 v 1
                                </p>
                                <p class="mb-30">
                                    Parní mop na podlahy i do ruky. Má vyjímatelnou ruční jednotku se speciálními koncovkami na každý typ povrchu. Dokáže setřít tvrdé podlahy, ale vyčistí i zrcadla, kachličky, spáry, troubu, desku, radiátory a nespočet dalších míst s odolnou špínou. Jeho největší předností je variabilita.
                                </p>

                                <ul class="mb-30">
                                    <li>Kapacita nádoby na vodu: 400 ml</li>
                                    <li>Kapacita nádoby na saponát: 150 ml</li>
                                    <li>Doba nahřátí: 30 s</li>
                                    <li>Doba provozu s párou: 20 min.</li>
                                    <li>Kontrolka nahřátí</li>
                                    <li>Barva: bílá + tyrkysová</li>
                                    <li>Příkon: 1 500 W</li>
                                    <li>Délka přívodního kabelu: 5 m</li>
                                    <li>Příslušenství: hadice, parní rozptylovač,
                                        úhlový nástavec, koncentrovací tryska,
                                        čistící textilie, detailové kartáče, stěrka
                                    </li>
                                </ul>
                                <p class="price">
                                    Cena: 2 499 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/cp2000-parni-mop-2v1-perfect-clean_d132831.html" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=r-4NqCDPhZY" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/cp2000-parni-mop-2v1-perfect-clean_d132831.html" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="img-wrapper">
                                    <img src="dist/img/cp2000.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="cp1010">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/para.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <h3>CP1010</h3>
                                <p class="mb-30">
                                    Parní čistič Perfect Clean
                                </p>
                                <p class="mb-30">
                                    Ideální řešení pro odstraňování usazených mastnot, nečistot, špíny a&nbspvodního kamene. Díky horké páře vyčistíte zrcadla, kachličky, spáry, troubu, desku, radiátory a nespočet dalších míst, které odolávají běžným přípravkům. Pára je navíc ekologická a&nbspodstraní až 99,95&nbsp% bakterií a&nbspškůdců.
                                </p>

                                <ul class="mb-30">
                                    <li>Příkon: 1 000–1 200 W</li>
                                    <li>Napětí: 220–240 V</li>
                                    <li>Tlak: 3 bary</li>
                                    <li>Objem nádoby: max. 400 ml</li>
                                    <li>Doba nahřátí: 3–4 min.</li>
                                    <li>Provozní doba při plné nádobě: 9–10 min.</li>
                                    <li>Extra dlouhý přívodní kabel: 5 m</li>
                                    <li>Bezpečnostní ventil</li>
                                    <li>Příslušenství: hadice, stěrka,
                                        parní rozptylovač, úhlový nástavec,
                                        odměrka + nálevka, tryska, kartáč
                                    </li>
                                </ul>
                                <p class="price">
                                    Cena: 1 399 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/cp1010-parni-cistic-perfect-clean_d130296.html" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=cJuZNZINMj0" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/cp1010-parni-cistic-perfect-clean_d130296.html" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="img-wrapper">
                                    <img src="dist/img/cp1010.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <div class="collapse-btn text-center">
            <a data-toggle="collapse" href="#steam_collapse" class="btn btn-turquoise collapsed" aria-expanded="false" aria-controls="steam_collapse" data-toggle-secondary="Skýt produkty">
                <span>Zobrazit produkty</span>
                <i><img src="dist/icons/arrow_down.svg" alt=""></i>
            </a>

        </div>
        <section class="p-0 grey-bg-gradient-vertical" id="wiping">
            <div class="speed" data-toggle="collapse" data-target="#speed_collapse" aria-expanded="false" aria-controls="speed_collapse">
                <div class="badge bg-red">
                    <p>Znáte z TV</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h2>Rychle a efektivně</h2>
                            <p class="mb-40">
                                Zkraťte dobu úklidu na minimum. Jedním pohybem s těmito pomocníky zvládnete hned několik činností najednou. Potřebujete vytřít a&nbspvysát? Nebo chcete dokonale suchá a&nbsplesklá okna? Stačí skutečně jeden pohyb. </p>
                            <ul>
                                <li>Výrazně zkracuje dobu úklidu</li>
                                <li><strong>Vytírání a vysávání v jednom</strong></li>
                                <li>Vždy připraven k akci</li>
                                <li>Perfektní úklid</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-0">
            <div class="speed_collapse collapse" id="speed_collapse">
                <section id="vp4200">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vytirani.svg" alt="">
                            </div>
                        </div>
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vysavani.svg" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h3>VP4200</h3>
                                <p class="mb-30">
                                    Vysavač a mop v jednom
                                </p>
                                <p class="mb-30">
                                    Vynikající přístroj, který jste dlouho hledali. Vysaje a&nbsphned stírá. Jedním tahem. Ušetří tolik času, že si můžete najít nové koníčky. Bonus je ruční vysavač, který využijete na drobky a&nbspmenší špínu. Zkuste to jinak.
                                </p>

                                <ul class="mb-30">
                                    <li>Vysavač, ruční vysavač a mop v 1</li>
                                    <li>Kapacita nádoby na vodu: 150 ml</li>
                                    <li>Kapacita nádoby na prach: 600 ml</li>
                                    <li>Rotační kartáč</li>
                                    <li>Dvojitý omyvatelný filtr</li>
                                    <li>Doba provozu na 1 nabití: 25–30 min.</li>
                                    <li>Doba nabíjení: 2,5 hod.</li>
                                    <li>Baterie: 14,4 V Li-Ion</li>
                                    <li>Barva: bílá + tyrkysová</li>
                                    <li>Příslušenství: 2× textilie pro mop, dlouhá štěrbinová hubice, hubice na čalounění</li>
                                </ul>
                                <p class="price">
                                    Cena: 4 999 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/vp4200-wet-and-dry-bezkabelovy-vysavac-3-v-1-perfect-clean_d133048.html	" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=QZD2ki8bPTQ&t=34s" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/vp4200-wet-and-dry-bezkabelovy-vysavac-3-v-1-perfect-clean_d133048.html	" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="img-wrapper">
                                    <img src="dist/img/vp4200.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="vp4115">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vysavani.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h3>VP4115</h3>
                                <p class="mb-30">
                                    Tyčový akumulátorový vysavač 2 v 1
                                </p>
                                <p class="mb-30">
                                    Tyčový vysavač, který pracuje na principu cyklonu. Rychlý úklid může být i&nbsp;kvalitní díky rotačnímu kartáči, který je vhodný i&nbsp;na koberce. Ruční vysavač pomůže s&nbsp;drobným vysáváním kuchyňské linky, sedaček nebo auta. </p>

                                <ul class="mb-30">
                                    <li>Typ baterie: Li-Ion</li>
                                    <li>Kapacita baterie: 2 000 mAh</li>
                                    <li>Napětí: 18 V DC</li>
                                    <li>Doba provozu: 18–30 min.</li>
                                    <li>Doba nabíjení: cca 3 hodiny</li>
                                    <li>Rotační kartáč</li>
                                    <li>Sklopné držadlo pro pohodlnější uskladnění</li>
                                    <li>Příkon: 120 W</li>
                                    <li>Sací výkon: 3,5 kPa</li>
                                    <li>Hubice na čalounění s kartáčkem (vestavná)</li>
                                </ul>
                                <p class="price">
                                    Cena: 2 999 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/vp4115-tycovy-akumulatorovy-vysavac-2-v-1-perfect-clean_d132840.html" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=cJuZNZINMj0" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/vp4115-tycovy-akumulatorovy-vysavac-2-v-1-perfect-clean_d132840.html" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="img-wrapper">
                                    <img src="dist/img/vp4115.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="cw1000">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vytirani.svg" alt="">
                            </div>
                        </div>
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vysavani.svg" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h3>cw1000</h3>
                                <p class="mb-30">
                                    Okenní vysavač 3 v 1
                                </p>
                                <p class="mb-30">
                                    Okenní vysavač a čistič zefektivní umývání oken, zrcadel a&nbsp;obkladů. Ve třech krocích si usnadníte práci, kterou nikdo nemá rád.
                                </p>

                                <ul class="mb-30">
                                    <li>Napětí: 7,2 V</li>
                                    <li>Efektivní pomocník při mytí oken: namočí, umyje, vyleští</li>
                                    <li>Sací výkon: 1,4 kPa</li>
                                    <li>Baterie: Li-Ion</li>
                                    <li>Doba nabíjení: 4–5 hod.</li>
                                    <li>Doba provozu: 50–60 min.</li>
                                    <li>Kapacita komor: 100 ml/ 100 ml</li>
                                    <li>Příslušenství: nabíječka, hadřík (který lze opakovaně prát)</li>
                                </ul>
                                <p class="price">
                                    Cena: 999 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/cw1000-okenni-vysavac-3-v-1-perfect-clean_d130297.html" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=fDH0YODflW0" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/cw1000-okenni-vysavac-3-v-1-perfect-clean_d130297.html" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="img-wrapper">
                                    <img src="dist/img/cw1000.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <div class="collapse-btn text-center">
            <a data-toggle="collapse" href="#speed_collapse" class="btn btn-turquoise collapsed" aria-expanded="false" aria-controls="speed_collapse" data-toggle-secondary="Skýt produkty">
                <span>Zobrazit produkty</span>
                <i><img src="dist/icons/arrow_down.svg" alt=""></i>
            </a>
        </div>
        <section class="p-0 grey-bg-gradient-vertical" id="vacuuming">
            <div class="carpet" data-toggle="collapse" data-target="#carpet_collapse" aria-expanded="false" aria-controls="carpet_collapse">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h2>Specialisté na koberce</h2>
                            <p class="mb-40">
                                Jste zarputilými zastánci klasického vysávání nebo se nebojíte vyzkoušet nové technologie? Máte rádi, když při neohlášené návštěvě máte vždy pomocníka pro rychlý úklid hned při ruce? Každý si jednoduše vybere…
                            <ul>
                                <li>Účinný rotační kartáč</li>
                                <li><strong>Široké příslušenství </strong></li>
                                <li>Pohodlná údržba</li>
                                <li>Účinná filtrace</li>
                                <li>Pro každého specialista na míru</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-0">
            <div class="carpet_collapse collapse" id="carpet_collapse">
                <section id="vp8251">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vysavani.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <h3>VP8251</h3>
                                <p class="mb-30">
                                    Ultratichý sáčkový vysavač
                                </p>
                                <p class="mb-30">
                                    Vysavač, který neuslyšíte. Vřele ho doporučujeme pro domácnosti s&nbsp;alergiky a&nbsp;malými dětmi. Jeho široké příslušenství a&nbsp;velký výkon dokáže vysát i ty nejzašlapanější drobky či chlupy z koberce.
                                </p>

                                <ul class="mb-30">
                                    <li>Příkon: 700 W</li>
                                    <li>Sací výkon: 16 kPa</li>
                                    <li>7 stupňů filtrace</li>
                                    <li>Omyvatelný HEPA filtr 13</li>
                                    <li>Velká kapacita sáčku: 4 l</li>
                                    <li>Kovové teleskopické trubky</li>
                                    <li>Akční rádius: 11 m</li>
                                    <li>Délka přívodního kabelu: 7 m</li>
                                    <li>Délka teleskopických trubek: 90 cm</li>
                                    <li>Hlučnost: 65 dB</li>
                                    <li>Příslušenství: ECO velký turbokartáč, speciální turbokartáč na zvířecí srst, ECO podlahová hubice, parketová hubice, extra dlouhá štěrbinová hubice CAR, hubice na čalounění, štěrbinová hubice s prachovým kartáčkem, držák na malé příslušenství
                                    </li>

                                </ul>
                                <p class="price">
                                    Cena: 3 499 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/vp8251-silencio-sackovy-ultra-tichy-vysavac-perfect-clean-700-w_d133045.html" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=cJuZNZINMj0" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/vp8251-silencio-sackovy-ultra-tichy-vysavac-perfect-clean-700-w_d133045.html" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="img-wrapper">
                                    <img src="dist/img/vp8251.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="vp5220">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vysavani.svg" alt="">
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <h3>VP5220</h3>
                                <p class="mb-30">
                                    Cyklonový vysavač
                                </p>
                                <p class="mb-30">
                                    Pokud neradi měníte sáčky a nechcete myslet na jejich dokupování, je tu pro vás cyklonový vysavač. Pár rychlými hmaty nádobu vysypete a nemusíte se o nic starat. Lehčí to už být nemůže.
                                </p>
                                <ul class="mb-30">
                                    <li>Příkon: 700 W</li>
                                    <li>Sací výkon: 16 kPa</li>
                                    <li>7 stupňů filtrace</li>
                                    <li>Omyvatelný HEPA filtr 12</li>
                                    <li>Velká kapacita nádoby: 4 l</li>
                                    <li>Kovové teleskopické trubky</li>
                                    <li>Akční rádius: 11 m</li>
                                    <li>Délka přívodního kabelu: 5 m</li>
                                    <li>Délka teleskopických trubek: 90 cm</li>
                                    <li>Hlučnost: 78 dB</li>
                                    <li>Barva: bílá + tyrkysová</li>
                                    <li>Příslušenství: turbokartáč, podlahová hubice, parketová hubice, štěrbinová hubice s prachovým kartáčkem, extra dlouhá štěrbinová hubice CAR
                                    </li>
                                </ul>
                                <p class="price">
                                    Cena: 3 499 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/vp5220-cyklonovy-vysavac-perfect-clean-700-w_d133047.html" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=cJuZNZINMj0" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/vp5220-cyklonovy-vysavac-perfect-clean-700-w_d133047.html" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="img-wrapper">
                                    <img src="dist/img/vp5220.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="vp8336">
                    <div class="badges">
                        <div class="badge">
                            <div class="img-wrapper">
                                <img src="dist/icons/vysavani.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <h3>VP8336</h3>
                                <p class="mb-30">
                                    Sáčkový vysavač
                                </p>
                                <p class="mb-30">
                                    Vysavač, který neuslyšíte. Vřele ho doporučujeme pro domácnosti s alergiky a malými dětmi. Jeho široké příslušenství a velký výkon dokáže vysát i ty nejzašlapanější drobky či chlupy z koberce.
                                </p>
                                <ul class="mb-30">
                                    <li>Příkon: 700 W</li>
                                    <li>Sací výkon: 16,5 kPa</li>
                                    <li>7 stupňů filtrace</li>
                                    <li>Omyvatelný HEPA filtr 13</li>
                                    <li>Velká kapacita sáčku: 4 l</li>
                                    <li>Součástí balení je 1× SMS sáček</li>
                                    <li>Kovové teleskopické trubice</li>
                                    <li>Akční rádius: 11 m</li>
                                    <li>Délka přívodního kabelu: 5 m</li>
                                    <li>Délka teleskopických trubek: 78 cm</li>
                                    <li>Hlučnost: 79 dB</li>
                                    <li>Barva: bílá + tyrkysová</li>
                                    <li>Příslušenství: turbokartáč, podlahová hubice, parketová hubice, štěrbinová hubice s prachovým kartáčkem
                                    </li>

                                </ul>
                                <p class="price">
                                    Cena: 2 399 Kč
                                </p>

                                <div class="actions">
                                    <a href="http://www.my-concept.cz/vp8336-sackovy-vysavac-perfect-clean-700-w_d133046.html" class="btn btn-turquoise no-shadow" target="_blank">Koupit</a>
                                    <a href="https://www.youtube.com/watch?v=cJuZNZINMj0" class="btn btn-transparent" target="_blank"><span class="fas fa-play"></span>Přehrát video</a>
                                    <a href="http://www.my-concept.cz/vp8336-sackovy-vysavac-perfect-clean-700-w_d133046.html" class="btn btn-transparent no-border" target="_blank">Více <span><img src="dist/icons/sipka.svg" alt=""></span></a>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="img-wrapper">
                                    <img src="dist/img/vp8336.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>
        <div class="collapse-btn text-center">
            <a data-toggle="collapse" href="#carpet_collapse" class="btn btn-turquoise collapsed" aria-expanded="false" aria-controls="carpet_collapse" data-toggle-secondary="Skýt produkty">
                <span>Zobrazit produkty</span>
                <i><img src="dist/icons/arrow_down.svg" alt=""></i>
            </a>
        </div>
        <section id="credentials">
            <div class="container">
                <h2 class="text-center">Recenze produktů</h2>
                <div id="credentialCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>CW1000</h4>
                                        <p>Okenní vysavač 3 v 1 Perfect Clean</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>Výborný pomocník pro urychlení a usnadnění mé nejméně oblíbené domácí činnosti. Je lehký a hlavně k mytí oken nespotřebuji celou hromadu papírových utěrek a nebolí mě ruce od nekonečného leštění.<br/>
                                        Koupila jsem jako dárek pro maminku, abych ji usnadnila práci. Zatím používá krátce, ale je plně spokojená. Půjčila jsem si ho na vánoční úklid a super. Výborný také na mytí oken u auta. Chystám si ho také koupit.</p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>VP8336</h4>
                                        <p>Sáčkový vysavač Perfect Clean 700 W</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>S vysavačem jsme zatím spokojeni pro jeho univerzálnost, jelikož máme doma jak koberce, tak tvrdé podlahy. Nejvíc nás však překvapil turbokartáč, který si krásně poradí s chlupy od našeho pejska. Přijde mi trošičku hlučnější, ale vzhledem k jeho výkonu můžu jen doporučit.<br/>
                                        Nejen vzhledem velmi povedený kousek. Krásně se s ním vysává a dokonce i v dětském pokojíčku lehce zvládne vysát věčně zašlapané brambůrky do koberce. </p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>CP3000</h4>
                                        <p>Vysavač a parní čistič Perfect Clean 3 v 1</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>Nejlepší dárek do domácnosti. Dlouho jsem zvažovala nějaký podobný typ vysavače, který by dokázal vysávat a vytírat zároveň, ale díky vyšší pořizovací ceně jsem si ho nekoupila. Nyní jsem ho dostala jako dárek a nemůžu si ho vynachválit. Vědět, kolik času a práce mi ušetří, neváhala bych a koupila si ho už dříve. Čištění pomocí páry je navíc velmi levné, protože se nemusí používat žádné čisticí prostředky. Chystám se ještě dokoupit hubici na koberce, což
                                        také oceňuji, protože to každý výrobce nenabízí.

                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>CP1010</h4>
                                        <p>Parní čistič Perfect Clean</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>Parní čistič si doma poradí s většinou běžných nečistot jen pomocí páry a tím odpadá nakupování nekonečného množství čisticích prostředků. Snadno se s ním pracuje, jediné co mi vadí, je že když dojde voda v zásobníku, musí se čekat, než se nová voda opět nahřeje.

                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>VP4200</h4>
                                        <p>Wet and dry bezkabelový vysavač 3 v 1 Perfect Clean</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>
                                        S vysavačem jsem spokojená, snadno se s ním pracuje a hlavně ušetří spousty času. Pouze při vysávání koberců je výkon vysavače slabší, ale jelikož máme v bytě převážně tvrdé podlahy a koberec pouze pod konferenčním stolkem, tak to je v pohodě. Nedoporučovala bych do domácností, ve kterých koberce převažují.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>VP5220</h4>
                                        <p>Cyklonový vysavač Perfect Clean 700 W</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>
                                        Jako pozitivum u tohoto vysavače hodnotím velkou kapacitu nádoby a široké příslušenství, jako negativum trochu vyšší hlučnost.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="carousel-item">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>VP4115</h4>
                                        <p>Tyčový akumulátorový vysavač 2 v 1 Perfect Clean</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>
                                        Perfektní pomocník pro rychlý úklid. Máme doma dvě malé děti, takže podlaha je stále samý drobek. Neumím si představit, že bych několikrát denně musela vytahovat klasický vysavač. Součástí tohoto modelu je i ruční vysavač, který používám po každém jídle na odstranění drobků a zbytků z dětské židličky a určitě ho využijeme i na úklid auta.<br/>
                                        Už je to druhý tyčový vysavač, který máme, a musím ocenit jeho výdrž. Na jedno nabytí snadno vysaje celý byt. Vychytané je i sklopné držadlo, díky kterému vysavač zabere minimum místa. Zatím jsme spokojení.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>CP2000</h4>
                                        <p>Parní mop 2 v 1 Perfect Clean</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>
                                        Univerzální pomocník pro celou domácnost. Vyzkoušela jsem ho na podlahy, v kuchyni na spotřebiče i v koupelně na kachlíky a spáry a zatím splnil mé očekávání. Má opravdu široké příslušenství. Malinko mi vadí, že za sebou pořád táhnu kabel, ale na druhou stranu je poměrně dlouhý, takže nemusím často střídat zásuvky.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="credential">
                                <div class="credential-head">
                                    <div class="head-about">
                                        <h4>VP8251</h4>
                                        <p>Silencio Sáčkový ultra tichý vysavač Perfect</p>
                                    </div>
                                    <div class="rating">
                                        <ul>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                            <li><img src="dist/icons/star_turquoise.svg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="credential-content">
                                    <p>
                                        Tento vysavač lze opravdu nazvat jako ultra tichý. Můžu v klidu vysávat, když se děti dívají na televizi, aniž by nadávaly nebo dávaly hlasitost na maximum . Navíc má tento vysavač neuvěřitelně bohaté příslušenství a poměrně velký obsah sáčku. Ale za mě zaručeně vyhrává kombinace jeho výkonu a minimální hlučnosti.                                    </p>
                                </div>
                            </div>

                        </div>


                    </div>
                    <a class="carousel-control-prev" href="#credentialCarousel" role="button" data-slide="prev">
                        <span><img src="dist/icons/arrow_left.svg" alt=""></span>
                    </a>
                    <a class="carousel-control-next" href="#credentialCarousel" role="button" data-slide="next">
                        <span><img src="dist/icons/arrow_right.svg" alt=""></span>
                    </a>
                </div>
            </div>
        </section>

    </main>
    <div class="push"></div>
</div>
<?php include 'footer.php'; ?>

</body>
</html>