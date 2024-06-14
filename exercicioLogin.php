<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper fadeInDown">
  
  <div class="content-login">

      <h2 class="active"> Login </h2>

      <form class="box-login" method="post" action="#">
        <input type="email" id="email" class="campo" name="email" placeholder="E-mail">
        <input type="text" id="password" class="campo" name="senha" placeholder="Senha">
        <input type="submit" class="botao" value="Envia">
      </form>

      <?php
      require('conexao.php');

      if($_SERVER ['REQUEST_METHOD'] == "POST"){


       
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
              
       
        $sql = $pdo-> prepare("INSERT INTO cliente VALUES (null,?,?)");
        $sql -> execute(array($email,$senha,));

       
      }
      ?>


      <div class="box-lembrar-senha">  
        <a class="link" href="#">Lembrar Senha</a>
      </div>

  </div>

</div>
</body>
</html>