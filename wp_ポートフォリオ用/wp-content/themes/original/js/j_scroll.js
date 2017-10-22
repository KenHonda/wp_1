$(window).on('load', function() {
    var url = $(location).attr('href');
    if(url.indexOf("?id=") != -1){
        var id = url.split("?id=");
        var $target = $('#' + id[id.length - 1]);
        var str_1 = "flag_1";
        var str_2 = "flag_2";
        var str_3 = "flag_3";
        var str_4 = "flag_4";
        var str_5 = "flag_5";
        var pos = $target.offset().top - 50;
    if($target.length){
       $("html, body").animate({scrollTop:pos}, 1700);
    }
  }
});
