<?php

class ApplicantController{

private $FormModel1;


public function __construct($FormModel1) {
    $this->FormModel1 = $FormModel1;

  }
public function formReligiousInfo($office,$Venue,$Date,$Capacity,$Vacancy){

  $this->FormModel1->FormDetail($office,$Venue,$Date,$Capacity,$Vacancy);

}
}
?>