<?php

  class Production{
    use YearOfPublication;

    public $name;
    public $image;

    public function __construct(string $_name, Media $_image = null){
      $this->name = $_name;
      $this->image = $_image;
    }

    public function setImage(Media $_image) {
      $this->image = $_image;
    }

    public function getInfo(){
      return "Nome: $this->name <br>";
    }
  }

?>