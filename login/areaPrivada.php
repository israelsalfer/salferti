<?php
    session_start();
        if(!isset($_session['id_usuario']))
        {
            header("location: principal.php");
        }

?>
<h2><a href="sair.php">Sair</a></h2>