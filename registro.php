<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Problemas variados</title>
<link rel="stylesheet" href="staisls.css">
</head>
<body>

<h2>Registro</h2>
<form method="POST" action="">
<link rel="stylesheet" href="class.css">
<h3>Ingresa:</h3>
USuario: <input type="text" name="a" id="a" style="width: 100px" required>
Password: <input type="text" name="b" id="b" style="width: 100px" minlength="6" required>
<br>
Confirmar Password: <input type="text" name="b2" id="b2" style="width: 100px" required>
<br>
<br>
<button type="submit" name="registro">Registrar</button>

</form>

<hr>

</body>

<?php

if (isset($_POST['registro'])) {

$n1=$_POST['a'];
$n2=$_POST['b'];
$n3=$_POST['b2'];

if($n2!=$n3){
    echo"Las contraseñas no coinciden";
} else {
    $pass = password_hash($n2, PASSWORD_DEFAULT);

$users = 'usuarios.json';
$arreglo = [];

$arreglo[] = [
    'usuario' => $n1,
    'password' => $pass
];

file_put_contents($users,json_encode($arreglo));

echo "<h3>Usuario registrado</h3>";
echo "<a href='index.php'>Volver</a>";


}


}

?>