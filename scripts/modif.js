$(document).ready(function(){
  
  var nbrArtiste = Object.keys(eventList).length;
  
  
  $('#addArtiste').on('click', function(e){
    e.preventDefault();
    nbrArtiste++;
    var ArtisteContent = '<p id="artiste_' + nbrArtiste + '"> <label id="Artiste_' + nbrArtiste + '">Artiste_' + nbrArtiste + '</label>  <input type="text" name="Artiste_' + nbrArtiste + '" placeholder="Artiste_' + nbrArtiste + '"></p>';
    $('#nextEventLineUp').append(ArtisteContent);
  })

  $('#removeArtiste').on('click', function(e){
    e.preventDefault();
    if(nbrArtiste > 0){
      $('#artiste_'+ nbrArtiste).remove();
      nbrArtiste--;
    }
  });
  
  var nbrEvent = 0;
  $('#addEvent').on('click', function(e){
    e.preventDefault();
    nbrEvent++;
    var EventContent = '<p class="EventModif event_'+ nbrEvent + '"><label id="'+ nbrEvent + '">Event_'+ nbrEvent + '</label><input type="text" name="Event_'+ nbrEvent + '_Nom" placeholder="Event_'+ nbrEvent + '_Nom"><input type="text" name="Event_'+ nbrEvent + '_Lieu" placeholder="Event_'+ nbrEvent + '_Lieu"><input type="text" name="Event_'+ nbrEvent + '_Date" placeholder="Event_'+ nbrEvent + '_Date"><input type="text" name="Event_'+ nbrEvent + '_LineUp" placeholder="Event_'+ nbrEvent + '_LineUp"><input type="text" name="Event_'+ nbrEvent + '_LienFB" placeholder="Event_'+ nbrEvent + '_LienFB"></p>';
    $('#nextEventList').append(EventContent);
  });
  
  $('#removeEvent').on('click', function(e){
    e.preventDefault();
    if(nbrEvent > 0){
      $('.event_'+ nbrEvent).remove();
      nbrEvent--;
    }
  });








});