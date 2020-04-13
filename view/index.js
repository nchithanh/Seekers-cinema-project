function dangnhap(){
    document.getElementById('login').style.display='block'
    document.getElementById('sign').style.display='none'
    document.getElementById('fullmanhinh').style.display='block'
};
function dangky(){
    document.getElementById('login').style.display='none'
    document.getElementById('sign').style.display='block'
    document.getElementById('fullmanhinh').style.display='block'
};
function huydangnhap(){
    document.getElementById('login').style.display='none'
    document.getElementById('sign').style.display='none'
    document.getElementById('fullmanhinh').style.display='none'
};
function datve(){
    document.getElementById('thanhdatve').style.animationName='thanhdatve'
    document.getElementById('box_form').style.animationName='box_form'
    document.getElementById('fullmanhinh').style.display='block'
    document.getElementById('header').style.display='none'
}function datve_ve(){
    document.getElementById('thanhdatve').style.animationName='thanhdatve_ve'
    document.getElementById('fullmanhinh').style.display='none'
    document.getElementById('header').style.display='block'
};


window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("header").style.animationName = "header";
    }
    else {

    }
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        document.getElementById("banner_bottom").style.animationName = "banner_bottom";
    }
    else {
        document.getElementById("boxlen").style.animationName = "boxlen_ra";
    }
    if (document.body.scrollTop > 750 || document.documentElement.scrollTop > 750) {
        document.getElementById("banner_bottom2").style.animationName = "banner_bottom";
    }
    else {

    }
    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        document.getElementById("listphim").style.animationName = "len";
        document.getElementById("soc").style.animationName = "soc";
    }
    else {
        document.getElementById("soc").style.animationName = "soc1";
    }
    if (document.body.scrollTop > 2400 || document.documentElement.scrollTop > 2400) {
        document.getElementById("boxkhuyenmai").style.animationName = "len1";
    }
    else {
        document.getElementById("boxkhuyenmai").style.animationName = "len1a";
    }


}

$(document).ready(function () {

    $("#phim").change(function () {
        var idphim = $("#phim").val();
        $.post("controller/ajax/ajax.php", { idphim: idphim }, function (data) {
            $("#rap").html(data);
        });
    });
    $("#rap").change(function () {
        var idrap = $("#rap").val();
        $.post("controller/ajax/ajax2.php", { idrap: idrap }, function (data) {
            $("#rap_giatri").html(data);
        });
    });
    $("#rap").change(function () {
        var idrap = $("#rap").val();
        $.post("controller/ajax/ajax1.php", { idrap: idrap }, function (data) {
            $("#suatchieu").html(data);
        });
    });
    $("#btn_muave").click(function () {
        var idrap = $("#rap_giatri").val();
        var idphim = $("#phim").val();
        var idsuatchieu = $("#suatchieu").val();
        var iduser = $("#iduser").val();
        $.post("controller/ajax/ajax4.php", { idrap: idrap,idphim: idphim,idsuatchieu: idsuatchieu,iduser: iduser }, function (data) {
            $("#ajax").html(data);
        });
    });
    $("#caighe").click(function(){
        var idghe = $(this).attr("maghe");
        $.get("controller/ajax/ajax5.php", {idghe:idghe}, function(data){
           $("#ajax").html(data);
        });
    });
    $("#textthanhtoan").click(function () {
        var textphim = $("#textphim").val();
        var textrap = $("#textrap").val();
        var textsuatchieu = $("#textsuatchieu").val();
        var textphongchieu = $("#textphongchieu").val();
        var texttrangthaighe = $("#texttrangthaighe").val();
        var textghe = $("#textghe").val();
        var textgia = $("#textgia").val();
        var textidghe = $("#textidghe").val();
        var textiduser = $("#textiduser").val();
        $.post("controller/ajax/ajax3.php", { textphim: textphim,textrap: textrap,textsuatchieu: textsuatchieu,
        textphongchieu: textphongchieu,texttrangthaighe: texttrangthaighe,textghe: textghe,textgia: textgia,
        textidghe: textidghe,textiduser: textiduser }, function (data) {
            $(".box_chuckhach").html(data);
        });
    });

    
    $(".list").click(function () {
        $(".list").removeClass("maubanner");
        $(this).addClass("maubanner");
    });
    $(".btn").click(function () {
        $(".btn").removeClass("user_mau");
        $(this).addClass("user_mau");
    });
    $(".qltk").click(function () {
        $("#qltk").fadeIn(500);
        $("#lsdv").fadeOut(500);
    });
    $(".lsdt").click(function () {
        $("#qltk").fadeOut(500);
        $("#lsdv").fadeIn(500);
    });
    $("#listbanner1").click(function () {
        $("#banner1").fadeIn(500);
        $("#banner2").fadeOut(500);
        $("#banner3").fadeOut(500);
        $("#banner4").fadeOut(500);
    });
    $("#listbanner2").click(function () {
        $("#banner1").fadeOut(500);
        $("#banner2").fadeIn(500);
        $("#banner3").fadeOut(500);
        $("#banner4").fadeOut(500);
    });
    $("#listbanner3").click(function () {
        $("#banner1").fadeOut(500);
        $("#banner2").fadeOut(500);
        $("#banner3").fadeIn(500);
        $("#banner4").fadeOut(500);
    });
    $("#listbanner4").click(function () {
        $("#banner1").fadeOut(500);
        $("#banner2").fadeOut(500);
        $("#banner3").fadeOut(500);
        $("#banner4").fadeIn(500);
    });

    $(".listtieude").click(function () {
        $(".listtieude").removeClass("mautieude");
        $(this).addClass("mautieude");
    });
    $("#phimdangchieu").click(function () {
        $(".phimdangchieu").fadeIn(500);
        $(".phimsapchieu").fadeOut(500);
    });
    $("#phimsapchieu").click(function () {
        $(".phimdangchieu").fadeOut(500);
        $(".phimsapchieu").fadeIn(500);
    });
    $(".detail_option").click(function () {
        $(".detail_option").removeClass("mautieude");
        $(this).addClass("mautieude");
    });
    $("#muave").click(function () {
        $("#binhluanbox").fadeOut(500);
        $("#datve").fadeIn(500);
    });
    $("#binhluan").click(function () {
        $("#binhluanbox").fadeIn(500);
        $("#datve").fadeOut(500);
    });
    $("#dangky").click(function () {
        $("#formlogin").addClass("animation_dangky");
        $("#formlogin").removeClass("animation_dangnhap");
    });
    $("#dangnhap").click(function () {
        $("#formlogin").removeClass("animation_dangky");
        $("#formlogin").addClass("animation_dangnhap");
    });
});

$(window).on('load', function (event) {
    $('body').removeClass('loading');
    // $('.load').delay(1000).fadeOut('fast');
    $('.loading').delay(500).fadeOut('fast');
});