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

    }


};