<?php
include_once("templates/header.php");
include_once("db.php");
include_once("models/Message.php");

$message = new Message($BASE_URL);


$data = $_POST;



$description = $data["description"];
$name = $data["name"];
$day = $data["day"];
$type = $data["type"];
$image = $data["image"];
$condicao = $data["condicao"];
$id = $data["id"];

$query = "UPDATE manutencao 
SET name = :name, description = :description, day = :day, type = :type, condicao = :condicao, image = :image
WHERE id = :id";
$stmt = $conn->prepare($query);

$stmt->bindParam(":name", $name);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":day", $day);
$stmt->bindParam(":type", $type);
$stmt->bindParam(":image", $image);
$stmt->bindParam(":condicao", $condicao);
$stmt->bindParam(":id", $id);




try{
    $stmt->execute();
    $message->setMessage("Equipamento Atualizado!", "success", "back");
}catch(PDOexception $e){
    $error = $e->getMessage();
    echo "error: $error";
}







