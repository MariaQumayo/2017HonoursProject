// JavaScript source code

$(document).ready(function () {

    $.wait = function (callback, seconds) {
        return window.setTimeout(callback, seconds * 1000);
    }

    $.wait(function () {


        $("#loading").fadeOut(400, "linear", function () { $("#loading").attr("hidden", true); });
        $("#Sign-In").attr({ hidden: "false", opacity: "0" }).fadeIn(400, "linear");

        //$("#loading").addClass("animated fadeOut");
        // $("#Sign-In").removeClass("hidden");
        //
        //

    }, 5);


    $('select').material_select();

});