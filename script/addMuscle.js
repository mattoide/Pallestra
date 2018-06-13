//aggiungi eserciio dropdown con scelta parte corpo quindi vincolato su muscolo

function dio() {

  if ($('#muscolo').val() == "Bicipite") {

    $('#esercizio').empty();
    $('#esercizio').append("<option>Hammer</option>" +
      "<option>Panca scott</option>");

  } else if ($('#muscolo').val() == "Tricipite") {
    $('#esercizio').empty();
    $('#esercizio').append(
      "<option>Tirate cavi</option>" +
      "<option>Tirate allamerda</option>");
  } else {
    $('#esercizio').empty();

  }

}

function add(event) {

  event.preventDefault();
  $("#tablebody").empty();





  $("#tablebody").prepend("<tr>" +
    " <th scope=\"row\"></th>" +
    "<td><select class=selectpicker show-tick id=esercizio>" +

    "</select></td>" +

    "<td><select class=selectpicker title=muscolo id=muscolo data-live-search=true>" +

    "</select></td>" +

    "<td><select class=selectpicker show-tick id=ripetizioni data-live-search=true>" +

    "</select></td>" +

    "<td><select class=selectpicker show-tick id=serie data-live-search=true>" +

    "</select></td>" +

    "<td><select class=selectpicker show-tick id=recupero data-live-search=true>" +

    "</select></td>" +

    "<td><select class=selectpicker show-tick id=peso data-live-search=true>" +

    "</select></td>" +
    "</tr>");

  /*
    $("#tablebody").append("<tr>" +
    " <th scope=\"row\"></th>" +
    "<td><select class=selectpicker show-tick id=dio>"+
    "<option>Hammer</option>" +
     "<option>Panca scott</option>"+
   "</select></td>" +
  
    "<td><select class=selectpicker show-tick>"+
    " <option>Bicipiti</option>" +
     "<option>Tricipiti</option>"+
     "<option>Addominali</option>"+
   "</select></td>" +
  
    "<td><select class=selectpicker show-tick>"+
    " <option>Mustard</option>" +
     "<option>Ketchup</option>"+
     "<option>Relish</option>"+
   "</select></td>" +
  
    "<td><select class=selectpicker show-tick>"+
    " <option>Mustard</option>" +
     "<option>Ketchup</option>"+
     "<option>Relish</option>"+
   "</select></td>" +
  
    "<td><select class=selectpicker show-tick>"+
    " <option>Mustard</option>" +
     "<option>Ketchup</option>"+
     "<option>Relish</option>"+
   "</select></td>" +
   
    "<td><select class=selectpicker show-tick>"+
    " <option>Mustard</option>" +
     "<option>Ketchup</option>"+
     "<option>Relish</option>"+
   "</select></td>" +
    "</tr>");*/


  for (var i = 1; i < 100; i++) {
    $('#ripetizioni').append("<option>" + i + "</option>");
    $('#serie').append("<option>" + i + "</option>");
    $('#recupero').append("<option>" + i + " '" + "</option>");
    $('#peso').append("<option>" + i + " Kg" + "</option>");
  }
  $('#muscolo').append(

    "<option>Seleziona un muscolo</option>" +

    "<optgroup label=Braccia>" +
    "<option>Bicipite</option>" +
    "<option>Tricipite</option>" +
    "</optgroup>"+

    "<optgroup label=Tronco>" +
    "<option>Pettorali</option>" +
    "<option>Addominali</option>" +
    "</optgroup>"+


    "<optgroup label=Gambe>" +
    "<option>Qadricipiti</option>" +
    "<option>Polpacci</option>" +
    "</optgroup>"
  );

  $('#tablebody').change(function () {
    dio();
  });

  /*
    <select class="selectpicker show-tick">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
  */


  /* $.ajax(
       {     
        type:    'post',
        url:     '/Pallestra/script/getMuscles.php',
        data:    '&username=' +$('#nickname').text()+ '&partecorpo=artisuperiori',
        //dataType: 'json',
        success: function(data) 
        {
        // alert(data);

        var obj = $.parseJSON(data);

        $("#tablebody").empty();

        for (var i in obj) {

           var a = +i+1;

           $("#tablebody").append("<tr>" +
                " <th scope=\"row\">"+a+"</th>" +
                "<td>"+obj[i].nome+"</td>" +
                "<td>"+obj[i].muscolo+"</td>" +
                "<td>"+obj[i].ripetizioni+"</td>" +
                "<td>"+obj[i].serie+"</td>" +
                "<td>"+obj[i].recupero+"'"+"</td>" +
                "<td>"+obj[i].peso+"</td>" +
                "</tr>");
    
        }

        }, 
        error: function(xhr, status, error){
            alert(error);

        }   
       });*/
}