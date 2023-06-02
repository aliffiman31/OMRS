<?php

class ApplicantController{

private $FormModel1;


public function __construct($FormModel1) {
    $this->FormModel1 = $FormModel1;

  }

  //Applicant account register function
  public function FormRegister($ic) {
    
    //link to function in module5 Model/repository
    $this->FormModel1->FormDetail($ic);

    ?>

    <!-- Execute this if above syntax successfully executed -->
    <script>
        alert("Successfully Registered");

        //redirect to test.php
        window.location = "../../app/ApplicationLayer/ApplicantView/module5/test.php";
      </script>
  <?php
}
public function formReligiousInfo($office,$Venue,$Date,$Capacity,$Vacancy){

  $this->FormModel1->FormDetail($office,$Venue,$Date,$Capacity,$Vacancy);

}
}
?>