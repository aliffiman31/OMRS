<?php
    class Module1Repository
    {
        private $connect;

        //connect database
        public function __construct($database)
         {
            $this->connect = $database;
         }

         //Get user account data using UserAcc_Id (Foreign Key) -login
         public function getUserAccInfo($UserAcc_Id) 
         {
            // Prepare SQL statement with placeholders to prevent SQL injection
            $query = $this->connect->prepare("SELECT userIC, userType FROM UserAccount WHERE UserAcc_Id = :userAccId");
            $query->bindParam(':userAccId', $UserAcc_Id);            

            // Execute SQL statement
            $query->execute();

            //Store the result of user from mySQL
            $UserAccInfo = $query->fetch(PDO::FETCH_ASSOC);  

            return $UserAccInfo; //return to login controller
         }

         //table UserAccount
         public function createUserAcc($userIC, $userType, $userPassword)
         {
            // Syntax to insert into useraccount
            $query = $this->connect->prepare("INSERT INTO UserAccount(userIC, userPassowrd, userType) VALUES (:userIC, :userPassword, :userType)");
            $query->bindParam(':userIC', $userIC);
            $query->bindParam(':userPassword', $userPassword);
            $query->bindParam(':userType', $userType);

            $query->execute();
         }

         //table ApplicantInfo
         public function addApplicantInfo($Applicant_Id, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail)
         {
            //syntax to insert into Applicant 
            $query = $this->connect->prepare("INSERT INTO ApplicantInfo (Applicant_Id, UserAcc_Id, appName, appGender, appPhoneNo, appAddress, appEmail) VALUES (:applicantId, :userAccId, :appName, :appGender, :appPhoneNo, :appAddress, :appEmail)");
            $query->bindParam(':applicantId', $Applicant_Id);
            $query->bindParam(':userAccId', $UserAcc_Id);
            $query->bindParam(':appName', $appName);
            $query->bindParam(':appGender', $appGender);
            $query->bindParam(':appPhoneNo', $appPhoneNo);
            $query->bindParam(':appAddress', $appAddress);
            $query->bindParam(':appEmail', $appEmail);

            $query->execute();
            ?>
                <script>
                    alert('Successfully Registered');
                    window.location = '';
                </script>
            <?php
         }

         //view profile (table ApplicantInfo)
         public function getApplicantProfileInfo($Applicant_Id)
         {
            $query = $this->connect->prepare("SELECT * FROM ApplicantInfo WHERE Applicant_Id = :applicantId");
            $query->bindParam(':applicantId', $Applicant_Id);

            $query->execute();

            $appProfileInfo = $query->fetch(PDO::FETCH_ASSOC);

            return $appProfileInfo;
         }

         //view profile (table StaffInfo)
         public function getStaffProfileInfo($Staff_Id)
         {
            $query = $this->connect->prepare("SELECT * FROM StaffInfo WHERE Staff_Id = :staffId");
            $query->bindParam(':staffId', $Staff_Id);

            $query->execute();

            $staffProfileInfo = $query->fetch(PDO::FETCH_ASSOC);

            return $staffProfileInfo;
         }

         //view profile (table AdminInfo)
         public function getAdminProfileInfo($Admin_Id)
         {
            $query = $this->connect->prepare("SELECT * FROM AdminInfo WHERE Admin_Id = :adminId");
            $query->bindParam(':adminId', $Admin_Id);

            $query->execute();

            $adminProfileInfo = $query->fetch(PDO::FETCH_ASSOC);

            return $adminProfileInfo;
         }
    }
?>