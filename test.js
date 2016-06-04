$('.More2').hide();
  var currentArtiste = 0;
  var targetArtiste = 0;
  
  $('.artisteContainer').on('click', function(){

    if($(this).hasClass('col1')){
      $('.More2 .col-md-4').removeClass('col-md-offset-4');
      $('.More2 .col-md-4').removeClass('col-md-offset-8');
      targetArtiste = 1;
    }

    else if($(this).hasClass('col2')){
      $('.More2 .col-md-4').removeClass('col-md-offset-8');
      $('.More2 .col-md-4').addClass('col-md-offset-4');
      targetArtiste = 2;
    }

    else if($(this).hasClass('col3')){
      $('.More2 .col-md-4').removeClass('col-md-offset-4');
      $('.More2 .col-md-4').addClass('col-md-offset-8');
      targetArtiste = 3;
    }

    if (currentArtiste == targetArtiste){
      $('.More2').slideUp();
      currentArtiste = 0;
      targetArtiste = 0;
      console.log($(this).data('target'));
      console.log(currentArtiste);
    }
    else{
      $('.More2').slideDown();
      currentArtiste = targetArtiste;
    }

    setTimeout(function(){
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