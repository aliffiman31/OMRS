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

         //login applicant account using mySQL database
         /*public function loginApplicantAcc($userIC, $userPassword, $userType) 
         {
            // Prepare SQL statement with placeholders to prevent SQL injection
            $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = :applicantIC AND userType = :pemohon");
            $query->bindParam(":applicantIC", $userIC);
            $query->bindParam(":pemohon", $userType);

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
               $_SESSION['currentUserType'] = $user['pemohon'];

               return true;
            } 
            else 
            {
                  //Password is incorrect or user not found
                return false;
            }
         }*/

// login applicant account using mySQL database
/*public function loginApplicantAcc($userIC, $userPassword)
{
    // Prepare SQL statement with placeholders to prevent SQL injection
    $query = $this->connect->prepare("SELECT userIC, userPassword, userType = Pemohon FROM UserAccount WHERE userIC =:Applicant_IC");
    $query->bindParam(":Applicant_IC", $userIC);

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
        // Password is incorrect or user not found
        return false;
    }
}*/

/*public function loginApplicantAcc($userIC, $userPassword)
{
    // Prepare SQL statement with placeholders to prevent SQL injection
    $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = ? AND userPassword = ?");
    
    // Execute SQL statement with values
    $query->execute([$userIC, $userPassword]);

    // Fetch user from result set
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // Verify password
    if ($user && password_verify($userPassword, $user['userPassword'])) 
    {
        // Password is correct, start session
        session_start();

        $_SESSION['currentUserIC'] = $user['userIC'];
       
        return true;
    } 
    else 
    {
        // Password is incorrect or user not found
        return false;
    }


}*/

    /*public function loginApplicantAcc($userIC, $userPassword)
    {
        // Prepare SQL statement with placeholders to prevent SQL injection
        $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = :userIC");

        // Bind the parameter
        $query->bindParam(':userIC', $userIC);

        // Execute the query
        $query->execute();

        // Fetch all rows from the result set
        $userIC = $query->fetchAll(PDO::FETCH_ASSOC);

        // Verify password
        foreach ($userIC as $user) {
            if (password_verify($userPassword, $user['userPassword'])) {
                // Password is correct, start session
                session_start();

                $_SESSION['currentUserIC'] = $user['userIC'];

                return true;
            }
        }

        // Password is incorrect or user not found
        return false;
    }*/

   /* public function loginApplicantAcc($userIC, $userPassword)
   {
    // Prepare SQL statement with placeholders to prevent SQL injection
    $query = $this->connect->prepare("SELECT * FROM UserAccount");

    // Execute the query
    $query->execute();

    // Fetch all rows from the result set
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    // Iterate over each user to check userIC and userPassword
    foreach ($users as $user) {
        if ($userIC == $user['userIC'] && password_verify($userPassword, $user['userPassword'])) {
            // UserIC and password are correct, start session
            session_start();

            $_SESSION['currentUserIC'] = $user['userIC'];

            return true;
        }
    }

    // UserIC or password is incorrect or user not found
    return false;
}*/

public function loginApplicantAcc($userIC, $userPassword) {
   $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = :userIC");
   $query->bindParam(':userIC', $userIC);
   $query->execute();
   $result = $query->fetch();

   // Check if the user exists in the database
   if ($result) {
       // User found, verify the password
       $hashedPassword = $result['userPassword'];
       if (password_verify($userPassword, $hashedPassword)) {
           // Password verified, set the user session
           session_start();

           $_SESSION['UserAcc_Id'] = $result['UserAcc_Id'];
           $_SESSION['currentUserIC'] = $result['userIC'];
           $_SESSION['currentUserType'] = $result['userType'];

           return true;
       }
   }

   // User not found or password doesn't match, display an error message
   return false;
}






         //login staff account using mySQL database
         public function loginStaffAcc($userIC, $userPassword) 
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
               //$_SESSION['currentUserType'] = $user['userType'];

               return true;
            } 
            else 
            {
                  //Password is incorrect or user not found
                return false;
            }
         }

         //login admin account using mySQL database
         /*public function loginAdminAcc($Admin_Id, $userPassword) 
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
         }*/

        /* public function loginAdminAcc($userIC, $userPassword)
      {
    // Prepare SQL statement with placeholders to prevent SQL injection
    $query = $this->connect->prepare("SELECT * FROM UserAccount");

    // Execute the query
    $query->execute();

    // Fetch all rows from the result set
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    // Iterate over each user to check userIC and userPassword
    foreach ($users as $user) {
        if ($userIC == $user['userIC'] && password_verify($userPassword, $user['userPassword'])) {
            // UserIC and password are correct, start session
            session_start();

            $_SESSION['currentUserIC'] = $user['userIC'];

            return true;
        }
    }

    // UserIC or password is incorrect or user not found
    return false;
}*/

/*public function loginAdminAcc($userIC, $userPassword){
   $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = '$userIC AND userPassword = '$userPassword'");


// Check if the user exists in the database
if ($query->num_rows > 0) {
    // User found, set the user session
    $row = $query->fetch_assoc();
    $userIC = $row['userIC'];
    $userPassword = $row['userPassword'];
    
    session_start();

    //Redirect to dashboardUser.php
    echo "<script>window.location.href = 'dashboardUser.php';</script>";
    exit();
} else {
    // User not found or role doesn't match, display an error message
    echo "User Not found";
}
}*/

//version yg paling bagus
/*public function loginAdminAcc($userIC, $userPassword) {
   $query = $this->connect->prepare("SELECT * FROM UserAccount WHERE userIC = :userIC AND userPassword = :userPassword");
   $query->bindParam(':userIC', $userIC);
   $query->bindParam(':userPassword', $userPassword);
   $query->execute();
   $result = $query->fetchAll();

   // Check if the user exists in the database
   if (count($result) > 0) {
       // User found, set the user session
       $row = $result[0];
       $userIC = $row['userIC'];
       $userPassword = $row['userPassword'];

       session_start();

       return true;
   } else {
       // User not found or role doesn't match, display an error message
       return false;
   }
}*/

public function loginAdminAcc($userIC, $userPassword) {
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
   } else {
       // User not found or password doesn't match, display an error message
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
            $query = $this->connect->prepare("SELECT * FROM AdminInfo WHERE userIC = :adminId");
            $query->bindParam(':adminId', $Admin_Id);

            $query->execute();

            $adminProfileInfo = $query->fetch(PDO::FETCH_ASSOC);

            return $adminProfileInfo;
         }

         
    }
?>