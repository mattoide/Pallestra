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
    
        
    
    
    
    
    