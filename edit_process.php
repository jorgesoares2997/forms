<?php
include_once("templates/header.php");
include_once("db.php");
include_once("models/Message.php");

$message = new Message($BASE_URL);


$data = $_POST;


if($data["name"] != "" || $data["condicao"] != "" ){
$description = $data["description"];
$name = $data["name"];
$day = $data["day"];
$type = $data["type"];
$image = $data["image"];
$condicao = $data["condicao"];


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


$stmt->execute();

if(!empty($name)){
    $message->setMessage("Equipamento Atualizado!", "success", "equipamentos.php");
}
}


