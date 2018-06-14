//aggiungi eserciio dropdown con scelta parte corpo quindi vincolato su muscolo

var partecorpo;

function addEsercizio() {

  var muscolo = $('#muscolo').val();
  var esercizio = $('#esercizio').val();
  var serie = $('#serie').val();
  var ripetizioni = $('#ripetizioni').val();
  var recupero = $('#recupero').val();
  var peso = $('#peso').val();

  if ((serie == null) || (muscolo == null) || (esercizio == null) || (ripetizioni == null) || (recupero == null) || (peso == null))
    alert("Devi inserire tutti i campi!")
  else {

     $.ajax(
     {
       type: 'post',
       url: '/Pallestra/script/addExercise.php',
       data: '&muscolo=' + muscolo +'&esercizio=' + esercizio + '&serie=' + serie +'&ripetizioni=' + ripetizioni + '&recupero=' + recupero +'&peso=' + peso + '&partecorpo='+partecorpo,
 
       success: function (data) {
 alert(data)
getAllMuscles();
       },
       error: function (xhr, status, error) {
         alert(error);
         console.log(data)
       }
     });

  }

}
function getEsercizi() {


  if ($('#muscolo').val() != "Seleziona un muscolo"){
    muscolo = $('#muscolo').val();

    $.ajax(
      {
        type: 'post',
        url: '/Pallestra/script/listAvailableMuscles.php',
        data: '&muscolo=' + muscolo,
  
        success: function (data) {
  
          try {
  
            var obj = $.parseJSON(data);
  
          } catch (e) { }
          partecorpo = obj[0].partecorpo;
  
  
          $("#esercizio").empty();
          for (var i in obj) {
  
            $('#esercizio').append("<option>" + obj[i].esercizio + "</option>");
  
  
          }
        },
        error: function (xhr, status, error) {
          alert(error);
          console.log(data)
        }
      });

  }
  else
    $("#esercizio").empty();


  
}

function add(event) {

  event.preventDefault();

  //$("#tablebody").empty();

  $("#tablebody").prepend("<tr>" +
    " <th scope=\"row\"></th>" +
    "<td><select class=custom-select id=esercizio data-live-search=true>" +

    "</select></td>" +

    "<td><select class=custom-select id=muscolo >" +


    "</select></td>" +

    "<td><select class=custom-select id=ripetizioni >" +

    "</select></td>" +

    "<td><select class=custom-select id=serie >" +

    "</select></td>" +

    "<td><select class=custom-select id=recupero >" +

    "</select></td>" +

    "<td><select class=custom-select id=peso >" +

    "</select></td>" +

    "<td><a class ='btn btn-outline-danger' onClick=addEsercizio() >Aggiungi!</a></td>" +


    "</tr>");


  $('#muscolo').append(

    "<option>Seleziona un muscolo</option>" +

    "<optgroup label=Braccia>" +
    "<option>Bicipiti</option>" +
    "<option>Tricipiti</option>" +
    "</optgroup>" +

    "<optgroup label=Tronco>" +
    "<option>Pettorali</option>" +
    "<option>Addominali</option>" +
    "</optgroup>" +


    "<optgroup label=Gambe>" +
    "<option>Qadricipiti</option>" +
    "<option>Polpacci</option>" +
    "</optgroup>"
  );

  for (var i = 0; i <= 100; i++) {
    $('#ripetizioni').append("<option>" + i + "</option>");
    $('#serie').append("<option>" + i + "</option>");
    $('#recupero').append("<option>" + i + " '" + "</option>");
    $('#peso').append("<option>" + i + " Kg" +"</option>");
  }

  $('#muscolo').change(function () {
    getEsercizi();
  });


  /* $("#tablebody").append("<tr>" +
   " <th scope=\"row\"></th>" +
   "<td><select class='custom-select'>"+
   "<option>Mustard</option>"+
  " <option>Ketchup</option>"+
  " <option>Relish</option>"+
 

  "</select></td>" +
   "</tr>");*/


}