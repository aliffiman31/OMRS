<?php

    

    class RegistrationController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }

        //applicant register function , $userType, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail, $userPassword
        public function applicantRegisterFunction($userIC)
        {
            //security purpose (Admin pon tak blh tgk password user kat mysql)
            //$hashed_password = password_hash($userPassword, PASSWORD_DEFAULT);

            //call createUserAcc function in userAccModel (table UserAccount),$userType, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail, $hashed_password
            $this->Module1Repository->createUserAcc($userIC);

        }


    }

?>