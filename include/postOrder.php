<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BD_kp10is_V0";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", "$username","$password");
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO quotation_v0 (nom, telephone, 
email, service, message) 
VALUES (:nom, :telephone, :email, :service, :message)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':service', $service);
    $stmt->bindParam(':message', $message);

// insert a row
    $nom = $_POST["nom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];
    $stmt->execute();


    echo "New records created successfully";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

