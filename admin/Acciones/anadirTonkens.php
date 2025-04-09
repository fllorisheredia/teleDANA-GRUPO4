<?php
include '../includes/db.php'; // o ajusta la ruta si es necesario

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);

  $sql = "DELETE FROM usuarios WHERE id = $id";

  if ($conexion->query($sql)) {
    // Redirige de nuevo a la lista tras eliminar
    header("Location: indexAdmin.php?mensaje=Usuarioi elimninado con exito");
    exit;
  } else {
    echo "❌ Error al eliminar el usuario: " . $conexion->error;
  }

} else {
  echo "⚠️ ID de usuario no especificado.";
}
?>
