<?php
include 'conexion.php';

$sql = "SELECT H.nombre, COUNT(R.id_reserva) AS total_reservas
        FROM RESERVA R
        JOIN HOTEL H ON R.id_hotel = H.id_hotel
        GROUP BY H.nombre
        HAVING total_reservas > 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Hoteles con más de 2 reservas:</h2>";
    while($row = $result->fetch_assoc()) {
        echo "Hotel: " . $row["nombre"] . " - Total Reservas: " . $row["total_reservas"] . "<br>";
    }
} else {
    echo "No hay hoteles con más de 2 reservas.";
}
$conn->close();
?>


