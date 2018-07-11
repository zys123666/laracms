

$(document).ready(function() {
    var th = $('.exleft').height();
    var vh0 = $('.exright').height();
    // var vh0css = $('#exnav').children('li:eq(0)').children('.exright').css('display');
    // var vh1 = $('#exnav').children('li:eq(1)').children('.exright').height();
    // var vh1css = $('#exnav').children('li:eq(1)').children('.exright').css('display');
    // var vh2 = $('#exnav').children('li:eq(2)').children('.exright').height();
    // var vh2css = $('#exnav').children('li:eq(2)').children('.exright').css('display');
    // var vh3 = $('#exnav').children('li:eq(3)').children('.exright').height();
    // var vh3css = $('#exnav').children('li:eq(3)').children('.exright').css('display');
    // var vh4 = $('#exnav').children('li:eq(4)').children('.exright').height();
    // var vh4css = $('#exnav').children('li:eq(4)').children('.exright').css('display');
    // var vh5 = $('#exnav').children('li:eq(5)').children('.exright').height();
    // var vh5css = $('#exnav').children('li:eq(5)').children('.exright').css('display');
    // if (vh0css == "block") {
        var len = vh0 - th;
        if (len > 0) {
            $('.exleft').css('marginBottom', len);
        } else {
            $('.exleft').css('marginBottom', '0px');
        }
    // }
    // if (vh1css == "block") {
    //     var len = vh1 - th;
    //     if (len > 0) {
    //         $('.exleft').css('marginBottom', len);
    //     } else {
    //         $('.exleft').css('marginBottom', '0px');
    //     }
    // }
    // if (vh2css == "block") {
    //     var len = vh2 - th;
    //     if (len > 0) {
    //         $('.exleft').css('marginBottom', len);
    //     } else {
    //         $('.exleft').css('marginBottom', '0px');
    //     }
    // }
    // if (vh3css == "block") {
    //     var len = vh3 - th;
    //     if (len > 0) {
    //         $('.exleft').css('marginBottom', len);
    //     } else {
    //         $('.exleft').css('marginBottom', '0px');
    //     }
    // }
    // if (vh4css == "block") {
    //     var len = vh4 - th;
    //     if (len > 0) {
    //         $('.exleft').css('marginBottom', len);
    //     } else {
    //         $('.exleft').css('marginBottom', '0px');
    //     }
    // }
    // if (vh5css == "block") {
    //     var len = vh5 - th;
    //     if (len > 0) {
    //         $('.exleft').css('marginBottom', len);
    //     } else {
    //         $('.exleft').css('marginBottom', '0px');
    //     }
    // }
});



$(document).ready(function(e) {
    slideSwitch("person", "thumb", "prev", "next", 6, 18);
});




function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
        var url = location.search; //获取url中"?"符后的字串
        window.location = "http://4g.lrbyby120.com/" + url;
    } else {
    }
}
browserRedirect();