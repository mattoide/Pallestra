//aggiungi eserciio dropdown con scelta parte corpo quindi vincolato su muscolo


function add(event){

    event.preventDefault();
   $("#tablebody").empty();




  $("#tablebody").append("<tr>" +
  " <th scope=\"row\"></th>" +
  "<td><select class=selectpicker show-tick"+
  " <option>Hammer</option>" +
   "<option>Panca scott</option>"+
   +
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
  "</tr>");


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