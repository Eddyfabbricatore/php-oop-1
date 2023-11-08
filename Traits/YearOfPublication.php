<?php

  trait YearOfPublication{
    public $yearPublication;

    public function getYear(){
      return $this->$yearPublication;
    }
  }

?>