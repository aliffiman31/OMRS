<?php
    class Module1Repository
    {
        private $connect;

        //connect database
        public function __construct($database)
         {
            $this->connect = $database;
         }

         // Get user account data using UserAcc_Id (Foreign Key) - login
         public function getUserAccInfo($UserAcc_Id) 
         {
            $query = $this->connect->prepare("SELECT userIC, userType FROM UserAccount WHERE UserAcc_Id = :userAccId");
            $query->bindParam(':userAccId', $UserAcc_Id);            

            $query->execute();

            $UserAccInfo = $query->fetch(PDO::FETCH_ASSOC);  

            return $UserAccInfo; // return to login controller
         }

         // table UserAccount
         public function createUserAcc($userIC, $userType, $userPassword)
         {
            $UserAcc_Id = uniqid();

            $query = $this->connect->prepare("INSERT INTO UserAccount (UserAcc_Id, userIC, userPassword, userType) VALUES (?, ?, ?, ?)");
            $query->execute([$UserAcc_Id, $userIC, $userType, $userPassword]);

            return $UserAcc_Id; // return UserAcc_Id to registration controller
         }

         // table ApplicantInfo (register)
         public function addApplicantInfo($userIC, $UserAcc_Id, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail)
         {
            // Check if the UserAcc_Id exists in UserAccount table
            $query = $this->connect->prepare("SELECT UserAcc_Id FROM UserAccount WHERE UserAcc_Id = ?");
            $query->execute([$UserAcc_Id]);

            
            if ($query->rowCount() > 0) {
            
            // UserAcc_Id exists, proceed with insertion                                                                                 
            $query = $this->connect->prepare("INSERT INTO ApplicantInfo (Applicant_IC, UserAcc_Id, appName, appGender, appPhoneNo, appAddress, appEmail) VALUES (?, ?, ?, ?, ?, ?, ?)");
                                          
            return $query->execute([$userIC, $UserAcc_Id,  $appName, $appGender, $appPhoneNo, $appAddress, $appEmail]); 
            }

            else
            {
               throw new Exception('Invalid UserAcc_Id');
            }
         }

         //table StaffInfo (register)
         public function addStaffInfo($Staff_Id, $UserAcc_Id, $staffName, $staffGender, $staffDepartmentName, $staffEmail, $staffPhoneNo)
         {
            $Staff_Id = uniqid();

            // Check if the UserAcc_Id exists in UserAccount table
            $query = $this->connect->prepare("SELECT UserAcc_Id FROM UserAccount WHERE UserAcc_Id = ?");
            $query->execute([$UserAcc_Id]);

            //dia read else statement
            if ($query->rowCount() > 0) {

            //syntax to insert into StaffInfo 
            $query = $this->connect->prepare("INSERT INTO StaffInfo (Staff_Id, UserAcc_Id, staffName, staffGender, staffDepartmentName, staffEmail, staffPhoneNo) VALUES (?, ?, ?, ?, ?, ?, ?)");
           
            //return to registration controller
            return $query->execute([$Staff_Id, $UserAcc_Id, $staffName, $staffGender, $staffDepartmentName, $staffEmail, $staffPhoneNo]); 
            }
         }          

         public function loginApplicantAcc($userIC, $userPassword) 
         {
            $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = :userIC AND userPassword = :userPassword");
            $query->bindParam(':userIC', $userIC);
            $query->bindParam(':userPassword', $userPassword);
            $query->execute();
            $result = $query->fetchAll();
 
            // Check if the user exists in the database
            if (count($result) > 0) {
            // User found, set the user session
            $row = $result[0];
 
            session_start();
 
            $_SESSION['UserAcc_Id'] = $row['UserAcc_Id'];
            $_SESSION['currentUserIC'] = $row['userIC'];
            $_SESSION['currentUserType'] = $row['userType'];
 
            return true;
            } 
            else 
            {
                // User not found or password doesn't match, display an error message
                return false;
            }
        }

         //login staff account using mySQL database
         public function loginStaffAcc($userIC, $userPassword) 
         {
            $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = :userIC AND userPassword = :userPassword");
            $query->bindParam(':userIC', $userIC);
            $query->bindParam(':userPassword', $userPassword);
            $query->execute();
            $result = $query->fetchAll();

            // Check if the user exists in the database
            if (count($result) > 0) {
            // User found, set the user session
            $row = $result[0];

            session_start();

            $_SESSION['UserAcc_Id'] = $row['UserAcc_Id'];
            $_SESSION['currentUserIC'] = $row['userIC'];
            $_SESSION['currentUserType'] = $row['userType'];

            return true;
            } 
            else 
            {
                // User not found or password doesn't match, display an error message
                return false;
            }
        }

         public function loginAdminAcc($userIC, $userPassword) 
         {
            $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = :userIC AND userPassword = :userPassword");
            $query->bindParam(':userIC', $userIC);
            $query->bindParam(':userPassword', $userPassword);
            $query->execute();
            $result = $query->fetchAll();

            // Check if the user exists in the database
            if (count($result) > 0) {
            // User found, set the user session
            $row = $result[0];

            session_start();

            $_SESSION['UserAcc_Id'] = $row['UserAcc_Id'];
            $_SESSION['currentUserIC'] = $row['userIC'];
            $_SESSION['currentUserType'] = $row['userType'];

            return true;
            } 
            else 
            {
                // User not found or password doesn't match, display an error message
                return false;
            }
        }

        public function changePassword($userIC, $userPassword, $newPassword)
        {
            $query = $this->connect->prepare("UPDATE UserAccount SET userPassword = :newPassword WHERE userIC = :userIC AND userPassword = :userPassword");
            $query->bindParam(':newPassword', $newPassword);
            $query->bindParam(':userIC', $userIC);
            $query->bindParam(':userPassword', $userPassword);
            $query->execute();
     
            // Check if the update was successful
            if ($query->rowCount() > 0) 
            {
               $_SESSION['passwordUpdateSuccess'] = true;
            } 
            else 
            {
               $_SESSION['passwordUpdateError'] = true;
            }
         }

         //view profile (table ApplicantInfo)
         public function getApplicantProfileInfo($Applicant_IC)
         {
            $query = $this->connect->prepare("SELECT * FROM ApplicantInfo WHERE Applicant_IC = :userIC");
            $query->bindParam(':userIC', $Applicant_IC);

            $query->execute();

            $profileInfo = $query->fetch(PDO::FETCH_ASSOC);

            return $profileInfo;  
         }

         //view profile (table StaffInfo)
         public function getStaffProfileInfo($Staff_Id)
         {
            $query = $this->connect->prepare("SELECT * FROM StaffInfo WHERE Staff_Id = :staffId");
            $query->bindParam(':staffId', $Staff_Id);

            $query->execute();

            $profileInfo = $query->fetch(PDO::FETCH_ASSOC);

            return $profileInfo;
         }

         //view profile (table AdminInfo)
         public function getAdminProfileInfo($Admin_Id)
         {
            $query = $this->connect->prepare("SELECT * FROM AdminInfo WHERE userIC = :adminId");
            $query->bindParam(':adminId', $Admin_Id);

            $query->execute();

            $profileInfo = $query->fetch(PDO::FETCH_ASSOC);

            return $profileInfo;
         }

         //Update applicant data using user ic 
         public function updateAppProfileInfo($appPhoneNo, $appEmail, $appAddress) 
         {
               //session_start();
               $Applicant_IC = $_SESSION['currentUserIC'];

                // Prepare your update statement
                $sql = "UPDATE ApplicantInfo SET appPhoneNo = :appPhoneNo, appEmail = :appEmail, appAddress = :appAddress WHERE Applicant_IC = :ic";

               // Prepare the statement
               $stmt = $this->connect->prepare($sql);

               // Bind parameters
               $stmt->bindParam(':appPhoneNo', $appPhoneNo);
               $stmt->bindParam(':appEmail', $appEmail);
               $stmt->bindParam(':appAddress', $appAddress);
               $stmt->bindParam(':ic', $Applicant_IC);

               // Execute the statement
               if ($stmt->execute() === TRUE) {
                  return true;  //return back to ProfileController

               } else {
      
               return false;
            }
         }  
    }
?>