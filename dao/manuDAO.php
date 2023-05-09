<?php

include_once("model/Manu.php");

  class ManuDAO implements ManuDAOInterface{

    private $conn;
    public function _construct(PDO $conn){
      $this->conn = $conn;
    }
    public function findALL(){
      $manus=[];
      $stmt = $this->pdo->query("SELECT * FROM manutencao");

      $data = $stmt->fetchAll();

      foreach ($data as $item){
        $manu = new Manu();
        $manu->setName($item["name"]);
        $manu->setDescription($item["description"]);
        $manu->setType($item["type"]);
        $manu->setImage($item["image"]);
        $manu->setDay($item["Day"]);


        $manus[]= $manu;
        
      }



      return $manus;
    }

    public function findById($id) {

      if($id != "") {

        $stmt = $this->conn->prepare("SELECT * FROM manutencao WHERE id = :id");

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        if($stmt->rowCount() > 0) {

          $data = $stmt->fetch();
          $user = $this->buildUser($data);
          
          return $user;

        } else {
          return false;
        }

      } else {
        return false;
      }
    }
    public function getEquip(){
      
    }


 
    public function create(manu $manu){
      $stmt = $this->$conn->prepare("INSERT INTO manutencao (name, description, image, type, day) VALUES (:name, :description, :image, :type, :day)");
      $stmt->bindParam(":name" $manu->getName());
      $stmt->bindParam(":description" $manu->getDescription());
      $stmt->bindParam(":image" $manu->getImage());
      $stmt->bindParam(":type" $manu->getType());
      $stmt->bindParam(":day" $manu->getDay());

      $stmt->execute();
    }

  }
