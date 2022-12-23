$.noConflict();

jQuery('body').on('click', function (e) {
    if (!jQuery('.dropdown.mega-dropdown').is(e.target)
        && jQuery('.dropdown.mega-dropdown').has(e.target).length === 0
        && jQuery('.open').has(e.target).length === 0
    ) {
        jQuery('.dropdown.mega-dropdown').removeClass('open');
        jQuery('#id2').attr('aria-expanded', 'false');
        jQuery('.calu').removeClass('show');
    }
});
"use strict";


jQuery(window).on('load', function(){
    // Animate loader off screen
    jQuery('.se-pre-con').fadeOut("slow");
});

jQuery('#kt_notes_panel_toggle2').on("click", function(e){
    window.location.replace("http://localhost:3000/admin/product-units-list.html");


    // jQuery( document ).on('load' , readyFn );
    // if( window.location.href == 'http://localhost:3000/admin/product-units-list.html'){

    //    jQuery('#kt_notes_panel').addClass('offcanvas-on');
    // }
    // var hash= window.location.href;

    // if(hash === 'http://localhost:3000/admin/product-units-list.html'){
    //    jQuery('#kt_notes_panel').addClass('offcanvas-on');
    // }
//     jQuery(hash).trigger('load');
//     jQuery(hash).on('load', function(event) {
//       jQuery('#kt_notes_panel').addClass('offcanvas-on');
//   });
});

// tabs open with click on another page
window.onload = function(){

    var url = document.location.toString();
    if (url.match('#')) {
        jQuery('.nav-item a[href="#' + url.split('#')[1] + '"]').tab('show');
    }
    //Change hash for page-reload
    jQuery('.nav-item a[href="#' + url.split('#')[1] + '"]').on('shown', function (e) {
        window.location.hash = e.target.hash;
    });
}

jQuery(function() {
    let url = location.href.replace(/\/$/, "");

    const hash = url.split("#");

    jQuery('#pills-tab a[href="#'+hash[1]+'"]').tab("show");
    url = location.href.replace(/\/#/, "#");
    history.replaceState(null, null, url);
    setTimeout(() => {
        jQuery(window).scrollTop(0);
    }, 400);

    jQuery('a[data-toggle="pill"]').on("click", function() {
        let newUrl;
        const hash = jQuery(this).attr("href");
        console.log('check2' ,hash);
        if(hash == "#info-tab") {
            newUrl = url.split("#")[0];
        } else {
            newUrl = url.split("#")[0] + hash;
        }
        newUrl;
        history.replaceState(null, null, newUrl);
    });
});


// 2 tabs click show one tab content

jQuery('.nav-pills li a').on('click',function (e) {
    //get selected href
    var href = jQuery(this).attr('href');

    // show tab for all tabs that match href
    jQuery('.nav-pills li a[href="' + href + '"]').tab('show');
})


jQuery(document).ready(function() {
    // Create two variables with names of months and days of the week in the array
    var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
    var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

    // Create an object newDate()
    var newDate = new Date();
    // Retrieve the current date from the Date object
    newDate.setDate(newDate.getDate());
    // At the output of the day, date, month and year
    jQuery('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

    setInterval( function() {
        // Create an object newDate () and extract the second of the current time
        var seconds = new Date().getSeconds();
        // Add a leading zero to the value of seconds
        jQuery("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
    },1000);

    setInterval( function() {
        // Create an object newDate () and extract the minutes of the current time
        var minutes = new Date().getMinutes();
        // Add a leading zero to the minutes
        jQuery("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);

    setInterval( function() {
        // Create an object newDate () and extract the clock from the current time
        var hours = new Date().getHours();
        // Add a leading zero to the value of hours
        jQuery("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);

});

jQuery('.cta').on('click', function(){

    jQuery(this).removeClass( "active");

    jQuery(this).removeClass( "show");

});


jQuery(document).ready(function() {
    jQuery(".pin-click").click(function(e) {
        var id = jQuery(this).attr('id');
        console.log(id)
        var pin_not =    jQuery(`#${id} .pin-fixnot.dis-block`)
        var pin =    jQuery(`#${id} .pin.dis-block`)
        console.log("hdjhsj", pin_not.length)
        console.log("pin", pin.length)
        if(pin_not.length == 1){
            jQuery(`#${id} .pin-fixnot`).removeClass('dis-block');
            jQuery(`#${id} .pin-fixnot`).addClass('dis-none');
            jQuery(`#${id} .pin`).addClass("dis-block border-bottoms");
            jQuery(`#${id} .pin`).removeClass("dis-none");

        }

        if(pin.length == 1){
            jQuery(`#${id} .pin-fixnot`).addClass('dis-block');
            jQuery(`#${id} .pin-fixnot`).removeClass('dis-none');
            jQuery(`#${id} .pin`).removeClass("dis-block border-bottoms");
            jQuery(`#${id} .pin`).addClass("dis-none ");
        }



    });
});
