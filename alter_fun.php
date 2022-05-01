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
    <title>Função Médicas</title>
</head>
<body bgcolor="MediumAquamarine">
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
    ?>

    <form method="POST" action="">
        <p>
            <center>
                <h1>
                Função Médicas
                </h1>
            </center>
        </p>

        <table border="1" width='100%'>
            <?php
                include('conexao.php');
                $sql="SELECT * FROM funcao order by descricao";
                $resu=mysqli_query($con,$sql) or die(mysqli_connect_error());
                while ($reg=mysqli_fetch_array($resu)){
                    echo "<tr>
                            <td>".$reg['descricao']."
                            </td>";
                    echo "<td>
                            <a href='edit_fun.php?id=".$reg['id']."'>
                                Editar
                            </a>
                          </td>";
                    echo "<td>
                            <a href='del_fun.php?id=".$reg['id']."'>
                                Exlcuir
                            </a>
                          </td>
                        </tr>";
                }
            ?>
        </table>
    </form>

    <?php
        mysqli_close($con);
    ?>
</body>
</html>