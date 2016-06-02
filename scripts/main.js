$(document).ready(function () {

  //HAMBURGER
  $('#headerMobile').hide();
  $('.icon').on('click', function () {
    $('#headerMobile').slideToggle();
  });

  // HAMBURGLERv2

  $(document).ready(function () {
    $(".icon").click(function () {
      $(".mobilenav").fadeToggle(500);
      $(".top-menu").toggleClass("top-animate");
      $(".mid-menu").toggleClass("mid-animate");
      $(".bottom-menu").toggleClass("bottom-animate"); $('#header').toggleClass('backgroundDark');
    });
  });



  //SELECT CUSTOMISÉ SUR LA PAGE CONTACT
  $(".custom-select").each(function () {
    var classes = $(this).attr("class"),
        id = $(this).attr("id"),
        name = $(this).attr("name");
    var template = '<div class="' + classes + '">';
    template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
    template += '<div class="custom-options">';
    $(this).find("option").each(function () {
      template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
    });
    template += '</div></div>';

    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
  });
  $(".custom-option:first-of-type").hover(function () {
    $(this).parents(".custom-options").addClass("option-hover");
  }, function () {
    $(this).parents(".custom-options").removeClass("option-hover");
  });
  $(".custom-select-trigger").on("click", function () {
    $('html').one('click', function () {
      $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
  });
  $(".custom-option").on("click", function () {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
  });


  //CHANGEMENT BG HEADER AU SCROLL 
  $(document).scroll(function () {
    if ($(document).scrollTop() > 450 && !$('.top-menu').hasClass('top-animate')){
      $('#header').addClass('backgroundDark');
    }
    else if ($(document).scrollTop() < 450 && !$('.top-menu').hasClass('top-animate')){
      $('#header').removeClass('backgroundDark');
    }
  });

  /*

  $('#artisteButton').on('mouseenter', function(){
    $('.artisteBackground').removeClass('backgroundActive');
    $('.artistesImg').addClass('ImgActive');
  });

  $('#artisteButton').on('mouseleave', function(){
    $('.artisteBackground').addClass('backgroundActive');
    $('.artistesImg').removeClass('ImgActive');
  });

  $('.artisteContainer').on('click', function(){
    $(this).parent('.col-md-4').addClass('activeArtiste');
  });

  $('.layerBackground, .closeButton').on('click', function(){
    $('.layerActiveArtiste').fadeOut();
    $('.layerBackground').fadeOut();
    enableScroll();
  });

  $('.artisteContainer').on('click', function(){
    $('.layerActiveArtiste').fadeIn();
    $('.layerBackground').fadeIn();
    disableScroll();
  });

  $('.layerActiveArtiste').hide();
  $('.layerBackground').hide();

  var keys = {37: 1, 38: 1, 39: 1, 40: 1};

  function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
      e.preventDefault();
    e.returnValue = false;  
  }

  function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
      preventDefault(e);
      return false;
    }
  }

  function disableScroll() {
    if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
    window.onwheel = preventDefault; // modern standard
    window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
    window.ontouchmove  = preventDefault; // mobile
    document.onkeydown  = preventDefaultForScrollKeys;
  }

  function enableScroll() {
    if (window.removeEventListener)
      window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
  }
*/
  $(".custom-options").on("click", function(){
    if($(".custom-select-trigger").html()==("Birds of Mind")){
      $("select").attr("value", "1");
    }
  })

  $('.NextEventName').html(nextEvent["nom"]);
  $('.NextEventLieu').html(nextEvent["lieu"]);
  $('.NextEventDate').html(nextEvent["date"]);
  for(i = 1; i < 5; i++){
    $('.artiste_' + i).html(lineUp["artiste_"+i]);
  };

  for(i = 1; i <= Object.keys(eventList).length; i++){
    $("#aVenir ul").append('<li><h4>' + eventList["event_"+i]["nom"] + '</h4><p class="lineUp">' + eventList["event_"+i]["smallLineUp"] + '...</p><p class="lieu">' + eventList["event_"+i]["lieu"] + '</p><p class="date">' + eventList["event_"+i]["date"] + '</p><a href="#" title="event Facebook" class="lien">facebook</a></li>');
  };
/*

  $('.artisteMore').hide();

  $('.artisteContainer').on('click', function(){
    $('.artisteMore').slideDown();
    if($(this).hasClass('col1')){
      $('.artisteMore .col-md-4').removeClass('col-md-offset-4');
      $('.artisteMore .col-md-4').removeClass('col-md-offset-8');
      
    }

    if($(this).hasClass('col2')){
      $('.artisteMore .col-md-4').removeClass('col-md-offset-8');
      $('.artisteMore .col-md-4').addClass('col-md-offset-4');
      
    }

    if($(this).hasClass('col3')){
      $('.artisteMore .col-md-4').removeClass('col-md-offset-4');
      $('.artisteMore .col-md-4').addClass('col-md-offset-8');
      
    }
    
    if($('.artisteMore .col-md-4').hasClass('col-md-offset-4')){
      $('.artisteMore .col-md-8').addClass('col-md-offset-2');
      $('.artisteMore .col-md-8').removeClass('col-md-offset-4');
    }
    if($('.artisteMore .col-md-4').hasClass('col-md-offset-8')){
      $('.artisteMore .col-md-8').removeClass('col-md-offset-2');
      $('.artisteMore .col-md-8').removeClass('col-md-offset-4');
    }
    if(!$('.artisteMore .col-md-4').hasClass('col-md-offset-8') && !$('.artisteMore .col-md-4').hasClass('col-md-offset-4')){
      $('.artisteMore .col-md-8').removeClass('col-md-offset-2');
      $('.artisteMore .col-md-8').addClass('col-md-offset-4');
    }
  });*/
  /*
  $('.artisteMore .col-md-8').removeClass('col-md-offset-2');
  $('.artisteMore .col-md-8').addClass('col-md-offset-4');

  $('.artisteMore .col-md-8').removeClass('col-md-offset-4');
  $('.artisteMore .col-md-8').addClass('col-md-offset-2');

  $('.artisteMore .col-md-8').removeClass('col-md-offset-4');
  $('.artisteMore .col-md-8').removeClass('col-md-offset-2');
*/
});