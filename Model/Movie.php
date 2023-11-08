<?php

  class Movie extends Production{
    public $published_year;
    public $running_timedurata;

    public function __construct(string $_name, Media $_image = null, int $_published_year, string $_running_timedurata){
      $this->published_year = $_published_year;
      $this->running_timedurata = $_running_timedurata;
  
      parent::__construct($_name, $_image);
    }

    public function getInfo(){
      $movieInfo = parent::getInfo();
      return "$movieInfo Anno di pubblicazione: $this->published_year <br> Durata: $this->running_timedurata";
    }
  }

?>