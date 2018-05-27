function getSuperiori(event){

    event.preventDefault();
    $("#tablebody").empty();


    $.ajax(
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
        });
}

function getInferiori(event){

    event.preventDefault();
    $("#tablebody").empty();


    $.ajax(
        {     
         type:    'post',
         url:     '/Pallestra/script/getMuscles.php',
         data:    '&username=' +$('#nickname').text()+ '&partecorpo=artiinferiori',
         //dataType: 'json',
         success: function(data) 
         {
         // alert(data);

         var obj = $.parseJSON(data);//parse JSON
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
        });
}

function getTronco(event){

    event.preventDefault();
    $("#tablebody").empty();

    $.ajax(
        {     
         type:    'post',
         url:     '/Pallestra/script/getMuscles.php',
         data:    '&username=' +$('#nickname').text()+ '&partecorpo=tronco',
         //dataType: 'json',
         success: function(data) 
         {
        //  alert(data);

         var obj = $.parseJSON(data);//parse JSON
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
        });
}

function muss(event) {
    
    event.preventDefault();

    $("#tablebody").empty();

    for (var i = 0; i < 3; i++) {

       $("#tablebody").append("<tr>" +
            " <th scope=\"row\">2</th>" +
            "<td>Hammer</td>" +
            "<td>Bicipite</td>" +
            "<td>8</td>" +
            "<td>4</td>" +
            "<td>2'</td>" +
            "<td>10kg</td>" +
            "</tr>");

    


   /* $("#tablebody").append("<tr>" +
            
            "<td>Hammerooo</td>" +
            "<td>8x4</td>" +
            "<td>2'</td>" +
            "<td>10kg</td>" +
            "</tr>");*/

    }

    $("#schedaper").text("Scheda per " + "tipomuscolo");



};

function pelv(event) {
    
        event.preventDefault();
    
        $("#tablebody").empty();
    
    
            $("#tablebody").append("<tr>" +
                " <th scope=\"row\">1</th>" +
                "<td>Masturbazione</td>" +
                "<td>Pene/Vagina</td>" +
                "<td>8</td>" +
                "<td>4</td>" +
                "<td>2'</td>" +
                "<td>Mano</td>" +
                "</tr>");

                $("#schedaper").text("Scheda per " + "Pene o Vagina");

    
        };
    
        
    
    
    
    
    