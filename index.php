
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title class="font-mono font-semibold">Inicio</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black-600 p-6">


<?php
include 'includes/headerBase.php';  // Aquí debe estar el <head> y abrir <body>
include 'includes/db.php';

// // Mostrar productos
// $resultado = $conexion->query("SELECT * FROM productos");
// while ($producto = $resultado->fetch_assoc()) {
//     echo "<div><h2>" . $producto['nombre'] . "</h2><p>Precio: " . $producto['precio_tonkens'] . " Tonkens</p></div>";
// }


?>









</body>
<!-- <?php
include 'includes/footer.php'; // Aquí debe cerrar el </body> y </html>
?> -->


</html>
