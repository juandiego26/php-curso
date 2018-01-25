<?php

$users = ['edgar'=> '123', 'camila'=> '567'];

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

foreach( $users as $key =>$us){

    if($usuario == $key && $contrasena == $us){
        session_start();
        $_SESSION['usuario'] = $usuario;
    }
}

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <header>
       <div class="text-usuario">
           <p>
               Bienvenido Usuario: <?php echo $_SESSION['usuario'];?>
           </p>
           <input type="button"value="logout">
       </div>
   </header>

</body>
</html>    
