$(document).ready(function(){

  var lines = 5;
  var nbrArtiste = Object.keys(lineUp).length;
  var nbrEvent = Object.keys(eventList).length;
  var new_data = "";

  initialisationt();


  //LIMITER TEXTE DANS DESCRIPTION EVENT
  $('#countMe').keydown(function(e) {
    newLines = $(this).val().split("\n").length;
    if(e.keyCode == 13 && newLines >= lines) {
      return false;
    }
  });

  function initialisationt(){
    for(var i = 1 ; i < nbrArtiste+1 ; i++){
      var ArtisteContent = '<p id="p_artiste_' + i + '"> <label id="Artiste_' + i + '">Artiste_' + i + '</label>  <input type="text" name="Artiste_' + i + '" placeholder="Artiste_' + i + '" id="artiste_' + i + '"></p>';
      $('#nextEventLineUp').append(ArtisteContent);
      $('#artiste_'+i).val(lineUp['artiste_'+i]);
    }

    for (var j = 1; j < nbrEvent+1 ; j++){
      var EventContent = '<p class="EventModif p_event_'+ j + '"><label id="'+ j + '">Event_'+ j + '</label><input type="text" name="Event_'+ j + '_Nom" placeholder="Event_'+ j + '_Nom"><input type="text" name="Event_'+ j + '_Lieu" placeholder="Event_'+ j + '_Lieu"><input type="text" name="Event_'+ j + '_Date" placeholder="Event_'+ j + '_Date"><input type="text" name="Event_'+ j + '_LineUp" placeholder="Event_'+ j + '_LineUp"><input type="text" name="Event_'+ j + '_LienFB" placeholder="Event_'+ j + '_LienFB"></p>';
      $('#nextEventList').append(EventContent);
      $('#nextEventList input[name=Event_'+j+'_Nom]').val(eventList["event_"+ j]["nom"]);
      $('#nextEventList input[name=Event_'+j+'_Lieu]').val(eventList["event_"+ j]["lieu"]);
      $('#nextEventList input[name=Event_'+j+'_Date]').val(eventList["event_"+ j]["date"]);
      $('#nextEventList input[name=Event_'+j+'_LineUp]').val(eventList["event_"+ j]["smallLineUp"]);
      $('#nextEventList input[name=Event_'+j+'_LienFB]').val(eventList["event_"+ j]["lienFB"]);
    }

    $('#modifNextEvent input[name=Nom]').val(nextEvent["nom"]);
    $('#modifNextEvent input[name=Lieu]').val(nextEvent["lieu"]);
    $('#modifNextEvent input[name=Date]').val(nextEvent["date"]);
    $('#modifNextEvent textarea[name=Description]').val(nextEvent["description"]);
    $('#modifNextEvent input[name=LienFB]').val(nextEvent["lienFB"]);

  }


  // AJOUTER o/ ENLEVER DES ARTISTES 
  $('#addArtiste').on('click', function(e){
    e.preventDefault();
    nbrArtiste++;
    var ArtisteContent = '<p id="p_artiste_' + nbrArtiste + '"> <label id="Artiste_' + nbrArtiste + '">Artiste_' + nbrArtiste + '</label>  <input type="text" name="Artiste_' + nbrArtiste + '" placeholder="Artiste_' + nbrArtiste + '" id="artiste_' + nbrArtiste + '"></p>';
    $('#nextEventLineUp').append(ArtisteContent);
    $('#artiste_'+ nbrArtiste).val(lineUp['artiste_'+ nbrArtiste]);
  })

  $('#removeArtiste').on('click', function(e){
    e.preventDefault();
    if(nbrArtiste > 0){
      $('#p_artiste_'+ nbrArtiste).remove();
      nbrArtiste--;
    }
  });


  // AJOUTER o/ ENLEVER DES EVENEMENTS
  $('#addEvent').on('click', function(e){
    e.preventDefault();
    nbrEvent++;
    var EventContent = '<p class="EventModif p_event_'+ nbrEvent + '"><label id="'+ nbrEvent + '">Event_'+ nbrEvent + '</label><input type="text" name="Event_'+ nbrEvent + '_Nom" placeholder="Event_'+ nbrEvent + '_Nom"><input type="text" name="Event_'+ nbrEvent + '_Lieu" placeholder="Event_'+ nbrEvent + '_Lieu"><input type="text" name="Event_'+ nbrEvent + '_Date" placeholder="Event_'+ nbrEvent + '_Date"><input type="text" name="Event_'+ nbrEvent + '_LineUp" placeholder="Event_'+ nbrEvent + '_LineUp"><input type="text" name="Event_'+ nbrEvent + '_LienFB" placeholder="Event_'+ nbrEvent + '_LienFB"></p>';
    $('#nextEventList').append(EventContent);

    $('#nextEventList input[name=Event_'+nbrEvent+'_Nom]').val(eventList["event_"+ nbrEvent]["nom"]);
    $('#nextEventList input[name=Event_'+nbrEvent+'_Lieu]').val(eventList["event_"+ nbrEvent]["lieu"]);
    $('#nextEventList input[name=Event_'+nbrEvent+'_Date]').val(eventList["event_"+ nbrEvent]["date"]);
    $('#nextEventList input[name=Event_'+nbrEvent+'_LineUp]').val(eventList["event_"+ nbrEvent]["smallLineUp"]);
    $('#nextEventList input[name=Event_'+nbrEvent+'_LienFB]').val(eventList["event_"+ nbrEvent]["lienFB"]);

  });

  $('#removeEvent').on('click', function(e){
    e.preventDefault();
    if(nbrEvent > 0){
      $('.p_event_'+ nbrEvent).remove();
      nbrEvent--;
    }
  });


  function create_new_data(){
    new_data = 'var nextEvent = {"nom":"' + $("#modifNextEvent input[name=Nom]").val() + '", "lieu":"' + $("#modifNextEvent input[name=Lieu]").val() + '", "date":"' + $("#modifNextEvent input[name=Date]").val() + '", "description":"' + $("#modifNextEvent textarea[name=Description]").val() + '", "lienFB":"' + $("#modifNextEvent input[name=LienFB]").val() + '",}';

    new_data += 'var lineUp = {';

    for(var i = 1 ; i < nbrArtiste+1 ; i++){
      new_data += '"artiste_'+i +'":"'+ $('#artiste_'+i).val() +'"';
    }

    new_data += ',}';

    new_data += 'var eventList = {';

    for (var j = 1; j < nbrEvent+1 ; j++){
      new_data += '"event_'+ j +'": {'

      new_data += '"nom":"' + $("#nextEventList input[name=Event_"+j+"_Nom]").val() + '",lieu":"' + $("#nextEventList input[name=Event_"+j+"_Lieu]").val() + '",date":"' + $("#nextEventList input[name=Event_"+j+"_Date]").val() + '", "smallLineUp":"' + $("#nextEventList input[name=Event_"+j+"_LineUp]").val() + '", "lienFB":"' + $("#nextEventList input[name=Event_"+j+"_LienFB]").val() + '",';

      new_data+= '},';
    }

    new_data += '}'; 
  }

  $('#submitForm').submit( function(ev) {
    ev.preventDefault();
    create_new_data();
    $('#submitForm input[type=text]').val(new_data);
    $(this).unbind('submit').submit()
  });






});