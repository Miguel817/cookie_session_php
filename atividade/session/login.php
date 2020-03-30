<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGADO</title>
<style>
.Q{
    color:blue;
    padding-left:100px;
}
</style>

</head>
<body>
<h1 CLASS="Q"> LOGOLADO COM SUCESSO!!!!!!!</H1>
<?php
session_start();
echo "Ola seja bem vindo a nossa plataforma:", $_SESSION['log'];
?>
</body>
</html>




