<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">

    <title>Criptografia: Resultado</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans&display=swap');

        * {
            font-family: 'Work Sans', sans-serif;
            background-color: #d2d2db;
        }
        .texto{
            color: black;
            position: fixed;
            top:10%;
            left: 18%;
            font-weight: bold;
            animation: go-back 2s;
        }
        .btnVoltar{
            background-color: #2e27c1;
            color: white;
            padding: 20px;
            position: fixed;
            top: 65%;
            left: 43%;
            border-radius: 10px;
            border: none;
            text-decoration: none;
            animation: go-back 2s;
        }.btnVoltar:hover{
            opacity: 80%;
        }
        @keyframes go-back {
            from {
                transform: translateX(300px);
            }

            to {
                transform: translateX(0);
            }
        }
    </style>
</head>


<body>
    <div class="texto">
<!--MD5-->
<?php
 $texto = $_POST["txtTexto"];
 $codificado = md5($texto);
 echo "Codificação utilizando MD5: " .$codificado."<br><br>";
?>

<!--SHA1-->
<?php
 $texto = $_POST["txtTexto"];
 $codificado = sha1($texto);
 echo "Codificação utilizando SHA1: " . $codificado . "<br><br>";
 ?>

<!--BASE64-->
<?php
 $texto = $_POST["txtTexto"];
 $codificado = base64_encode($texto);
 echo "Codificação utilizando BASE64: " . $codificado."<br><br>";
 $textoOriginal = base64_decode($codificado);
 echo "Decodificação utilizando BASE64: " . $textoOriginal . "<br><br>";
 ?>

<!--HASH()-->
<?php
$texto = $_POST["txtTexto"];
 $codificado = hash('ripemd160', $texto);
 echo "Codificação utilizando função Hash com o algoritmo RIPEM160: " .
$codificado."<br><br>";
$texto = $_POST["txtTexto"];
 $codificado = hash('sha256', $texto);
 echo "Codificação utilizando função Hash com o algoritmo SHA256: " .
$codificado."<br><br>";
 ?>

<!--PasswordHashing()-->
<?php
 $texto = $_POST["txtTexto"];
 $codificado = password_hash($texto, PASSWORD_DEFAULT);
 echo "Codificação utilizando PasswordHashing(): ".$codificado."<br>";
?>
</div>
<a href="index.php" class="btnVoltar">Voltar</a>
</body>
</html>