<?php session_start(); ?>

<!doctype html>
<html lang="it">

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
    
   // alert(time - session_time);

    if(time - session_time > logout_time){

    location.href = "../script/logout.php";
    
    }

</script>



  <nav class="navbar  navbar-dark" style="margin: 5px;">
    <!-- <a class="navbar-brand" href="#">
      
            <span class="fas fa-home"></span> Home </a>-->

  

      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="../script/logout.php">
            <span class="fas fa-sign-in-alt"></span> Logout </a>
            </li>

      </ul>
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
        <img src="../img/body_front.png" usemap="#image-map" class="img-fluid">
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




  <!--<map name="image-map">
    
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

  </map>-->


<map name="image-map">
    <area target="" alt="tronco" title="" href="" coords="80,232,80,248,80,262,79,273,81,289,86,303,90,320,92,333,91,349,89,366,89,375,94,384,102,395,107,403,109,412,176,413,185,400,190,392,196,385,200,378,198,366,197,354,196,340,199,325,204,312,206,298,207,286,207,274,208,263,209,254,208,245,209,238,208,229,203,216,173,207,149,211,118,206,86,217" shape="poly">
    <area onClick="muss(event)" target="" alt="bracciodx" title="" href="" coords="75,196,65,199,56,205,49,213,45,224,44,236,44,247,42,259,42,274,41,284,38,294,36,302,32,309,29,320,26,330,23,342,22,354,23,368,23,379,23,393,23,405,30,405,39,404,44,385,51,364,56,349,61,339,64,326,65,312,67,302,70,292,73,283,76,277,78,262,78,247,77,234,77,216" shape="poly">
    <area target="" alt="bracciosx" title="" href="" coords="213,198,229,203,239,213,247,225,247,238,250,253,250,265,252,279,254,289,256,300,262,305,265,315,268,329,269,346,269,356,268,369,269,381,268,394,268,406,269,417,250,411,249,400,244,384,241,372,238,362,237,354,235,341,235,333,236,325,233,318,230,311,226,302,223,293,221,283,218,274,216,265,215,254,213,244,213,228,211,216" shape="poly">
    <area target="" alt="gambadx" title="" href="" coords="105,427,79,439,77,453,75,471,76,490,79,510,82,529,86,546,90,564,92,581,95,595,97,607,95,619,96,635,97,650,98,665,100,677,104,690,107,701,110,713,111,723,112,735,113,747,136,751,135,736,135,726,135,714,134,702,134,693,136,685,138,676,139,664,138,651,137,638,133,629,133,620,132,610,133,600,135,592,135,585,136,575,137,566,137,553,137,542,138,534,140,521,141,514,142,502,141,487,140,476,141,466,139,457,124,442" shape="poly">
    <area target="" alt="gambasx" title="" href="" coords="186,417,174,429,165,440,156,450,151,458,151,469,151,481,153,496,155,512,159,526,164,541,166,554,168,570,168,581,168,590,165,599,161,608,157,617,155,629,155,639,155,649,155,661,156,669,155,679,154,687,167,697,175,697,177,688,181,678,186,669,190,661,195,653,199,644,201,636,204,625,204,615,206,606,211,592,212,581,213,571,215,560,216,547,217,534,218,523,219,512,220,502,220,488,219,476,219,464,217,454,214,442,212,434" shape="poly">
    <area  onClick="pelv(event)" target="" alt="pelv" title="" href="" coords="139,451,125,439,162,438,151,451" shape="poly">

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