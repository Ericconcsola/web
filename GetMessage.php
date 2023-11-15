<?php
include "Conexion.php";

$result = $conn->query("SELECT usuario, mensaje FROM mensajeria ORDER BY tiempo DESC");

while ($row = $result->fetch_assoc()) {
    echo "<p><strong>" . $row['usuario'] . ":</strong> " . $row['mensaje'] . "</p>";
}

$conn->close();
?>
