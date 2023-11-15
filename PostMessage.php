<?php
include "Conexion.php";

$usuario = $_POST["usuario"];
$mensaje = $_POST["mensaje"];

$stmt = $conn->prepare("INSERT INTO mensajeria (usuario, mensaje) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $mensaje);
$stmt->execute();
$stmt->close();
$conn->close();
?>
