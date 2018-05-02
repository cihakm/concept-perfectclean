//jQuery
import moment from "./lib/moment/moment";

global.$ = global.jQuery = require('jquery');
global.Tether = require('tether');
//global.Popper = require('popper');
//BOOTSTRAP components
/*
require('./lib/bootstrap/alert');
require('./lib/bootstrap/button');
//require('./lib/bootstrap/carousel');
require('./lib/bootstrap/collapse');
require('./lib/bootstrap/dropdown');
require('./lib/bootstrap/modal');
//require('./lib/bootstrap/tooltip');   // require tether -> uncoment it
//require('./lib/bootstrap/scrollspy');
//require('./lib/bootstrap/tab');
require('./lib/bootstrap/util');
//require('./lib/bootstrap/popover');
*/

require('./lib/bootstrap-select/bootstrap-select');
require('./lib/moment/moment');
$(document).ready(function () {
    $('.selectpicker').selectpicker();

    $('.hamburger').click(function () {
        $(this).toggleClass('is-active');
    });

    $('.nav-link, .badge').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 69
        }, 1000);
        return false;
    });
    /*
    $('#calculate-btn').click(function () {
        if ($("#results").hasClass("d-none")) {
            $("#results").removeClass("d-none");
        }
        $('html, body').animate({
            scrollTop: $("#results").offset().top - 70
        }, 1000);
        return false;
    });
    */

    $('.anchor').click(function () {
        var href = $($.attr(this, 'href'));

        if ($(this.getAttribute("data-target")).hasClass("show")) {
            $('html, body').animate({
                scrollTop: $(href).offset().top - 70
            }, 1000);
            return false;
        } else {
            $(this.getAttribute("data-target")).on('shown.bs.collapse', function () {
                $('html, body').animate({
                    scrollTop: $(href).offset().top - 70
                }, 1000);
                return false;
            });
        }
    });


    $('[data-toggle-secondary]').each(function () {
        var $toggle = $(this);
        var originalText = $toggle.html();
        var secondaryText = '<span>' + $toggle.data('toggle-secondary') + '</span>\n' +
            '<i><img src="dist/icons/arrow_up.svg" alt=""></i>';
        var $target = $($toggle.attr('href'));

        $target.on('show.bs.collapse hide.bs.collapse', function () {
            if ($toggle.html() == originalText) {
                $toggle.html(secondaryText);
            } else {
                $toggle.html(originalText);
            }
        });
    });


    $("#calculateForm").submit(function () {

        $.ajax({
            url: "/calculate.php",
            type: "post",
            dataType: "json",
            data: $("#calculateForm").serialize(),
            success: function (r) {
                console.log("RESULT", r)
                if (r.result == true) {
                    $(".error").addClass("d-none");

                    $('.product-box').each(function (index) {
                        $(this).addClass("hidden")
                    });

                    var valuesArray = [
                        {key: "vacuumingFloor", value: r[0].vacuumingFloor, products: ["vp8336", "vp8251", "vp5220", "vp4115", "vp4200", "cp3000"]},
                        {key: "vacuumingCarpet", value: r[0].vacuumingCarpet, products: ["vp8251", "vp5220", "vp8336"]},
                        {key: "vacuumingMess", value: r[0].vacuumingMess, products: ["vp4200", "vp4115"]},
                        {key: "wiping", value: r[0].wiping, products: ["cp3000", "cp2000", "vp4200"]},
                        {key: "sweep", value: r[0].sweep, products: ["cp3000", "vp4200", "vp4115"]},
                        {key: "washingGap", value: r[0].washingGap, products: ["cp2000", "cp1010", "cw1000"]},
                        {key: "washingWindow", value: r[0].washingWindow, products: ["cw1000"]}
                    ];
                    console.log("wdfsgn", valuesArray.sort(function (obj1, obj2) {
                        return obj2.value - obj1.value;
                    }))


                    console.log("vacuumingFloor", r[0].vacuumingFloor); //Vysávání podlah
                    console.log("vacuumingCarpet", r[0].vacuumingCarpet); //Vysávání koberců
                    console.log("vacuumingMess", r[0].vacuumingMess); //vysávání robků
                    console.log("wiping", r[0].wiping); //Vytírání
                    console.log("sweep", r[0].sweep); //Zametání
                    console.log("washingGap", r[0].washingGap); //Umývání spár
                    console.log("washingWindow", r[0].washingWindow); //Umývání oken
                    console.log("pet", r[0].pet); //Domácí mazlíček
                    console.log("CALCULATE RESPONSE", Number(r[0].minutesCount) + " minutes");

                    if (r[0].minutesCount >= 0 && r[0].minutesCount <= 3456) { //0 – 2,4 dne
                        $('#resultsTitle').html('Uklízení není váš šálek čaje')
                        $('#resultsText').html('Vidět vás při úklidu lze jednoduše přirovnat k paní Columbové, hodně se o ní mluví, ale nikdo ji ještě nespatřil. Takže buď jste rozený bordelář, nebo sdílíte společnou domácnost s uklízecím maniakem, který vám nedá žádný prostor pro vaši „šůrovací“ realizaci.')

                    } else if (r[0].minutesCount >= 3600 && r[0].minutesCount <= 7056) { //2,5 - 4,9 dne
                        $('#resultsTitle').html('Nějaký ten drobek vám nevadí')
                        $('#resultsText').html('Zaručeně nepatříte mezi lidi, kteří jsou posedlí úklidem, ale i tak uklízíte v pravidelných intervalech – na Vánoce, Velikonoce, a když se ohlásí tchýně. Nějaký ten drobek vám nevadí a moc dobře víte, že vrstva prachu se časem nezvětšuje.')

                    } else if (r[0].minutesCount >= 7200 && r[0].minutesCount <= 10713.6) { //5 - 7,44 dne
                        $('#resultsTitle').html('Čistě a nad věcí')
                        $('#resultsText').html('Můžete být na sebe patřičně hrdí. Máte rádi pořádek, ale nejste blázen, abyste úklidem strávili půlku života. Uklízíte v pravidelných intervalech a máte v tom dobře zavedený systém, takže vám zbyde spoustu času pro vaši rodinu a záliby.')

                    } else if (r[0].minutesCount >= 10728 && r[0].minutesCount <= 12816) { //7,45 - 8,9 dne
                        $('#resultsTitle').html('Domácí otrok')
                        $('#resultsText').html('Je vidět, že uklízením strávíte poměrně hodně svého času. Patříte mezi klasickou domácnost s malými ratolestmi či domácími mazlíčky, kteří vám pravidelně připravují výborné podmínky pro váš úklid a vy se pak cítíte jak otrok. Nebojte se své caparty do domácích prací zapojit. Nejenže vám tím ušetří čas, ale vy je zároveň dobře připravíte do života.')

                    } else if (r[0].minutesCount >= 12960) { //nad 9 dní za rok
                        $('#resultsTitle').html('Uklízecí maniak')
                        $('#resultsText').html('Pokud nejste profesionální uklízečka nebo uklízeč, měli byste se nad sebou zamyslet. Frekvence vašeho uklízení hraničí s posedlostí a vaše domácnost se změnila v dokonale sterilní prostor[0]. Naleznete-li na zemi smítko, vezmete vysavač a vyluxujete celý dům a to i přes to, že jste zrovna na návštěvě u sousedů.')

                    }

                    var petsProducts = ["vp8251", "vp5220"];
                    var showProducts = []
                    if (r[0].pet == 1) {
                        for (var i = 0; i < petsProducts.length; i++) {
                            showProducts.push(petsProducts[i])
                        }
                        for (var j = 0; j < valuesArray.length; j++) {
                            if (valuesArray[j].value > 0) {
                                var products = valuesArray[j].products
                                for (var k = 0; k < products.length; k++) {
                                    console.log(showProducts.indexOf(products[k]))

                                    if (showProducts.indexOf(products[k]) < 0) {
                                        showProducts.push(products[k])
                                        //   $('#' + products[k] + '_link').removeClass("hidden")
                                    }
                                }
                            }
                        }

                    } else {
                        for (var j = 0; j < valuesArray.length; j++) {
                            if (valuesArray[j].value > 0) {
                                var products = valuesArray[j].products
                                for (var k = 0; k < products.length; k++) {
                                    console.log(showProducts.indexOf(products[k]))

                                    if (showProducts.indexOf(products[k]) < 0) {
                                        showProducts.push(products[k])
                                        //   $('#' + products[k] + '_link').removeClass("hidden")
                                    }
                                }
                            }
                        }
                    }
                    console.log(showProducts)

                    for (var i = 0; i <= 3; i++) {
                        $('#' + showProducts[i] + '_link').removeClass("hidden")
                    }

                    var minutes20Years = r[0].minutesCount * 20;
                    var d = Math.floor(minutes20Years / 1440);
                    var h = Math.floor((minutes20Years - d * 1440) / 60);
                    var m = minutes20Years - (d * 1440) - (h * 60);

                    console.log("CALCULATE RESPONSE", d + "d" + h + "h" + m + "m");

                    var days = d.toString().split("");
                    var hours = h.toString().split("");
                    var minutes = m.toString().split("");

                    for (var i = 0, n = days.length; i < n; i++) {
                        if (i == 0) {
                            $('#days').html('<span>' + days[i] + '</span>')
                        } else {
                            $('#days').append('<span>' + days[i] + '</span>')
                        }
                    }

                    for (var i = 0, n = hours.length; i < n; i++) {
                        if (i == 0) {
                            $('#hours').html('<span>' + hours[i] + '</span>')
                        } else {
                            $('#hours').append('<span>' + hours[i] + '</span>')
                        }
                    }
                    for (var i = 0, n = minutes.length; i < n; i++) {
                        if (i == 0) {
                            $('#minutes').html('<span>' + minutes[i] + '</span>')
                        } else {
                            $('#minutes').append('<span>' + minutes[i] + '</span>')
                        }
                    }


                    if ($("#results").hasClass("d-none")) {
                        $("#results").removeClass("d-none");
                    }
                    $('html, body').animate({
                        scrollTop: $("#results").offset().top - 70
                    }, 1000);


                }

                else if (r.result == false) {
                    $(".error").removeClass("d-none");

                }
            }
        });
        console.log($(this).serialize());
        return false;
    });
});

