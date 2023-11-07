<?php

  class Movie extends Production{
    public $published_year;
    public $running_timedurata;

    public function __construct(string $_name, Media $_image = null, int $_published_year, float $_running_timedurata){
      $this->published_year = $_published_year;
      $this->running_timedurata = $_running_timedurata;
  
      parent::__construct( $_name, $_image);
    }
  }

?>