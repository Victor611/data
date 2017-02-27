// $("#menu").on("click","a", function (event) {
//     event.preventDefault();
//     var id  = $(this).attr('href');
//     console.log();
//     var top = $(id).offset().top;
//     $('body,html').animate({scrollTop: top-100}, 1000);
// });

$(document).ready(function() {
    // var hash = window.location.hash.substr(1);
    // var offset = 0;
    // var hash_tab = window.location.hash.substr(1,4);
     console.log(window.location);
    // console.log('hash_tab'+hash_tab);
    // console.log('Hash'+ hash);
    // if (hash === '' || hash === 'undefined') {
        var hash = $('.nav-tabs').children('li').first().attr('id');
        console.log('Hash:'+hash);
        $("#" + hash).addClass("active");
        var tab = $('#' + hash).children('a').attr('href');
        console.log(tab);
        // $('.tab-pane').children('div').each(function () {
        //     $(this).removeClass('fade');
        //     $(this).removeClass('in');
        //     $(this).removeClass('active');
        // });
        $('' + tab).addClass("fade in active");

        offset = -100;
    // }else if (hash_tab == 'tab') {
    //     var hash = window.location.hash.substr(5);
    //     console.log(hash);
    //     $('.nav-tabs').children('li').each(function () {
    //         $(this).removeClass('active');
    //     });
    //     $('#' + hash).addClass("active");
    //     var tab = $('#' + hash).children('a').attr('href');
    //     $('.tab-pane').children('div').each(function () {
    //         $(this).removeClass('fade');
    //         $(this).removeClass('in');
    //         $(this).removeClass('active');
    //     });
    //     $('' + tab).addClass("fade in active");
    //
    //     offset = ($('#' + hash).offset().top + 100);
    //
    // } else{
    //     offset = ($('#' + hash).offset().top-100);
    // }
    // $('body,html').animate({scrollTop: offset});
    // console.log(hash);
    // console.log("scrollTop = " + offset + "px");
});