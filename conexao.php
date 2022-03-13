<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão</title>
</head>

<body>
    <?php
    //Definindo as variáveis de acesso ao banco
    define('BD_SERVER', 'localhost');
    define('BD_USER', 'root');
    define('BD_PASSWORD', 'usbw');
    define('BD_NAME', 'aulaphp');

    //definindo a conexão
    $conn = mysqli_connect(BD_SERVER, BD_USER, BD_PASSWORD, BD_NAME);

    //verificando a conexão
    if ($conn === false) {
        die("ERROR: Não é possivel conectar. " . mysqli_connect_error());
    }

    ?>

</body>

</html>