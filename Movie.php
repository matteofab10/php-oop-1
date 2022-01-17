
<?php

class Movie {
  public $title;
  public $date;
  public $genre;
  public $vote;
  public $description;



  function __construct($_title, $_date, $_genre, $_vote, $_description)
  {
    $this->title = $_title;
    $this->date = $_date;
    $this->genre = $_genre;
    $this->vote = $_vote;
    $this->description = $_description;
  }

  public function getExcept(){
    return substr($this->description,0,30). "...";
  }
}