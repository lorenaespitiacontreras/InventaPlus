<?php
    switch ($_GET['tipo']) {
        case 'rcu':
            $usuario = $_POST['usuario'];
            if($usuario == ""){
                header("Location: ../views/restablecerContrase├▒a.php?usu=0");
                return;
            }
            header("Location: ../views/restablecerContrase├▒a.php?usu=1");
            break;
        
        default:
            # code...
            break;
    }
?>