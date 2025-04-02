<?php
// 8. /admin/index.php (Inicio del panel de administración)
// session_start();
// include 'admin/headerAdmin.php';
include '../includes/db.php';
include '../includes/headerAdmin.php';

// if ($_SESSION['usuario']['rol'] !== 'administrador') {
//  header("Location: ../index.php");
// }
// include '../includes/header.php';
echo "<h1>Panel de Administración</h1>";
include '../includes/footer.php';
?> 

<!-- 
<?php
// 4. /index.php (Página principal de la tienda)
include 'includes/headerBase.php';
include 'includes/db.php';
$resultado = $conexion->query("SELECT * FROM productos");
// while ($producto = $resultado->fetch_assoc()) {
//  echo "<div><h2>" . $producto['nombre'] .
// "</h2><p>Precio: " . $producto['precio_tonkens'] . "
// Tonkens</p></div>";
// }
include '../includes/footer.php';

// include 'productos/index2.php';
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    

    
</body>
</html>


