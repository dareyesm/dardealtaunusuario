<?php

//Controlando el inicio de la sesión
require'../class/sessions.php';
$objses = new Sessions();
$objses->init();

$user = isset($_SESSION['loginUsers']) ? $_SESSION['loginUsers'] : null ;

if($user == ''){
	header('Location: http://localhost:8888/CodigosVideos/7-DarDeAltaUsuarios/index.php?error=2');
}

?>
<!DOCTYPE html>

<html lang="esp">

    <head>
    <meta charset="utf-8" />
            <title>User Dashboard</title>
    </head>
        
    <body>
        
        <?php echo "Bienvenido, " . $_SESSION['loginUsers'];?>
        
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="profile.php">Perfil</a></li>
            <li><a href="log_out.php">Salir</a></li>
        </ul>
        
    </body>
    
</html>