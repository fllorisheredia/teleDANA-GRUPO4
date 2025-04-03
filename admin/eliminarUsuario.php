<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($conn, $sql);
}

// Redirige de nuevo a la página principal
header("Location: index.php");
exit();
