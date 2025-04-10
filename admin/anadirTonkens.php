<?php
include(__DIR__ . '/../includes/db.php');

session_start();
$id = $_POST['id'];
$tonkens = $_POST['tonkens'];



$stmt = $conexion->prepare("INSERT INTO mensajes (remitente_id, receptor_id, mensaje) VALUES (?, ?, ?)");
$stmt->bind_param("iis", $emisor_id, $receptor_id, $mensaje);
$stmt->execute();

header("Location: chat.php?con=$receptor_id"); // Redirige al chat con ese usuario
?>
