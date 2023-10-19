<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/fontawesome.min.css">

    <title>Criptografia</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans&display=swap');

        * {
            font-family: 'Work Sans', sans-serif;
            background-color: #d2d2db;
        }

        h1 {
            color: black;
            position: fixed;
            top: 25%;
            left: 35%;
            animation: go-back 2s;
        }

        h3 {
            color: black;
            position: fixed;
            top: 35%;
            left: 28%;
            animation: go-back 2s;
        }
       
        /* animação da tela inicial */
        @keyframes go-back {
            from {
                transform: translateY(300px);
            }

            to {
                transform: translateY(0);
            }
        }
        @keyframes type{ 
  from { width: 0; } 
}
        .inputCriptografar {
            background-color: white;
            color: black;
            padding: 20px;
            position: fixed;
            top: 50%;
            left: 35%;
            border-radius: 10px;
            border: none;
            outline: 0;
            animation: go-back 2s;
            box-shadow: 4px 5px 13px -5px rgba(0, 0, 0, 0.83);
        }

        .btnCrip {
            background-color: #2e27c1;
            color: white;
            padding: 20px;
            position: fixed;
            top: 50%;
            left: 52%;
            border-radius: 10px;
            border: none;
            animation: go-back 2s;
            box-shadow: 4px 5px 13px -5px rgba(0, 0, 0, 0.83);
        }

        .btnCrip:hover {
            opacity: 80%;
        }
    </style>
</head>

<body>
    <h1>Criptografia em PHP</h1><br>
    <h3>MD5, SHA1, BASE64, Hash() e PasswordHashing. </h3><span>|</span>
    <form action="criptografia.php" method="post" class="formCriptografar">
        <input type="hidden" name="nome_form" value="frmLogin" />
        <input class="inputCriptografar" name="txtTexto" placeholder="Insira um texto.">
        <button name="btnCrip" class="btnCrip">Criptografar</button>

        </div>
    </form>
</body>

</html>