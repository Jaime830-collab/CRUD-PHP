<?php
if (session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Enfermeiro</title>
</head>
<body bgcolor="MediumAquamarine">
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }

    ?>

    <p><h1> Enfermeiro - Inclusão</p>
    <form method="POST" action='inc_enfermeiro.php'>
    <label>Nome: <input type="text" size="80" name="nome" maxlenght="100" riquired></label>
   	<p><lable>Código: <input type="number" size="20" name="cod_funcao"  required> </lable>
    <lable>Matricula: <input type="number"   name="matricula" required> </lable>
	<p><lable>Telefone: <input type="tel" placeholder="(xx) xxxxx-xxxx" name="telefone" required> </lable>
    <p><lable>E-mail : <input type="text" placeholder="exemplo@exemplo.com" maxlenght="100" name="email" size="80" required> </lable>
    <p><lable>Endereço : <input type="text"  name="endereco" maxlenght="100" size="80" required> </lable>
    <p><lable>Cidade : <input type="text"  name="cidade" maxlenght="100"  size="80" required> </lable>
    <p><lable>Estado: <select name="estado" required>
        <option value="SP"> SP </option>
        <option value="MG"> MG </option>
        <option value="RJ"> RJ </option>
        <option value="BA"> BA </option>
        <option value="PR"> PR </option>
        </select>
    <p><lable>Função: <select name="cod_funcao"> </lable>
</lable>
    
	<?php 
	   include 'conexao.php';
	   $query = 'SELECT * FROM funcao ORDER BY descricao';
	   $resu = mysqli_query($con, $query) or die(mysqli_connect_error());
	   while($reg = mysqli_fetch_array($resu)){
	?>
	<option  value = "<?php echo $reg['id'];?>"> <?php echo $reg['descricao'];?></option>
	<?php
	   }
	   mysqli_close($con);
	?>
	</select>
	<input type="submit" value="Enviar">
	<input type="reset" value="Limpar">
	</form>
</body>
</html>






