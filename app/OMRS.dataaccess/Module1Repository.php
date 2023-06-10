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
            $UserAcc_Id = uniqid();
            // Syntax to insert into useraccount
            $query = $this->connect->prepare("INSERT INTO UserAccount(UserAcc_Id, userIC, userPassowrd, userType) VALUES (:UserAcc_Id, :userIC, :userPassword, :userType)");
            $query->bindParam(':UserAcc_Id', $UserAcc_Id);
            $query->bindParam(':userIC', $userIC);
            $query->bindParam(':userPassword', $userPassword);
            $query->bindParam(':userType', $userType);

            $query->execute();

            return $UserAcc_Id; //return UserAcc_Id to registration controller
         }

         //table ApplicantInfo (register)
         public function addApplicantInfo($userIC, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail)
         {
            //syntax to insert into ApplicantInfo 
            $query = $this->connect->prepare("INSERT INTO ApplicantInfo (Applicant_IC, UserAcc_Id, appName, appGender, appPhoneNo, appAddress, appEmail) VALUES (:applicantIC, :userAccIC, :appName, :appGender, :appPhoneNo, :appAddress, :appEmail)");
            $query->bindParam(':applicantIC', $userIC);
            $query->bindParam(':userAccId', $UserAcc_Id);
            $query->bindParam(':appName', $appName);
            $query->bindParam(':appGender', $appGender);
            $query->bindParam(':appPhoneNo', $appPhoneNo);
            $query->bindParam(':appAddress', $appAddress);
            $query->bindParam(':appEmail', $appEmail);

            $query->execute();
            ?>
                <script>
                    alert('Akaun anda telah berjaya didaftar!');
                    window.location = '';
                </script>
            <?php
         }

         //table StaffInfo (register)
         public function addStaffInfo($Staff_Id, $UserAcc_Id, $staffName, $staffGender, $staffDepartmentName, $staffEmail, $staffPhoneNo)
         {
            $Staff_Id = uniqid();

            //syntax to insert into StaffInfo 
            $query = $this->connect->prepare("INSERT INTO StaffInfo (Staff_Id, UserAcc_Id, staffName, staffGender, staffDepartmentName, staffEmail, staffPhoneNo) VALUES (:staffId, :userAccId, :staffName, :staffGender, :staffDepartmentName, :staffEmail, :staffPhoneNo)");
            $query->bindParam(':staffId', $Staff_Id);
            $query->bindParam(':userAccId', $UserAcc_Id);
            $query->bindParam(':staffName', $staffName);
            $query->bindParam(':staffGender', $staffGender);
            $query->bindParam(':staffDepartmentName', $staffDepartmentName);
            $query->bindParam(':staffEmail', $staffEmail);
            $query->bindParam(':staffPhoneNo', $staffPhoneNo);
           
            $query->execute();
            ?>
                <script>
                    alert('Akaun telah berjaya didaftar!');
                    window.location = '';
                </script>
            <?php
         }          

         //login applicant account using mySQL database
         public function loginApplicantFunction($userIC, $userPassword) 
         {
            // Prepare SQL statement with placeholders to prevent SQL injection
            $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE UserIC = :applicantIC");
            $query->bindParam(":applicantIC", $userIC);
    
            // Execute SQL statement
            $query->execute();
    
            // Fetch user from result set
            $user = $query->fetch(PDO::FETCH_ASSOC);
    
            // Verify password
            if ($user && password_verify($userPassword, $user['userPassword'])) 
            {
               // Password is correct, start session
               session_start();
               $_SESSION['userAccId'] = $user['UserAcc_Id'];
               $_SESSION['currentUserIC'] = $user['userIC'];
               $_SESSION['currentUserType'] = $user['userType'];

               return true;
            } 
            else 
            {
                  //Password is incorrect or user not found
                return false;
            }
         }

         //login staff account using mySQL database
         public function loginStaffFunction($userIC, $userPassword) 
         {
            // Prepare SQL statement with placeholders to prevent SQL injection
            $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = :staffIC");
            $query->bindParam(":staffIC", $userIC);
    
            // Execute SQL statement
            $query->execute();
    
            // Fetch user from result set
            $user = $query->fetch(PDO::FETCH_ASSOC);
    
            // Verify password
            if ($user && password_verify($userPassword, $user['userPassword'])) 
            {
               // Password is correct, start session
               session_start();
               $_SESSION['userAccId'] = $user['UserAcc_Id'];
               $_SESSION['currentUserIC'] = $user['userIC'];
               $_SESSION['currentUserType'] = $user['userType'];

               return true;
            } 
            else 
            {
                  //Password is incorrect or user not found
                return false;
            }
         }

         //login admin account using mySQL database
         public function loginAdminFunction($Admin_Id, $userPassword) 
         {
            // Prepare SQL statement with placeholders to prevent SQL injection
            $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE UserAcc_Id = :adminId");
            $query->bindParam(":adminId", $Admin_Id);
    
            // Execute SQL statement
            $query->execute();
    
            // Fetch user from result set
            $user = $query->fetch(PDO::FETCH_ASSOC);
    
            // Verify password
            if ($user && password_verify($userPassword, $user['userPassword'])) 
            {
               // Password is correct, start session
               session_start();
               $_SESSION['UserAcc_Id'] = $user['UserAcc_Id'];
               $_SESSION['currentUserIC'] = $user['userIC'];
               $_SESSION['currentUserType'] = $user['userType'];

               return true;
            } 
            else 
            {
                  //Password is incorrect or user not found
                return false;
            }
         }

         //view profile (table ApplicantInfo)
         public function getApplicantProfileInfo($userIC)
         {
            $query = $this->connect->prepare("SELECT * FROM ApplicantInfo WHERE Applicant_IC = :userIC");
            $query->bindParam(':userIC', $userIC);

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
            $query = $this->connect->prepare("SELECT * FROM AdminInfo WHERE Account_Id = :adminId");
            $query->bindParam(':adminId', $Admin_Id);

            $query->execute();

            $adminProfileInfo = $query->fetch(PDO::FETCH_ASSOC);

            return $adminProfileInfo;
         }
    }
?>