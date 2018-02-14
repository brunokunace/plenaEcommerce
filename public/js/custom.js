


function tamanho(){
    alturaSubmarcas = $('.marcas .sub .col').height();
    $(".marcas .sub .col2").css('height', alturaSubmarcas+'px');


    alturaSubsaude = $('.saude .sub .col').height();
    $(".saude .sub .col2").css('height', alturaSubsaude+'px');


    alturaSubcabelos = $('.cabelos .sub .col').height();
    $(".cabelos .sub .col2").css('height', alturaSubcabelos+'px');


    alturaSubrosto = $('.rosto .sub .col').height();
    $(".rosto .sub .col2").css('height', alturaSubrosto+'px');


    alturaSubcorpo = $('.corpo .sub .col').height();
    $(".corpo .sub .col2").css('height', alturaSubcorpo+'px');


    alturaSubmaos = $('.maos .sub .col').height();
    $(".maos .sub .col2").css('height', alturaSubmaos+'px');


    alturaSuborganicos = $('.organicos .sub .col').height();
    $(".organicos .sub .col2").css('height', alturaSuborganicos+'px');


    alturaSubmateriasPrimas = $('.materias-primas .sub .col').height();
    $(".materias-primas .sub .col2").css('height', alturaSubmateriasPrimas+'px');



    alturaSubcasa = $('.casa .sub .col').height();
    $(".casa .sub .col2").css('height', alturaSubcasa+'px');



    alturaSubveganos = $('.veganos .sub .col').height();
    $(".veganos .sub .col2").css('height', alturaSubveganos+'px');



    alturaSubpet = $('.pet .sub .col').height();
    $(".pet .sub .col2").css('height', alturaSubpet+'px');



    alturaSubofertas = $('.ofertas .sub .col').height();
    $(".ofertas .sub .col2").css('height', alturaSubofertas+'px');






};
$(function() {
    $("#owl-cliente").owlCarousel({
      items:7,
        itemsCustom : false,
        itemsTablet: [1099,5],
        itemsMobile: [710,3],/*
        itemsMobile : [390,2],*/

      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination: false,
      paginationSpeed : 400,
      singleItem:false,
      navigationText:   [" "," "],
      autoPlay:false
    });

    $(".owl-vitrine").owlCarousel({
      items:4,
        itemsTablet: [1099,3],
        itemsMobile: [710,1],/*
        itemsMobile : [390,2],*/
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination: false,
      paginationSpeed : 400,
      singleItem:false,
      navigationText:   [" "," "],
      autoPlay:false
    });







    $(document).delegate('article.list-prods .filter-ico.closed', 'click', function() {
        $('.filter.filter-mob').removeClass('closed');
        $('.filter.filter-mob').addClass('opened');
        $(this).addClass('active');
        $(this).removeClass('closed');
    });


    $(document).delegate('article.list-prods .filter-ico.active', 'click', function() {
        $('.filter.filter-mob').removeClass('opened');
        $('.filter.filter-mob').addClass('closed');
        $(this).addClass('closed');
        $(this).removeClass('active');
    });







    $(document).delegate('.search-ico.closed', 'click', function() {
        $('.container-search-mob').removeClass('closed');
        $('.container-search-mob').addClass('opened');
        $(this).addClass('active');
        $(this).removeClass('closed');
    });


    $(document).delegate('.search-ico.active', 'click', function() {
        $('.container-search-mob').removeClass('opened');
        $('.container-search-mob').addClass('closed');
        $(this).addClass('closed');
        $(this).removeClass('active');
    });






    $(document).delegate('.menu-icon.closed', 'click', function() {
        $('.container-menu').removeClass('closed');
        $('.container-menu').addClass('opened');
        $(this).addClass('active');
        $(this).removeClass('closed');


            $('.container-value.fixed').addClass('menu');
    });

    $(document).delegate('.menu-icon.active', 'click', function() {
        $('.container-menu').removeClass('opened');
        $('.container-menu').addClass('closed');
        $(this).addClass('closed');
        $(this).removeClass('active');
            $('.container-value.fixed').removeClass('menu');
    });

    $(document).scroll(function() {
      if ($(document).scrollTop() >= 40) {
            $('header').addClass('fixed');
            $('.margin-top').addClass('scrolled');  

     
      } else {
            $('header').removeClass('fixed');
            $('.margin-top').removeClass('scrolled');


            $('.shop header').addClass('fixed');
            $('.shop .margin-top').addClass('scrolled');   
      }



        var ScrollTop = parseInt($(window).scrollTop());
        var alturaValue = $('#value-area').offset().top;
        var alturaValueFooter = ($('footer').offset().top) - 200;

        if (ScrollTop > alturaValue) {
            $('.container-value').addClass('fixed');
        } else {
            $('.container-value').removeClass('fixed');
        }



        if (ScrollTop > alturaValueFooter) {
            $('.container-value').removeClass('fixed');
        } else {
            $('.container-value').addClass('fixed');
        }
    });

    $(document).delegate('.container-header .user a#login', 'click', function(event) {
        event.preventDefault();
        $('.cover-all').addClass('show');
        $('.cover-all .login').removeClass('visible');
        $('.cover-all .login#t1').addClass('visible');
    });

    $(document).delegate('.cover-all.show .close', 'click', function(event) {
        event.preventDefault();
        $('.cover-all').removeClass('show');
        $('.cover-all .login').removeClass('visible');
        $('.cover-all .formas-pgto').removeClass('visible');
        $('.cover-all .aviseme').removeClass('visible');
        $('.cover-all .frete-cart').removeClass('visible');
        $('.cover-all .frete-info').removeClass('visible');
        $('.cover-all .banner-pop').removeClass('visible');
    });
    $(document).delegate('a#rule', 'click', function(event) {
        event.preventDefault();
        $('.cover-all').addClass('show');
        $('.cover-all .frete-info').addClass('visible');
    });

    $(document).delegate('.cover-all.show a.inside', 'click', function(event) {
        event.preventDefault();
        var tab = $(this).attr('href');
        $('.cover-all .login').removeClass('visible');
        $('.cover-all .login' + tab).addClass('visible');
    });
    $(document).delegate('.cover-all.show .login.t2 .btns-down button', 'click', function(event) {
        event.preventDefault();
        $('.cover-all .login').removeClass('visible');
        $('.cover-all .login#t3').addClass('visible');
    });


    $(document).delegate('button#frete-table', 'click', function(event) {
        event.preventDefault();
        $('.cover-all').addClass('show');
        $('.cover-all .frete-cart').addClass('visible');
    });

    $(document).delegate('a#mais-formas', 'click', function(event) {
        event.preventDefault();
        $('.cover-all').addClass('show');
        $('.cover-all .formas-pgto').addClass('visible');
    });

    $(document).delegate('.container-header .shop', 'click', function(event) {
        event.preventDefault();
        $(this).addClass('active');
    });
    $(document).delegate('.container-header .shop.active', 'click', function(event) {
        event.preventDefault();
        $(this).removeClass('active');
    });



    $(document).delegate('.bg-wrap.unavailable a.button', 'click', function(event) {
        event.preventDefault();
        $('.cover-all').addClass('show');
        $('.cover-all .aviseme').addClass('visible');
    });




    $(document).delegate('.tabs ul.info li a.btn-responsive', 'click', function(event) {
        event.preventDefault();
        var tab = $(this).attr('href');
        $('.tabs ul.info li a.btn-responsive').removeClass('active');
        $(this).addClass('active');
        $('.tabs ul.info li').removeClass('active');
        $('.tabs ul.info li' + tab).addClass('active');



        var divPosition = $('.produto-infos .tabs ul.info li' + tab).offset();
        var scrollPosition = divPosition.top - 130;
        $('html, body').animate({scrollTop: scrollPosition}, 400);
    });
















    $(document).delegate('.produto-infos .tabs ul.buttons li a', 'click', function(event) {
        event.preventDefault();
        var tab = $(this).attr('href');
        $('.produto-infos .tabs ul.buttons li a').removeClass('active');
        $(this).addClass('active');
        $('.produto-infos .tabs ul.info li').removeClass('active');
        $('.produto-infos .tabs ul.info li' + tab).addClass('active');
    });




    $(document).delegate('.cover-all .tabs ul.buttons li a', 'click', function(event) {
        event.preventDefault();
        var tab = $(this).attr('href');
        $('.cover-all .tabs ul.buttons li a').removeClass('active');
        $(this).addClass('active');
        $('.cover-all .tabs ul.info li').removeClass('active');
        $('.cover-all .tabs ul.info li' + tab).addClass('active');
    });


    $(document).delegate('.cart .col-checkout .tabela .body-table form label.select', 'click', function() {
        $('.cart .col-checkout .tabela .body-table form label.select').removeClass('open');
        $(this).addClass('open');
    });

    $(document).delegate('form label.select.outros', 'click', function() {
        $('.form').addClass('open');
    });


    $(document).delegate('form label.select.cc', 'click', function() {
        $('.form').removeClass('open');
    });



    $("#enderecoEntregaLog").change(function() {
        if(this.checked) {
            $(".endereco-entrega-new").addClass('off');
        }else{
            $(".endereco-entrega-new").removeClass('off');
        }
    });

    $(document).delegate('#editAdressCheckoutLog', 'click', function(event) {
        event.preventDefault();
        $('.adressCheckoutLog').addClass('off');
        $('.editAdressLog').removeClass('off');
    });


    $(document).delegate('form.editAdressLog button', 'click', function(event) {
        event.preventDefault();
        $('.adressCheckoutLog').removeClass('off');
        $('.editAdressLog').addClass('off');
        $('html, body').animate({scrollTop: 0}, 200);
    });

    

    tamanho();





    $("form.aval ul.star li.l1").hover(function(){
        $(this).parent('ul').addClass('s1');
    },function(){
        $(this).parent('ul').removeClass('s1');
    });


    $("form.aval ul.star li.l2").hover(function(){
        $(this).parent('ul').addClass('s1');
        $(this).parent('ul').addClass('s2');
    },function(){
        $(this).parent('ul').removeClass('s1');
        $(this).parent('ul').removeClass('s2');
    });



    $("form.aval ul.star li.l3").hover(function(){
        $(this).parent('ul').addClass('s1');
        $(this).parent('ul').addClass('s2');
        $(this).parent('ul').addClass('s3');
    },function(){
        $(this).parent('ul').removeClass('s1');
        $(this).parent('ul').removeClass('s2');
        $(this).parent('ul').removeClass('s3');
    });

    $("form.aval ul.star li.l4").hover(function(){
        $(this).parent('ul').addClass('s1');
        $(this).parent('ul').addClass('s2');
        $(this).parent('ul').addClass('s3');
        $(this).parent('ul').addClass('s4');
    },function(){
        $(this).parent('ul').removeClass('s1');
        $(this).parent('ul').removeClass('s2');
        $(this).parent('ul').removeClass('s3');
        $(this).parent('ul').removeClass('s4');
    });

    $("form.aval ul.star li.l5").hover(function(){
        $(this).parent('ul').addClass('s1');
        $(this).parent('ul').addClass('s2');
        $(this).parent('ul').addClass('s3');
        $(this).parent('ul').addClass('s4');
        $(this).parent('ul').addClass('s5');
    },function(){
        $(this).parent('ul').removeClass('s1');
        $(this).parent('ul').removeClass('s2');
        $(this).parent('ul').removeClass('s3');
        $(this).parent('ul').removeClass('s4');
        $(this).parent('ul').removeClass('s5');
    });



    $(document).delegate('form.aval ul.star li.l1', 'click', function() {
        $(this).parent('ul').addClass('ss1');
        $(this).parent('ul').removeClass('ss2');
        $(this).parent('ul').removeClass('ss3');
        $(this).parent('ul').removeClass('ss4');
        $(this).parent('ul').removeClass('ss5');
    });
    $(document).delegate('form.aval ul.star li.l2', 'click', function() {
        $(this).parent('ul').addClass('ss1');
        $(this).parent('ul').addClass('ss2');
        $(this).parent('ul').removeClass('ss3');
        $(this).parent('ul').removeClass('ss4');
        $(this).parent('ul').removeClass('ss5');
    });
    $(document).delegate('form.aval ul.star li.l3', 'click', function() {
        $(this).parent('ul').addClass('ss1');
        $(this).parent('ul').addClass('ss2');
        $(this).parent('ul').addClass('ss3');
        $(this).parent('ul').removeClass('ss4');
        $(this).parent('ul').removeClass('ss5');
    });
    $(document).delegate('form.aval ul.star li.l4', 'click', function() {
        $(this).parent('ul').addClass('ss1');
        $(this).parent('ul').addClass('ss2');
        $(this).parent('ul').addClass('ss3');
        $(this).parent('ul').addClass('ss4');
        $(this).parent('ul').removeClass('ss5');
    });
    $(document).delegate('form.aval ul.star li.l5', 'click', function() {
        $(this).parent('ul').addClass('ss1');
        $(this).parent('ul').addClass('ss2');
        $(this).parent('ul').addClass('ss3');
        $(this).parent('ul').addClass('ss4');
        $(this).parent('ul').addClass('ss5');
    });



    $(document).delegate('.code button', 'click', function(event) {
        event.preventDefault();
        $(this).parent('form').find('input').select();
    });

});




document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});

function copyToClipboard(elem) {
      // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
          succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}

