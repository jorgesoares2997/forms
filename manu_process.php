<?php
include_once("templates/header.php");
include_once("db.php");
include_once("models/Message.php");

$message = new Message($BASE_URL);


$data = $_POST;


if($data["name"] != "" || $data["description"] != "" ){
$description = $data["description"];
$name = $data["name"];
$day = $data["day"];
$type = $data["type"];
$image = $data["image"];


$query = ("INSERT INTO manutencao (name, description, type, image, day) VALUES (:name, :description, :type, :image, :day)");
$stmt = $conn->prepare($query);

$stmt->bindParam(":name", $name);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":day", $day);
$stmt->bindParam(":type", $type);
$stmt->bindParam(":image", $image);


$stmt->execute();

if(!empty($name)){
    $message->setMessage("Formulario enviado!", "success", "equipamentos.php");
}
}

 if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM manutencao WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $message->setMessage("Equipamento Removido!", "success", "back");
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }


?>
<?php

include_once("templates/footer.php");

?>