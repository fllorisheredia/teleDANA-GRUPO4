<?php
include '/teleDANA3/includes/db.php'; 
session_start();
$emisor_id = $_SESSION['id']; // ID del usuario logueado
$receptor_id = $_POST['receptor_id'];
$mensaje = $_POST['mensaje'];



$stmt = $conn->prepare("INSERT INTO mensajes (remitente_id, receptor_id, mensaje) VALUES (?, ?, ?)");
$stmt->bind_param("iis", $emisor_id, $receptor_id, $mensaje);
$stmt->execute();

header("Location: chat.php?con=$receptor_id"); // Redirige al chat con ese usuario
?>
