<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once "conexao.php";
$nome= $_POST ["nome"];
$endereco= $_POST ["endereco"];
$cidade= $_POST ["cidade"];
$sql = "INSERT INTO cliente (nome,endereco,cidade)
VALUES ('$nome','$endereco','$cidade')";    
$stmt = mysqli_prepare($conn,$sql);
if($stmt){
		  mysqli_stmt_execute($stmt);
          echo 'Cliente cadastrado com sucesso!';	  
        }else{
          echo'Não foi possível cadastrar esse cliente';
        }
?>

</body>
</html>