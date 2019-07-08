<?php
   setcookie('loginCookie', $_POST['login'], time() + 5 * 60, '/');
   setcookie('passwordCookie', $_POST['password'], time() + 5 * 60, '/');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ex5p8</title>
</head>
<body>
  <!-- container Bootstrap -->
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex5p8</h1>
          <p class="lead">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
            <hr class="my-2">
          </div>
      </div>
        </header>
        <!-- main -->
        <main class="text-center">
            <!--laction vide renvoie dans la même page-->
          <form action="" method="post">
              <label for="civility">Civilité:</label>
                <select name="civility">
                    <option value="Mr">Mr.</option>
                    <option value="Mme">Mme.</option>
                </select>   
                <div class="form-group">
                  <label for="Input">login</label>
                  <input type="text" class="form-control" name="login" placeholder="login">
                </div>
                <div class="form-group">
                  <label for="Input2">password</label>
                  <input type="password" class="form-control" name="password" placeholder="password">
                </div>
            <?php 
            if (strlen($_POST['password'] < 6))
            {
              echo 'mot de passe trop court !!';
            }
            ?>
             <input type="submit" value="envoyaaaaaaaaaage">
          </form>
         </main>
       <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
     </body>
    </html>
