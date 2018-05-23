<?php
$servername = "localhost";
$username = "nicolas";
$password = "base64";
$dbname = "contrebande";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nom, prenom,nationnalite FROM contrebandier";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nom: " . $row["nom"]. " " . $row["prenom"]. " ".$row["nationnalite"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
