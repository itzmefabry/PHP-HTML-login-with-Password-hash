<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Problemas variados</title>
<link rel="stylesheet" href="staisls.css">
</head>
<body>

<h2>Inicio:</h2>
<form method="POST" action="">
<link rel="stylesheet" href="class.css">
<h3>Ingresa:</h3>
USuario: <input type="text" name="c" id="c" style="width: 100px" required>
Password: <input type="text" name="d" id="d" style="width: 100px" required>
<br>
<br>
<button type="submit" name="ingresar">Ingresar</button>
</form>
<hr>



</body>

<?php

if (isset($_POST['ingresar'])) {

$n1=$_POST['c'];
$n2=$_POST['d'];
$users = 'usuarios.json';
//codigo sacado con ayuda

$contnt=file_get_contents($users);
$arreglo1 = json_decode($contnt, true);


foreach ($arreglo1 as $registro) {
        if ($registro['usuario'] === $n1 && 
        password_verify($n2, $registro['password'])) 
        {
            echo "Acceso Concecedido";
            echo "<a href='index.php'>Volver</a>";
        }
        else{
            echo "Acceso Denegado";
            echo "<a href='index.php'>Volver</a>";
        }
    }
}



?>