<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Trabajo</title>
</head>
<body>

    <header>
    <h2>Gobierno Regional</h2>
     <div class="img_login">
         <img src="img/Escudo_Región_Puno.png" alt="imagen login">
     </div>
    </header>
    <article>
            <form action="php/validar_login.php" method="post" >
                  <input type="text" placeholder="Usuario" name="usuario">
                  <input type="password" placeholder="Contraseña" name="password">
                  <input type="submit" value="Entrar">
            </form>
    </article>
    <footer>

    </footer>
    
</body>
</html>