<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost"; // Nome del server (solitamente localhost)
$username = "root"; // Nome utente del database
$password = ""; // Password del database
$dbname = "echoverse_db"; // Nome del database

// Creazione della connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Query per recuperare i record 
$query = "SELECT * FROM artisti";
$artists = $conn->query($query);

// Fetching the data and converting it to an array
$data = array();
while ($row = $artists->fetch_assoc()) {
    $data[] = $row;
}

// Returning the JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>