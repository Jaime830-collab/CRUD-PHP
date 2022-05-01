<?php
    $nome=$_POST['nome'];
    include('conexao.php');

    $query="INSERT INTO funcao (descricao) VALUE('$nome')";
    $resu=mysqli_query($con,$query);

    if(mysqli_insert_id($con)){
        print "<br> <p style='color:blue;'>Inclusão realizada com sucesso!</p>";
    }else{
        print " <br> <p style='color:red;'>Falha na inclusão!</p>";
    }

    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão realizada com sucesso!</title>
</head>
<body>
<button onclick="window.location.href='index.html'">Continue</button>

</body>
</html>