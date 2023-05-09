<?php

  class Manu {

    private $name;
    private $description;
    private $type;
    private $image;
    private $day;

    public function getName() {
      return $this->name;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getDescription() {
      return $this->description;
    }

    public function setDescription($description) {
      $this->description = $description;
    }

    public function getType() {
      return $this->type;
    }

    public function setType($type) {
      $this->type = $type;
    }

    public function getImage() {
      return $this->image;
    }

    public function setImage($image) {
      $this->image = $image;
    }
    public function getDay() {
      return $this->day;
    }

    public function setDay($day) {
      $this->day = $day;
    }
   

  }

  interface ManuDAOInterface {

    public function create(Manu $manu);
    public function findAll();
    

  }
