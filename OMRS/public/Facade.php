<?php

require_once '../app/OMRS.dataaccess/Db_Connection_Manager.php';
require_once '../app/OMRS.dataaccess/Module5Repository.php';
require_once '../app/Controller/ApplicantController.php';
require_once '../app/ApplicationLayer/ApplicantView/module5/mohon.php';


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

    case 'suamijobform':
        $jenispekerjaansuami = $_POST['jenis-pekerjaan-suami'];
        $namamajikansuami = $_POST['nama-majikan-suami'];
        $namapekerjaansuami = $_POST['nama-pekerjaan-suami'];
        $alamatmajikansuami = $_POST['alamat-majikan-suami'];
        $pendapatansuami = $_POST['pendapatan-suami'];
        $poscodesuami = $_POST['poscode-suami'];
        $banksuami = $_POST['bank-suami'];
        $negerisuami = $_POST['negeri-suami'];
        $akaunsuami = $_POST['akaun-suami'];
        $bandarsuami = $_POST['bandar-suami'];

        $FormController->SuamiFormRegister($jenispekerjaansuami,$namamajikansuami,$namapekerjaansuami,
        $alamatmajikansuami,$pendapatansuami,$poscodesuami,$banksuami,$negerisuami,$akaunsuami,$bandarsuami);
        break;

        case 'isterijobform':
            $jenispekerjaanisteri = $_POST['jenis-pekerjaan-isteri'];
            $namamajikanisteri = $_POST['nama-majikan-isteri'];
            $namapekerjaanisteri = $_POST['nama-pekerjaan-isteri'];
            $alamatmajikanisteri = $_POST['alamat-majikan-isteri'];
            $pendapatanisteri = $_POST['pendapatan-isteri'];
            $poscodeisteri = $_POST['poscode-isteri'];
            $bankisteri = $_POST['bank-isteri'];
            $negeristeri = $_POST['negeri-isteri'];
            $akaunisteri = $_POST['akaun-isteri'];
            $bandaristeri = $_POST['bandar-isteri'];
    
            $FormController->IsteriFormRegister($jenispekerjaanisteri,$namamajikanisteri,$namapekerjaanisteri,
            $alamatmajikanisteri,$pendapatanisteri,$poscodeisteri,$bankisteri,$negeristeri,$akaunisteri,$bandaristeri);
            break;

            case 'retrieveSuamiFormData':
                $suamiFormData = $FormController->retrieveSuamiFormData();
                echo json_encode($suamiFormData);
                break;

    }
?>