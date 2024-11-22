<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biurop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

$sql = "SELECT dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['dataWyjazdu']) . "</td>
                <td>" . htmlspecialchars($row['cel']) . "</td>
                <td>" . htmlspecialchars($row['cena']) . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Brak dostępnych wycieczek</td></tr>";
}

$conn->close();
?>
