<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ex2p8</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron rounded-circle bg-success">
          <h1 class="display-3">PHP ex2p8</h1>
          <p class="lead">Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
              Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
            <hr class="my-5 bg-white">
          </div>
        </header>
        <!-- main -->
        <main class="text-center">
            <?php $_SESSION['lastname'] ='Qrotriech'; $_SESSION['firstname'] = 'Gontrand'; $_SESSION['age'] = '392';?>
        <a href="user.php"> Allez, viens</a> 
       </main>
      </div>
    </body>
    </html>
