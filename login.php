<?php
include "includes/db.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Buscar usuario por email
    $query = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $resultado = $query->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Comprobar contraseña (si la guardaste con password_hash)
        if (password_verify($password, $usuario['password'])) {
            // Guardar datos en la sesión
            $_SESSION['usuario'] = $usuario;
            $_SESSION['rol'] = $usuario['rol'];
            $_SESSION['nombre'] = $usuario['nombre']; // ✅ Añadido: guardar el nombre

            // Redirigir según el rol
            switch ($_SESSION['rol']) {
                case 'administrador':
                    header("Location: admin/indexAdmin.php");
                    break;
                case 'cliente':
                    header("Location: /teleDANA3/damnificados/indexDamni.php");
                    break;
                case 'voluntario':
                    header("Location: voluntario/indexVoluntario.php");
                    break;
                default:
                    echo "Rol desconocido.";
            }
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Correo no registrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>



</head>

<body>
    <!-- <div class="login-container">
        <form class="login-form" method="POST">
            <h2>Iniciar Sesión</h2>

            <div class="form-group">
                <i class="fas fa-user icon"></i>
                <input type="email" name="email" required placeholder="Correo electrónico">
            </div>

            <div class="form-group password-group">
                <i class="fas fa-lock icon"></i>
                <input type="password" name="password" required placeholder="Contraseña">
                <i class="toggle-password" id="togglePassword"></i>
            </div>

            <button type="submit" class="btn">Iniciar Sesión</button>

             Enlace para recuperación de contraseña -->
    <!-- <p class="forgot-password"><a href="/recuperar_contrasena">¿Olvidaste tu contraseña?</a></p>

            <div class="signup-link">
                <p>¿No tienes cuenta? <a href="/teleDANA/registro.php" class="signup-text">¡Crea una ahora aquí!</a></p>
            </div>
        </form> -->
    <!-- </div> -->



    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Login now!</h1>
                <p class="py-6">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                    quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
            </div>
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <div class="card-body">
                    <fieldset class="fieldset">
                        <label class="fieldset-label">Email</label>
                        <input type="email" class="input" placeholder="Email" />
                        <label class="fieldset-label">Password</label>
                        <input type="password" class="input" placeholder="Password" />
                        <div><a class="link link-hover">Forgot password?</a></div>
                        <button class="btn btn-neutral mt-4">Login</button>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</body>

</html>