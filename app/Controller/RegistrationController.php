<?php
    class RegistrationController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }

        //applicant register function 
        public function registerApplicantFunction($Applicant_Id, $userIC, $userType, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail, $userPassword)
        {
            //security purpose (Admin pon tak blh tgk password user kat mysql)
            $hashed_password = password_hash($userPassword, PASSWORD_DEFAULT);

            //call createUserAcc function in userAccModel (table UserAccount)
            $UserAcc_Id = $this->Module1Repository->createUserAcc($userIC, $hashed_password, $userType);

            //(dlm table Applicant)
            $this->addApplicantInfo($Applicant_Id, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail);
        }

        public function addApplicantInfo($Applicant_Id, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail)
        {
            //call addApplicantInfo function in applicantModel (table Applicant)
            $this->Module1Repository->addApplicantInfo($Applicant_Id, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail);
        }
    }
?>