$(document).ready(function () {
  
  //HEADER MENU
  $('#headerMobile').hide();
  $('.icon').on('click', function () {
    $('#headerMobile').slideToggle();
  });

  $(".icon").click(function () {
    $(".mobilenav").fadeToggle(500);
    $(".top-menu").toggleClass("top-animate");
    $(".mid-menu").toggleClass("mid-animate");
    $(".bottom-menu").toggleClass("bottom-animate"); $('#header').toggleClass('backgroundDark');
  });

  //CHANGEMENT BG HEADER 
  $(document).scroll(function () {
    if ($(document).scrollTop() > 450 && !$('.top-menu').hasClass('top-animate')){
      $('#header').addClass('backgroundDark');
    }
    else if ($(document).scrollTop() < 450 && !$('.top-menu').hasClass('top-animate')){
      $('#header').removeClass('backgroundDark');
    }
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

  //CHANGER LE DESTINATAIRE DE L'EMAIL
  $(".custom-options").on("click", function(){
    if($(".custom-select-trigger").html()==("Birds of Mind")){
      $("select").attr("value", "1");
    }
  })

  //JSON 
  $('.NextEventName').html(nextEvent["nom"]);
  $('.NextEventLieu').html(nextEvent["lieu"]);
  $('.NextEventDate').html(nextEvent["date"]);
  for(i = 1; i < 5; i++){
    $('.artiste_' + i).html(lineUp["artiste_"+i]);
  };

  for(i = 1; i <= Object.keys(eventList).length; i++){
    $("#aVenir ul").append('<li><h4>' + eventList["event_"+i]["nom"] + '</h4><p class="lineUp">' + eventList["event_"+i]["smallLineUp"] + '...</p><p class="lieu">' + eventList["event_"+i]["lieu"] + '</p><p class="date">' + eventList["event_"+i]["date"] + '</p><a href="#" title="event Facebook" class="lien">facebook</a></li>');
  };


  // POP UP ARTISTE 
  $('.More1').hide();
  $('.More2').hide();
  var currentArtiste = 0;
  var targetArtiste = 0;

  $('.artisteContainer').on('click', function(){

    if($(this).hasClass('col1')){
      $('.More1 .col-md-4').removeClass('col-md-offset-4');
      $('.More1 .col-md-4').removeClass('col-md-offset-8');
      targetArtiste = 1;
    }

    else if($(this).hasClass('col2')){
      $('.More1 .col-md-4').removeClass('col-md-offset-8');
      $('.More1 .col-md-4').addClass('col-md-offset-4');
      targetArtiste = 2;
    }

    else if($(this).hasClass('col3')){
      $('.More1 .col-md-4').removeClass('col-md-offset-4');
      $('.More1 .col-md-4').addClass('col-md-offset-8');
      targetArtiste = 3;
    }

    if($(this).hasClass('col4')){
      $('.More2 .col-md-4').removeClass('col-md-offset-4');
      $('.More2 .col-md-4').removeClass('col-md-offset-8');
      targetArtiste = 4;
    }

    else if($(this).hasClass('col5')){
      $('.More2 .col-md-4').removeClass('col-md-offset-8');
      $('.More2 .col-md-4').addClass('col-md-offset-4');
      targetArtiste = 5;
    }

    else if($(this).hasClass('col6')){
      $('.More2 .col-md-4').removeClass('col-md-offset-4');
      $('.More2 .col-md-4').addClass('col-md-offset-8');
      targetArtiste = 6;
    }

    setTimeout(function(){
      if($('.More1 .col-md-4').hasClass('col-md-offset-4')){
        $('.More1 .col-md-8').addClass('col-md-offset-2');
        $('.More1 .col-md-8').removeClass('col-md-offset-4');
      }
      else if($('.More1 .col-md-4').hasClass('col-md-offset-8')){
        $('.More1 .col-md-8').removeClass('col-md-offset-2');
        $('.More1 .col-md-8').removeClass('col-md-offset-4');
      }
      else if(!$('.More1 .col-md-4').hasClass('col-md-offset-8') && !$('.More1 .col-md-4').hasClass('col-md-offset-4')){
        $('.More1 .col-md-8').removeClass('col-md-offset-2');
        $('.More1 .col-md-8').addClass('col-md-offset-4');
      }
      if($('.More2 .col-md-4').hasClass('col-md-offset-4')){
        $('.More2 .col-md-8').addClass('col-md-offset-2');
        $('.More2 .col-md-8').removeClass('col-md-offset-4');
      }
      else if($('.More2 .col-md-4').hasClass('col-md-offset-8')){
        $('.More2 .col-md-8').removeClass('col-md-offset-2');
        $('.More2 .col-md-8').removeClass('col-md-offset-4');
      }
      else if(!$('.More2 .col-md-4').hasClass('col-md-offset-8') && !$('.More2 .col-md-4').hasClass('col-md-offset-4')){
        $('.More2 .col-md-8').removeClass('col-md-offset-2');
        $('.More2 .col-md-8').addClass('col-md-offset-4');
      }
    }, 200);

    if (currentArtiste == targetArtiste){
      $('.More1').slideUp();
      $('.More2').slideUp();
      currentArtiste = 0;
      console.log('UP');
    }
    else if(targetArtiste > 3){
      $('.More2').slideDown();
      $('.More1').slideUp();
      currentArtiste = targetArtiste;
    }
    else{
      $('.More1').slideDown();
      $('.More2').slideUp();
      currentArtiste = targetArtiste;
    }

    var moreName = $(this).children('.artisteDescribe').children('h3').html();
    var moreImg = $(this).children('.artistesImgContainer').children('img').attr('src');
    var moreDescribe = $(this).children('.artisteDescribe').children('.pDescribe').html();
    console.log(moreDescribe);
    $('.moreName').html(moreName);
    $('.moreImg').attr('src', moreImg);
    $('.moreDescribe').html(moreDescribe);
    

  });

  // ARTISTE HOVER HOME SECTION
  $('.artistesImg .col-md-4').on('mouseenter', function(){
    $(this).addClass('ImgActive');
  });

  $('.artistesImg .col-md-4').on('mouseleave', function(){
    $(this).removeClass('ImgActive');
  });

  $('#artisteButton').on('mouseenter', function(){
    $('.artistesImg .col-md-4').addClass('ImgActive');
  });

  $('#artisteButton').on('mouseleave', function(){
    $('.artistesImg .col-md-4').removeClass('ImgActive');
  });


  // SMOOTH SCROLL
  $('div[data-scroll^="#"]').click(function(){
    var the_id = $(this).data("scroll");
    console.log(the_id);

    $('html, body').animate({
      scrollTop:$(the_id).offset().top-400
    }, 'slow');
    return false;
  });





});





