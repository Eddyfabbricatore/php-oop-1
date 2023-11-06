<?php

  class Movie{
    public $name;
    public $year;
    public $duration;
    public $image;

    public function __construct(string $_name, int $_year, float $_duration, Media $_image = null){
      $this->name = $_name;
      $this->year = $_year;
      $this->duration = $_duration;
      $this->image = $_image;
    }

    public function setImage(Media $_image) {
      $this->image = $_image;
    }
  }

?>