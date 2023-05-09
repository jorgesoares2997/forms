<?php
include_once("templates/header.php");
include_once("db.php");

include_once("models/Message.php");

$message = new Message($BASE_URL);

$email = $_POST["email"];
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$number = $_POST["number"];
$instagram = $_POST["instagram"];


echo $name."<br>".$email."<br>".$instagram."<br>".$number."<br>".$lastname;

$query = ("INSERT INTO inscricoes (name, email, number, lastname, instagram) VALUES (:name, :email, :number, :lastname, :instagram)");
$stmt = $conn->prepare($query);

$stmt->bindParam(":name", $name);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":lastname", $lastname);
$stmt->bindParam(":number", $number);
$stmt->bindParam(":instagram", $instagram);


$stmt->execute();

if(!empty($name)){$message->setMessage("Formulario enviado!", "success", "index.php");}
?>
<?php

include_once("templates/footer.php");

?>