<?php 
class Module5Repository{

    private $connect;

    //Registration controller's constructor
    public function __construct($database) {
      $this->connect = $database;
    }


  //This function will insert name data in mySQL database
  public function FormDetail($names) {

    //syntax to insert into database
    $query = $this->connect->prepare("INSERT INTO trying(fullname) VALUES (?)");
    $query->execute([$names]);

  }
}
?>