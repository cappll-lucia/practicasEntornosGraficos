
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 3</title>
</head>

<body>
  <h1>Recomendando</h1>

  <form method="post" action="index.php">
    <label>Su nombre</label>
    <input name="name" type="text" required></input><br>
    <label>Email de su amigo</label>
    <input name="email" type="email" required></input><br>
    <button>Enviar</button>

  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST['email'];
    $subject = "Recomendacion de " . $_POST['name'];
    $body = "<p>Su amigo le ha recomedado nuestro sitio.
            Visitanos en <a href='https://www.recomendable.com'>nuestro sitio</a></p>";
  
    $success= mail($to, $subject, $body);
    if($success){
      echo '<span>La recomendación fue enviada :)  </span>';
    }
    else{
      echo '<span>Error al enviar la recomendación</span>';
    }

  }
  ?>

</body>

</html>