<?php
session_start();
include('config-users.php'); // Uključuje datoteku za konekciju na bazu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $ime = $_POST['name'];
    $prezime = $_POST['surname'];
    $razina = 0; // Postavljanje defaultne vrijednosti za razinu
    // Priprema SQL upita
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, ime, prezime, razina) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $username, $email, $password, $ime, $prezime, $razina);

    // Izvršavanje SQL upita i provjera uspješnosti
    if ($stmt->execute()) {
        $stmt->close();
        header('Location: index.php');
        exit(); // Zaustavlja izvršavanje nakon preusmjeravanja
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
    }
}

$conn->close();
?>
