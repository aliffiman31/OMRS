<?php

require_once '../app/OMRS.dataaccess/Db_Connection_Manager.php';
require_once '../app/OMRS.dataaccess/Module5Repository.php';
require_once '../app/Controller/ApplicantController.php';
require_once '../app/ApplicationLayer/StaffView/Module2/StaffManageReligiousInfo.php';
require_once '../app/OMRS.dataaccess/Module2Repository.php';


// Create a new database connection
$db = (new Database())->connect();

$FormModel = new Module5Repository($db);
$FormModel1 = new Module2Repository($db);
$FormController = new ApplicantController($FormModel1);
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
  
    //form from syaratpage.php
    case 'ReligiousInfo':
        //input from form
        $office = $_POST['office'];
        $Venue = $_POST['Venue'];
        $Date = $_POST['Date'];
        $Capacity = $_POST['Capacity'];
        $Vacancy = $_POST['Vacancy'];

        //passing to controller with the function FormRegister(include parameter)
        $FormController->formReligiousInfo($office,$Venue,$Date,$Capacity,$Vacancy);       
        break;
    default:
}
?>