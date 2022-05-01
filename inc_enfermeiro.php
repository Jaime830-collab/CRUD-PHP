<?php 
if (session_status() !==PHP_SESSION_ACTIVE){
    session_start();
}

$nome = $_POST["nome"];
$cod_funcao = $_POST["cod_funcao"];
$matricula = $_POST["matricula"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

include('conexao.php');

$query = "INSERT INTO enfermeiro (nome, cod_funcao, matricula, telefone, email, endereco, cidade, estado) VALUES ('$nome', '$cod_funcao', '$matricula', '$telefone', '$email', '$endereco', '$cidade', '$estado')";
$resu= mysqli_query($con,$query);

if(mysqli_insert_id($con)){
    $SESSION['msg'] = "<p style='color:blue,'> Enfermeiro cadastrado com sucesso!</p>";
    header('Location: enfermeiro.php');
}
else{
    $SESSION['msg'] = "<p style='color:red,'> Enfermeiro não foi cadastrado!</p>";
    header('Location: enfermeiro.php');
    mysqli_close($con);
}
?>

