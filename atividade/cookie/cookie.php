<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
      <style>
      .mee{
          color:red;
          padding-left:240px;
      }
      .gt{
   withg:50px;
    heigth:50px;
    }
    #momo{
padding-left:100px;
}
#arreia{ 
padding-left:200px;
}

      </style>
      
<body>
<h1 class="mee">formulario </h1>
<?php
if(isset($_COOKIE['nome']) && isset($_GET['deletecookie'])){
    unset($_COOKIE['nome']);
    echo '<script>alert("cookie deletado")
    </script>'; 
} if(isset($_POST['user'])){
    setcookie('nome', $_POST['user'], time()+60*60*24*30);
    header("location: kakaka.php");
}else{ 
    if(isset($_COOKIE['nome'])){
        echo $_COOKIE['nome']; 
        echo "<a href='?deletecookie=true'><button>Deletar Cookie</button></a>"; 
    }else{ 
?>
<form method="POST" action="kakaka.php">
<label id="momo">Name</label>
<input type="text" id="arreia" name="arreia" placeholder="Nome completo">
    <button type="submit" value="Enviar" id ="gt">enviarrrrr</button>
</form>
<?php 
    }
 } ?>
</body>
</html>