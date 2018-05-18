<?php require "../script/register.php"; ?>


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
  <link rel="stylesheet" href="../css/loginstyle.css">

  <!-- JQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <script type="text/javascript" src="../script/getFromDb.js"></script>



  <!-- Titolo -->
  <title>Pallestra</title>

</head>

<body>


    </br>

<div class="container">

        <form class="form-signin" action="../script/register.php" method="POST">
          <h2 class="form-signin-heading">Inserisci i tuoi dati, stupido bufu</h2>
        </br>

          <label  class="sr-only">Username</label>
          <input type="username" name="username" class="form-control" placeholder="Username" required="" autofocus="">
         
        </br>

         <label  class="sr-only">Name</label>
          <input type="name" name="name" class="form-control" placeholder="Name" required="" autofocus="">
         
        </br>

         <label  class="sr-only">Surname</label>
          <input type="surname" name="surname" class="form-control" placeholder="Surname" required="" autofocus="">
         
        </br>

        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" class="form-control" placeholder="E-mail" required=""> 
      </br>

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required=""> 
        </br>

         <label for="inputPassword" class="sr-only">Retype password</label>
          <input type="password" name="retypepassword" class="form-control" placeholder="Retype password" required=""> 
          <span><p><?php echo $infomsg; ?></p></span>

       </br>

        </br>

          <button name="register" value="Register" type="submit" class="btn btn-lg btn-primary btn-block btn-outline-danger">Registrati</button>
        </form>
      </div>

      <script>

var infomess = "<?php echo $infomsg; ?>";


$(document).ready(function () {
 
 if(infomess != "")
 alert(infomess);

});

</script>
</body>

</html>