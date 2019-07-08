<?php 
    // Si le formulaire a été envoyé...
    if(isset($_POST['login']) && isset($_POST['password']))
    {
     // Le path doit être mis en '/' (valeur par défaut pour le chemin du serveur sur lequel le serveur est accessible) ...
        // ... pour qu'il soit disponible sur tout le domaine.
        //setcookie(cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure], [httponly]);
        setcookie('loginCookie', $_POST['login'], time() + 5 * 60, '/');
        setcookie('passwordCookie', $_POST['password'], time() + 5 * 60, '/');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ex3p8</title>
</head>
<body>
  <!-- container Bootstrap -->
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex3p8</h1>
          <p class="lead"> Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>
            <hr class="my-2">
          </div>
      </div>
        </header>
        <!-- main -->
        <main class="text-center">
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
       </body>
    </html>
