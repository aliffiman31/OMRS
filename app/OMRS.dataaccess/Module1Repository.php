<?php
    class Module1Repository
    {
        private $connect;

        //connect database
        public function __construct($database)
         {
            $this->connect = $database;
         }

         //table UserAccount
         public function createUserAcc($userIC ,$userType, $hashed_password)
         {
            //syntax to insert into useraccount                
            $query = $this->connect->prepare("INSERT INTO useraccount(userIC, userPassowrd, userType) VALUES (?, ?, ?)");
            $query->execute([$userIC, $userType, $hashed_password]);
         }

         //table Applicant
         public function addApplicantInfo($Applicant_Id, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail)
         {
            //syntax to insert into Applicant 
            $query = $this->connect->prepare("INSERT INTO applicant(Applicant_Id, UserAcc_Id, appName, appGender, appPhoneNo, appAddress, appEmail) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $query->execute([$Applicant_Id, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail]);

            ?>
                <script>
                    alert('Successfully Registered');
                    window.location = '';
                </script>
            <?php
         }


         //login (dia akan read je dari table UserAccount which is userIC, password)







    }
?>