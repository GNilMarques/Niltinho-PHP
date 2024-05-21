<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stayle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<h1>Aula de hj PHP</h1>

<?php
/*$patins =  array("amigos","alunos","aulas","street","slalom","jump");
var_dump($patins);

$patins = ["amigos","alunos","aulas","street","slalom","jump"];
$patins;

$patins =  array("amigos","alunos","aulas","street","slalom","jump");
$patins [3] ="rua";
echo count($patins );



$calendario2024= ["janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro"];
$calendario2024[6] = "julho";

foreach($calendario2024 as $mes){
    echo "$mes <br>";
}



for ($x =0; $x <= 3; $x++){
    echo "$x <br>";
}*
for ($x = 1; $x <= 10; $x++){
    $resultado = $x*1;
    echo " 1 x $x = $resultado <br>";}
echo "<br>";
    for ($x = 1; $x <= 10; $x++){
        $resultado = $x*2;
        echo " 2 x $x = $resultado <br>";
}
echo "<br>";
    for ($x = 1; $x <= 10; $x++){
        $resultado = $x*3;
        echo " 3 x $x = $resultado <br>";
}

$x=5;
$a=4;
$soma= $x + $a;
$resultado = $soma *$x;
echo $resultado;

$val1=5;
$val2=9;
$val3=7;
$media =($val1+$val2+$val3)/3;
echo $media;

$x=29;
$resultado = $x *0.15;
echo $resultado;

$x=84;
$resultado = $x *0.05;
$resultado1 = $x *0.50;
echo "o resultado de 5% e $resultado e o resultado de 50% e  $resultado1";

$x=39;
if ($x >0){
   echo "valor positivo";
}
else if ($x <0){
    echo "valor negativo";
}

$notafinal =8;
if ($notafinal >= 7){
    echo "aprovado";
} 
elseif ($notafinal >= 5){
    echo "prova final";
}
else{
    echo "reprovado";
} */

if($_SERVER ['REQUEST_METHOD'] == "POST"){



    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmasenha = $_POST['confirmasenha'];

//validaão do campo nome
    if(empty ($nome)){
        $erronome = "Coloque seu nome";
    }else{
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            $erronome = "nao pode conter numeros";
        } else { 
            $erronome = "nenhum";
        }
    }

//validaão do campo email
    if(empty($email)){
        $erroemail = "Coloque seu email";
    }else{
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroemail = "Coloque seu email";
        } else { 
            $erroemail = "nenhum";
        }
    }

//validaão do campo senha
    if(empty($senha)){
        $errosenha = "Coloque sua senha";
    }else{
        if (strlen($senha) < 6) {
            $errosenha = "Coloque";
        } else { 
            $errosenha = "nenhum";
        }
    }
//validaão do campo confirma senha
    if(empty ($confirmasenha)){
        $erroconfirmasenha = "Coloque sua senha";
    }else {
        if ($confirmasenha != $senha) {
            $erroconfirmasenha = "Coloque";
        } else { 
             $erroconfirmasenha = "nenhum";
        }
    }

}

    ?>

<br><br>
<!--
<form action="receber_post.php" method="POST">
    <input type="text" name="campoNome" placeholder="digite seu nome">
    <input type="text" name="campoIdade" placeholder="digite sua idade">
    <button type="submit">enviar</button>
</form> <br><br>
        -->

<h1>Validação de Formulario</h1>

<div>
    <form method="post">

    <!-- campo nome do form  -->
        <label for="" class="">nome <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Campo Obrigatorio" ></i></label>  <br>
        <input type="text" class="form-control <?php if (isset($erronome)){if ($erronome != "nenhum"){echo "is-invalid";}}?>" name="nome"> <br>
        <div class="invalid-feedback">
            <?php
                if (isset($erronome)){
                    if ($erronome != "nenhum"){
                        echo $erronome;
                }
                }       
            ?>
        </div>

    <!-- campo email do form  -->
        <label for="" class="">email <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Campo Obrigatorio" ></i> </label> 
        <input type="text" class="form-control <?php if (isset($erroemail)){ if ($erroemail != "nenhum"){ echo "is-invalid";}}?>" name="email"> <br>
        <div class="invalid-feedback">
            <?php
                if (isset($erroemail)){
                    if ($erroemail != "nenhum"){
                        echo $erroemail;
                }
                }
            ?>
        </div>

    <!-- campo senha do form  -->
        <label>senha <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Campo Obrigatorio" ></i> </label> 
        <input type="password" class="form-control <?php if (isset($errosenha)){ if ($errosenha != "nenhum"){echo "is-invalid";}}?>" name="senha"> 
        <div class="invalid-feedback"> 
            <?php
                if (isset($errosenha)){
                    if ($errosenha != "nenhum"){
                     echo $errosenha;
                }
                }
            ?>
        </div> <br>

    <!-- campo confirma senha do form  -->
        <label for="" class="">confirma senha <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Campo Obrigatorio" ></i></label> 
        <input type="password" class="form-control <?php if (isset($erroconfirmasenha)){if ($erroconfirmasenha != "nenhum"){echo "is-invalid" ; }}?>" name="confirmasenha"> 
        <div class="invalid-feedback">
            <?php
                if (isset($erroconfirmasenha)){
                    if ($erroconfirmasenha != "nenhum"){
                     echo $erroconfirmasenha;
                }
                }
            ?>
        </div>
<br>
    <button type="submit">enviar <i class="mdi mdi-send-check"></i> </button> <br>

    </form>
</div>
</body>


    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>