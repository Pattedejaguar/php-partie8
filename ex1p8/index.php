<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ex1p8</title>
</head>
  <body>
    <main>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron bg-dark text-white rounded">
          <hr class="border-info">
          <h1 class="display-3">PHP ex1p8</h1>
          <p class="lead">
            <ul>
                <li> Faire une page HTML permettant de donner à l'utilisateur : </li>
            </ul>
            <ol>
                <li>son User Agent</li>
                <li>son adresse ip</li>
                <li>le nom du serveur</li> 
                <li>
                  <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-border" role="status">
                     <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>
                </li>
            </ol>  
            <hr class="border-info">
            <hr class="border-info">
          </div>
        </header>
        <!-- main -->
        <main class="text-center ">
         <form class="rounded bg-dark text-white" action="user.php" method="get">
            <div class="form-group">
              <p>User Agent : <?= $_SERVER['HTTP_USER_AGENT']?></p>
              <p>Adresse ip : <?=$_SERVER['REMOTE_ADDR']?></p>
              <p> Nom du serveur : <?=$_SERVER['SERVER_NAME']?></p>
            </div>
         </form>
        </main>
      </body>
    </html>
