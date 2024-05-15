<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stayle.css">

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
}*/

?>

<form action="receber_post.php" method="POST">
    <input type="text" name="campoNome" placeholder="digite seu nome">
    <input type="text" name="campoIdade" placeholder="digite sua idade">
    <button type="submit">enviar</button>
</form>


</body>

    <script src="js/script.js"></script>
</body>
</html>