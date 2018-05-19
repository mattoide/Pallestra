<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <!-- FontAwesome CDN -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
    crossorigin="anonymous"></script>

  <!-- Custom css -->
  <link rel="stylesheet" href="../css/dashboardstyle.css">

  <!-- JQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- MAP Higlight -->
  <script type="text/javascript" src="../script/jquery.maphilight.min.js"></script>

  <script type="text/javascript">$(function () {
      $('.img-fluid').maphilight();
    });</script>

  <script type="text/javascript" src="../script/jquery.rwdImageMaps.min.js"></script>

  <script type="text/javascript">

    $(function () {
      $('img[usemap]').rwdImageMaps();

    });

  </script>

  <!--necessary refresh page for resize image map :(( -->
  <script type="text/javascript">

    jQuery(function ($) {
      var windowWidth = $(window).width();
      var windowHeight = $(window).height();

      $(window).resize(function () {
        if (windowWidth != $(window).width() || windowHeight != $(window).height()) {
          location.reload();
          return;
        }
      });
    });

  </script>

  <script type="text/javascript" src="../script/getmuscles.js"></script>

  <!-- Titolo -->
  <title>Pallestra</title>

</head>

<body>

<script>

   var time = "<?php echo time(); ?>";
    var session_time = "<?php echo $_SESSION['session_time']; ?>";
    var logout_time = "<?php echo $_SESSION['logout_time']; ?>";
    var session_stat = "<?php echo $_SESSION['status'] ;?>";
    
    if(time - session_time > logout_time){

    location.href = "../script/logout.php";
    
    }

</script>



<nav class="navbar navbar-expand-lg navbar-dark" style="padding:0%">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="../script/logout.php">
              <span class="fas fa-sign-in-alt"></span> Logout </a>
          </li>

      </ul>
    </div>
  </nav>
  
  <div class="row">

    <div class="col-sm-2" style="text-align: justify">

      <div id="sidebar" class="sidebar">

        <ul style="padding: 0%;">
          <li>
            <p id="name" style="float: left;"> </p>
            <p id="surname"></p>
            <p id="nickname"></p>
          </li>
        </ul>
        <img src="../img/body_front.jpg" usemap="#image-map" class="img-fluid">
      </div>



    </div>

    <div class="col-sm-1">

    </div>

    <div class="col-sm-9" >

      <div class="panel panel-default">
        <div id="panel-heading" class="panel-heading"> <!-- scheda di --> </div>

        <div class="panel-body">
          <p>Scheda valida dal millemila al duemilamille</p>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Esercizio</th>
              <th>Muscolo interessato</th>
              <th>Ripetizioni</th>
              <th>Serie</th>
              <th>Recupero</th>
              <th>Peso</th>
            </tr>
          </thead>
          <tbody id="tablebody">

            <!-- <tr>
              <th scope="row">1</th>
              <td>Hamimer</td>
              <td>Bicipite</td>
              <td>8</td>
              <td>4</td>
              <td>2'</td>
              <td>10kg</td>
            </tr>
          
            <tr>
              <th scope="row">2</th>
              <td>Hammer</td>
              <td>Bicipite</td>
              <td>8</td>
              <td>4</td>
              <td>2'</td>
              <td>10kg</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Hammer</td>
              <td>Bicipite</td>
              <td>8</td>
              <td>4</td>
              <td>2'</td>
              <td>10kg</td>
            </tr>
            -->
          </tbody>
        </table>
      </div>

    </div>

  </div>




  <map name="image-map">
    
    <area id="tronco" target="" alt="Tronco" title="Tronco" href="" coords="143,379,88,352,92,306,78,251,80,189,147,174,209,189,207,253,197,306,199,353"
      shape="poly">
    <area target="" alt="Gambe" title="Gambe" href="" coords="82,387,75,443,82,501,93,563,93,606,108,670,114,714,133,716,139,629,132,580,137,518,143,470,139,416,109,387"
      shape="poly">
    <area target="" alt="Gambe" title="Gambe" href="" coords="153,414,182,385,205,382,214,414,220,448,218,488,215,522,209,552,205,575,195,609,181,635,173,662,153,659,155,628,156,583,168,561,164,522,155,485,151,454"
      shape="poly">
    <area target="" alt="Braccia" title="Braccia" href="" coords="90,160,65,165,53,173,48,183,45,197,45,212,44,227,39,243,37,261,34,275,27,288,24,309,22,336,21,359,19,370,39,368,46,339,57,315,63,291,63,278,69,259,75,242,77,192,92,175"
      shape="poly" onClick="muss()">
    <area target="" alt="Braccia" title="Braccia" href="" coords="217,163,235,168,241,179,246,191,247,202,247,212,249,224,253,238,256,255,261,274,266,283,269,297,269,311,269,322,269,335,267,353,267,368,251,367,248,350,241,325,237,301,234,287,228,266,221,250,217,234,215,216,214,200,208,180"
      shape="poly" onClick="muss(event)">

  </map>

 
  
  <script>

  var name = "<?php echo $_SESSION['name']; ?>";
    var surname = "<?php echo $_SESSION['surname']; ?>";
    var nickname = "<?php echo $_SESSION['nickname']; ?>";

    $(document).ready(function () {
      $('#name').text(name).append("&nbsp;");
      $('#surname').text(surname);
      $('#nickname').text(nickname);
      $('#panel-heading').text("Scheda di " + nickname);
    });


  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>