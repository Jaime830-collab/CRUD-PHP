<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM funcao WHERE id = '$id' ";
$resultado = mysqli_query($con, $result);
$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Editar</title>
</head>
<body>
    <h1>Alteração - Especialidade</h1>
    <?php
        if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="proc_edit_fun.php">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        
        <label>Função</label>
        <p><input type="text" name="nome" value="<?php echo $row['descricao'];?>"><br><br>

        <input type="submit" value="Salvar">
    </from>

</body>
</html>
