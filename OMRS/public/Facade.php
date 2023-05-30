<?php

require_once '../app/OMRS.dataaccess/Db_Connection_Manager.php';
require_once '../app/OMRS.dataaccess/Module5Repository.php';
require_once '../app/Controller/ApplicantController.php';


// Create a new database connection
$db = (new Database())->connect();

$FormModel = new Module5Repository($db);
$FormController = new ApplicantController($FormModel);
$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
  
    //form from syaratpage.php
    case 'formregister':
        //input from form
        $names = $_POST['names'];

        //passing to controller with the function FormRegister(include parameter)
        $FormController->FormRegister($names);       
        break;
    default:

    }
?>