<?php

require('conexao.php');
$sql=$pdo-> prepare("INSERT INTO banco VALUES (?,?',?,?);");
$sql -> execute (array ($nome,$email,$senha,$confirmasenha));




?>