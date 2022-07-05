$(function(){
    "use strict";
    $('form').submit(function(){
        $(".btn-form-submit").attr("disabled", true);
        $(".btn-form-submit").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>&nbsp;Loading...");
    });
})