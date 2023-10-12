<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1</title>
</head>

<body>
  <h1>Email Sender</h1>

  <form method="post" action="index.php">
    <label>Email que lo recibe:</label>
    <input type="email" name="email">
    <button>Enviar</button>

  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = $_POST["email"];
    $subject = "Buenos dias";
    $body = '<h1>Hola</h1>' .
      '<p>Esto es un mail que contiene HTML</p>' .
      '<ul>
      <li>HOLLL</li>
      </ul>';

    $success=mail($to, $subject, $body);
    if($success){
      echo '<span>Enviado  con éxito</span>';
    }
    else{
      echo 'Error al enviar';
    }

  }
  ?>

</body>

</html>