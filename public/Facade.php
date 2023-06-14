 <?php 

require_once '../app/OMRS.dataaccess/DB_Connection_Manager.php';
    /*require_once '../app/OMRS.dataaccess/Module5Repository.php';
require_once '../app/Controller/ApplicantController.php';
require_once '../app/ApplicationLayer/StaffView/Module2/StaffManageReligiousInfo.php';
require_once '../app/OMRS.dataaccess/Module2Repository.php';*/
//Module 1 
require_once '../app/OMRS.dataaccess/Module1Repository.php';
require_once '../app/Controller/RegistrationController.php';
require_once '../app/Controller/LoginController.php';
require_once '../app/Controller/PasswordController.php';
require_once '../app/Controller/ProfileController.php';

// Create a new database connection
$db = (new Database())->connect();

//Module 1
$Module1Repository = new Module1Repository($db);

//Module 2
//$Module2Repository = new Module2Repository($db);

    //Module 2
    /*$Module2Repository = new Module2Repository($db);
    $Module2Repository = new Module2Repository($db);
    $StaffManageMarriageCourseRequestController = new StaffManageMarriageCourseRequestController($Module2Repository);*/


//Module 1 (Create a new instance of the controller)
$RegistrationController = new RegistrationController($Module1Repository);
$LoginController = new LoginController($Module1Repository);
$PasswordController = new PasswordController($Module1Repository, $db);
$ProfileController = new ProfileController($Module1Repository);

//$ApplicantController = new MarriageCourseRequestController($Module2Repository);

//$FormController = new ApplicantController($FormModel1);

$action = isset($_GET['action']) ? $_GET['action'] : '';


switch ($action) {
  
    //Module 1 (form from ApplicantRegFormPage.php)
    case 'registerApplicantAcc':
        $userIC = $_POST['userIC'];
        $appName = $_POST['appName'];
        $userType = $_POST['userType'];
        $appGender = $_POST['appGender'];
        $appPhoneNo = $_POST['appPhoneNo'];
        $appAddress = $_POST['appAddress'];
        $appEmail = $_POST['appEmail'];
        $userPassword = $_POST['userPassword'];
        
        $RegistrationController->registerApplicantFunction($userIC, $appName, $userType, $appGender, $appPhoneNo, $appAddress, $appEmail, $userPassword);
        break;

    case 'registerStaffAcc':
        $userIC = $_POST['userIC'];
        $staffName = $_POST['staffName'];
        $staffGender = $_POST['staffGender'];
        $staffDepartmentName = $_POST['staffDepartmentName'];
        $userType = $_POST['userType'];
        $staffEmail =$_POST['staffEmail'];
        $staffPhoneNo = $_POST['staffPhoneNo'];
        $userPassword = $_POST['userPassword'];
    
        $RegistrationController->staffRegisterFunction($userIC, $staffName, $staffGender, $staffDepartmentName, $userType, $staffEmail, $staffPhoneNo, $userPassword);
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

    case 'forgotPasswordApplicant':
        $userIC = $_POST['userIC'];
        $appEmail = $_POST['appEmail'];

        $PasswordController->passwordFunctionApplicant($userIC, $appEmail);

    case 'forgotPasswordStaff':
        $userIC = $_POST['userIC'];
        $staffEmail = $_POST['staffEmail'];

        $PasswordController->passwordFunctionStaff($userIC, $staffEmail);

        break;

        case 'forgotPasswordAdmin':
        $userIC = $_POST['userIC'];
        $staffEmail = $_POST['adminEmail'];

        $PasswordController->passwordFunctionAdmin($userIC, $adminEmail);

        break;

        case 'viewProfile':
        $from = isset($_GET['from']) ? $_GET['from'] : '';

        $ProfileController->viewProfileFunction($from);
        break;

        //module 2
        case 'ReligiousInfo':
            // Retrieve form data
            $office = $_POST['office'];
            $venue = $_POST['Venue'];
            $date = $_POST['Date'];
            $capacity = $_POST['Capacity'];
            $vacancy = $_POST['Vacancy'];
            $speakerName = $_POST['speakerName'];
            $MCcertificate = $_FILES['MCcertificate'];
            // Call the controller method to insert the form data
            $StaffManageMarriageCourseRequestController = new StaffManageMarriageCourseRequestController($Module2Repository);
            $StaffManageMarriageCourseRequestController->insertForm($office, $venue, $date, $capacity, $vacancy, $speakerName, $MCcertificate);

        break;
      


    //form from syaratpage.php
   /* case 'ReligiousInfo':
        //input from form
         $office = $_POST['office'];
         $Venue = $_POST['Venue'];
         $Date = $_POST['Date'];
         $Capacity = $_POST['Capacity'];
         $Vacancy = $_POST['Vacancy'];

        //passing to controller with the function FormRegister(include parameter)
        $ApplicantController->formReligiousInfo($office,$Venue,$Date,$Capacity,$Vacancy);       
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
            break;*/
    default:
}
?>