<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Recomendado
    $rol = $_POST['rol'];

    $query = $conexion->prepare("INSERT INTO usuarios (nombre, email, password, rol) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssss", $nombre, $email, $password, $rol);

    if ($query->execute()) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error al registrar: " . $conexion->error;
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>  
    <div class="login-container">
        <form class="login-form" method="POST">
            <h2>Registro de Usuario</h2>


            <div class="form-group">
                <i class="fas fa-user icon"></i>
                <input type="text" name="nombre" required>

            </div>
            
            <div class="form-group">
                <i class="fas fa-envelope icon"></i>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <i class="fas fa-lock icon"></i>
                <input type="password" name="password" required>
                <i class="toggle-password" id="togglePassword"></i>
            </div>
            <div class="form-group">
                <i class="fas fa-user icon"></i>
                <select class="form-group" type="rol" name="rol" required>
                    <option value="voluntario">Voluntario</option>
                    <option value="cliente">Damnificado</option>
                </select>
            </div>                              
            
            <button type="submit" class="btn">Registrarse</button>

            <div class="login-link">
                <p>¿Ya tienes cuenta? <a href="/teleDANA/login.php" class="login-text">¡Inicia sesión aquí!</a></p>
            </div>
            
        </form>
    </div>
</body>
</html>


<!-- 

<form method="POST">
 <input type="text" name="nombre" required>
 <input type="email" name="email" required>
 
 <input type="password" name="password" required>

 <button type="submit">Registrarse</button>
</form> -->