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
            $stmt = $this->connect->prepare('SELECT userIC, userType FROM UserAccount WHERE UserAcc_Id = :id');
            $stmt->bindParam(':id', $UserAcc_Id);

            // Execute SQL statement
            $stmt->execute();

            //Store the result of user from mySQL
            $UserAccInfo = $stmt->fetch(PDO::FETCH_ASSOC);  

            return $UserAccInfo; //return to login controller
         }

         //table UserAccount
         public function createUserAcc($userIC ,$userType,$userPassword)
         {
            //syntax to insert into useraccount                
            $query = $this->connect->prepare("INSERT INTO UserAccount(UserAcc_Id, userIC, userPassowrd, userType) VALUES (?, ?, ?)");
            $query->execute([$userIC, $userType, $userPassword]);
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

    }
?>