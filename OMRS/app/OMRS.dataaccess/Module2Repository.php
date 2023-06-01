<?php 
class Module2Repository{

    private $connect;

    //Registration controller's constructor
    public function __construct($database) {
      $this->connect = $database;
    }


  //This function will insert name data in mySQL database
  public function FormDetail($office,$Venue,$Date,$Capacity,$Vacancy) {

    //syntax to insert into database
    $query = $this->connect->prepare("INSERT INTO staffreligiousinfo (office,Venue,Date,Capacity,Vacancy) VALUES (?,?,?,?,?)");
    $query->execute([$office,$Venue,$Date,$Capacity,$Vacancy]);

  }
}
?>