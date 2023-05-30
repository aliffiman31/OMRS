<?php

class ApplicantController{

private $FormModel;

public function __construct($FormModel) {
    $this->FormModel = $FormModel;

  }

  //Applicant account register function
  public function FormRegister($ic) {
    
    //link to function in module5 Model/repository
    $this->FormModel->FormDetail($ic);

    ?>

    <!-- Execute this if above syntax successfully executed -->
    <script>
        alert("Successfully Registered");

        //redirect to test.php
        window.location = "../../app/ApplicationLayer/ApplicantView/module5/test.php";
      </script>
  <?php
}
}
?>