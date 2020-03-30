<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login :-]</title>
<style>
.a{
    color: blue;
    padding-left:100px;
}

</style>
</head>
<body>
<h1 class="a">LOGIN </h1>
  <form action="" method="POST">
  <input type="text" name="email" placeholder=" digite seu email">
  <input type="text" name="senha" placeholder="digite sua senha">
  <button type="submit">ENVIAR</button>
  </form>

  <?php
  error_reporting(0);
session_start();
$login = $_POST['email'];
$senha = $_POST['senha'];
if(isset($login)&& isset($senha)){
  $_SESSION['log']=$_POST['email'];
  header("location: login.php");
}

?>
</body>

</html>
