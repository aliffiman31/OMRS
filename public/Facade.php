<?php

require_once '../app/OMRS.dataaccess/Db_Connection_Manager.php';
require_once '../app/OMRS.dataaccess/Module5Repository.php';
require_once '../app/Controller/ApplicantController.php';
require_once '../app/ApplicationLayer/StaffView/Module2/StaffManageReligiousInfo.php';
require_once '../app/OMRS.dataaccess/Module2Repository.php';
//Module 1 --
require_once '../app/OMRS.dataaccess/Module1Repository.php';
require_once '../app/Controller/RegistrationController.php';
require_once '../app/Controller/ApplicantController.php';

// Create a new database connection
$db = (new Database())->connect();

//Module 1
$Module1Repository = new Module1Repository($db);

//Module 2
$FormModel1 = new Module2Repository($db);

//Module 5
$FormModel = new Module5Repository($db);

//Module 1
/*$registrationController = new RegistrationController($userAccModel, $applicantModel, $staffModel);
$loginController = new LoginController($userAccModel);
$resetPassword and changePassword Controller
$userProfileController = new UserProfileController($userAccModel, $applicantModel, $staffModel, $adminModel);*/

$FormController1 = new ApplicantController($FormModel1);


//$FormController = new ApplicantController($FormModel1);

$action = isset($_GET['action']) ? $_GET['action'] : '';


switch ($action) {
  
    //Module 1 (form from ApplicantRegFormPage.php)
    case 'registerApplicantAcc':
        $userIC = $_POST['userIC'];
        $appName = $_POST['appName'];
        $userType = $_POST['userType'];
        $appGender = $_POST['appGender'];
        $appPhoneNum = $_POST['appPhoneNo'];
        $appAddress = $_POST['appAddress'];
        $appEmail = $_POST['appEmail'];
        $userPassword = $_POST['userPassword'];
        
        $RegistrationController->registerApplicantFunction($userIC, $appName, $userType, $appGender, $appPhoneNum, $appAddress, $appEmail, $userPassword);
        break;

    case 'loginApplicantAcc':
        $userIC = $_POST['userIC'];
        $userPassword = $_POST['userPassword'];
        
        $LoginController->loginApplicantFunction($userIC, $userPassword);  //means dia akan read LoginController dan function loginFunction
        break;
    
    case 'loginStaffAcc':
        $userIC  = $_POST['userIC'];
        $userPassword = $_POST['userPassword'];
            
        $LoginController->loginStaffFunction($userIC, $userPassword);  //means dia akan read LoginController dan function loginFunction
        break;

    case 'loginAdminAcc':
        $userIC  = $_POST['userIC'];
        $userPassword = $_POST['userPassword'];
            
        $LoginController->loginAdminFunction($userIC, $userPassword);  //means dia akan read LoginController dan function loginFunction
        break;

    case 'registerStaffAcc':
        $userIC = $_POST['userIC'];
        $name = $_POST['staffName'];
        $department = $_POST['staffDepartmentName'];
        $accessCategory = $_POST['staffAccessCategory'];
        $email =$_POST['staffEmail'];
        $phoneNum = $_POST['staffPhoneNo'];

        $RegistrationController->staffRegisterFunction($ic, $name, $department, $accessCategory, $email, $phoneNum);
        break;


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


        //Module 3
        case 'unauthorizedmarriage':
            $ic = $_POST[ 'ApplicantPartner_IC'];
            $passport = $POST['ApplicantPartner_Passport'];
            $suratperakuan = $POST['Surat_Perakuan'];
            $pemastautinan = $POST['Surat_Pemastautinan'];
            $akuanSumpahBerkanun = $POST['Akuan_Sumpah_Berkanun'];
    
            $marriagetypeController->unauthorizedMarriageFunction($ic, $passport, $suratperakuan, $pemastautinan, $akuanSumpahBerkanun);
            break;
    
        case 'voluntarymarriage':
            $ic = $_POST[ 'ApplicantPartner_IC'];
            $photo = $_POST[' ApplicantPartner_Photo'];
            $onlineSlip = $_POST['Application_Slip'];
            $pemastautinan = $_POST['Surat_Pemastautinan'];
            $borangHIV = $_POST['Borang_HIV'];
    
            $marriagetypeController->voluntaryMarriageFunction($ic, $photo, $onlineSlip, $pemastautinan, $borangHIV);
            break;
    
        case 'applystatus':
            $ic =$_POST['userIC'];
            $date = $_POST['date'];
            $status = $_POST['status'];
            $Desc = $_POST['Description'];
    
            $marriagecertController->applystatus($ic, $date, $status, $Desc);
            break;
    default:
}
?>