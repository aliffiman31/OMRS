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

public function SuamiFormRegister($jenispekerjaansuami, $namamajikansuami, $namapekerjaansuami, $alamatmajikansuami, $pendapatansuami, $poscodesuami, $banksuami, $negerisuami, $akaunsuami, $bandarsuami) {
  $this->FormModel->SuamiFormDetail($jenispekerjaansuami, $namamajikansuami, $namapekerjaansuami, $alamatmajikansuami, $pendapatansuami, $poscodesuami, $banksuami, $negerisuami, $akaunsuami, $bandarsuami);
  
  // Redirect back to the same page
  header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}

public function IsteriFormRegister($jenispekerjaanisteri,$namamajikanisteri,$namapekerjaanisteri,
$alamatmajikanisteri,$pendapatanisteri,$poscodeisteri,$bankisteri,$negeristeri,$akaunisteri,$bandaristeri) {
  $this->FormModel->IsteriFormDetail($jenispekerjaanisteri,$namamajikanisteri,$namapekerjaanisteri,
  $alamatmajikanisteri,$pendapatanisteri,$poscodeisteri,$bankisteri,$negeristeri,$akaunisteri,$bandaristeri);
  
  // Redirect back to the same page
  header("Location: " . $_SERVER['HTTP_REFERER']);
  exit;
}



public function retrieveSuamiFormData() {
  $formData = $this->FormModel->retrieveSuamiFormData();

  // Return the form data as JSON
  echo json_encode($formData);
  exit;
}

}
?>