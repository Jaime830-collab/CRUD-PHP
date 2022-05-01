<?php

    session_start();
    include_once("conexao.php");

    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $verif="SELECT * FROM enfermeiro WHERE cod_funcao='$id'";
    $resu=mysqli_query($con,$verif);

    if(mysqli_affected_rows($con)){
        $_SESSION['msg'] = "<p style='color:green;'>
                                Esta função não pode ser excluída, pois existe enfermeiro cadastrado! 
                           </p>";
        header("Location: alter_fun.php");
    }else{
        $result = "DELETE FROM funcao WHERE id='$id'";
        $resultado = mysqli_query($con,$result);

        if(mysqli_affected_rows($con)){
            $_SESSION['msg'] = "<p style='color:green;'>
                                Esta Função foi excluída com sucesso! 
                           </p>";
        header("Location: alter_fun.php");
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>
                                Fução não foi excluída!
                               </p>";
            header("Location: edit_fun.php?id=$id");
        }
    }
?>
