<?php require "../script/login.php"; ?>

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
  <link rel="stylesheet" href="../css/loginstyle.css">

  <!-- JQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- Titolo -->
  <title>Pallestra</title>

</head>

<body>

 
 <nav class="navbar navbar-expand-lg navbar-dark">
    <!-- <a class="navbar-brand" href="#">
      
            <span class="fas fa-home"></span> Home </a>-->

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="../index.html">
            <span class="fas fa-home"></span> Home </a>
</li>

     <li class="nav-item">
          <a class="nav-link" href="../pages/register.php">
            <span class="fas fa-user"></span> Registrati </a>
</li>

      </ul>
    </div>
  </nav>

    </br>

<div class="container">

        <form class="form-signin" action="../script/login.php" method="POST">
          <h2 class="form-signin-heading">Inserisci i tuoi dati, stupido bufu</h2>
        </br>

          <label  class="sr-only">Username</label>
          <input type="username" name="username" class="form-control" placeholder="Username" required="" autofocus="">
         
        </br>

        <span><p><?php echo $infomsg; ?></p></span>

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required=""> 
        </br>

          <div class="checkbox">
            <label>
              <input name ="rememberme" type="checkbox" value="remember-me"> Ricordami
            </label>
          </div>
        </br>

          <button name="login" value="Login" type="submit" class="btn btn-lg btn-primary btn-block btn-outline-danger">Entra</button>
        </form>
      </div>


      <script>

            var infomess = "<?php echo $infomsg; ?>";

            $(document).ready(function () {
 
            if(infomess != "")
           alert(infomess);

                });

      </script>


       <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>
