<?php 
class Module5Repository{

    private $connect;

    //Registration controller's constructor
    public function __construct($database) {
      $this->connect = $database;
    }


}
?>