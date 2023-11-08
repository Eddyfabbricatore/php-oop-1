<?php

  class TvSerie extends Production{
    public $aired_from_year;
    public $aired_to_year; 
    public $number_of_episodes;
    public $number_of_seasons; 

    public function __construct(string $_name, Media $_image = null, int $_aired_from_year, int $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons){
      $this->aired_from_year = $_aired_from_year;
      $this->aired_to_year = $_aired_to_year;
      $this->number_of_episodes = $_number_of_episodes;
      $this->number_of_seasons = $_number_of_seasons;
  
      parent::__construct($_name, $_image);
    }

    public function getInfo(){
      $tvSerieInfo = parent::getInfo();
      return "$tvSerieInfo Data uscita prima stagione: $this->aired_from_year <br> Data uscita ultima stagione: $this->aired_to_year <br> Numero di episodi totale: $this->number_of_episodes <br> Numero di stagioni: $this->number_of_seasons";
    }
  }

?>