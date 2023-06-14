<?php
    class PasswordController
    {
        private $connect;
        private $Module1Repository;

        public function __construct($Module1Repository, $db) 
        {
            $this->Module1Repository = $Module1Repository;
            $this->connect = $db;
        }

        function passwordFunctionApplicant($userIC, $appEmail)
        {
            $query = "SELECT * FROM UserAccount WHERE userIC = :ic";
            $query = $this->connect->prepare($query);
            $query->bindParam(':ic', $userIC);
            $query->execute();

            if ($query->rowCount() > 0) {
            // Generate a random password
            $newPassword = $this->generateRandomPassword();

            //Update applicant password in the database
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateQuery = "UPDATE UserAccount SET userPassword = :password WHERE userIC = :ic";
            $stmt = $this->connect->prepare($updateQuery);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':ic', $userIC);
            $stmt->execute();

            // Set SMTP and smtp_port settings
            ini_set('SMTP', 'localhost');
            ini_set('smtp_port', '25');

            // Send new password to the applicant email   
            $emailTitle = 'Kata Laluan Baharu';
            $emailMessage = 'Kata laluan baharu anda adalah seperti yang tertera: ' . $newPassword;
            $emailHeader = 'From: your-email@example.com' . "\r\n" .
                'Reply-To: your-email@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            $sent = mail($appEmail, $emailTitle, $emailMessage, $emailHeader);

            if ($sent) {
                echo 'Sila lihat e-mel anda. Kata laluan telah dihantar ke e-mel anda.';
            } else {
            echo 'Maaf, proses tukar kata laluan anda gagal.';
            }
            } else {
            echo 'E-mel anda tiada dalam sistem. Sila isi e-mel anda yang SAH.';
            }
        }


        function passwordFunctionStaff($userIC, $staffEmail)
        {
            $query = "SELECT * FROM UserAccount WHERE userIC = :ic";
            $query = $this->connect->prepare($query);
            $query->bindParam(':ic', $userIC);
            $query->execute();
                
        
            if ($query->rowCount() > 0) 
            {
                // Generate a random password
                $newPassword = $this->generateRandomPassword();
        
                // Update applicant password in the database
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE UserAccount SET userPassword = :password WHERE userIC = :ic";
                $stmt = $this->connect->prepare($updateQuery);
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->bindParam(':ic', $userIC);
                $stmt->execute();
        
                // Send new password to the applicant email   
                $emailTitle = 'Kata Laluan Baharu';
                $emailMessage = 'Kata laluan baharu anda adalah seperti yang tertera ' . $newPassword;
                $emailHeader = 'From: your-email@example.com' . "\r\n" .
                        'Reply-To: your-email@example.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
        
                $sent = mail($staffEmail, $emailTitle, $emailMessage, $emailHeader);
                
                if ($sent) 
                {
                    echo 'Sila lihat e-mel anda. Kata laluan telah dihantar ke e-mel anda.';
                } 
                else 
                {
                    echo 'Maaf, proses tukar kata laluan anda gagal.';
                }
            }
            else 
            {
                echo 'E-mel anda tiada dalam sistem. Sila isi e-mel anda yang SAH.';
            }
        }

        function passwordFunctionAdmin($userIC, $adminEmail)
        {
            $query = "SELECT * FROM UserAccount WHERE userIC = :ic";
            $query = $this->connect->prepare($query);
            $query->bindParam(':ic', $userIC);
            $query->execute();
                
        
            if ($query->rowCount() > 0) 
            {
                // Generate a random password
                $newPassword = $this->generateRandomPassword();
        
                // Update applicant password in the database
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateQuery = "UPDATE UserAccount SET userPassword = :password WHERE userIC = :ic";
                $stmt = $this->connect->prepare($updateQuery);
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->bindParam(':ic', $userIC);
                $stmt->execute();
        
                // Send new password to the applicant email   
                $emailTitle = 'Kata Laluan Baharu';
                $emailMessage = 'Kata laluan baharu anda adalah seperti yang tertera ' . $newPassword;
                $emailHeader = 'From: your-email@example.com' . "\r\n" .
                        'Reply-To: your-email@example.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
        
                $sent = mail($adminEmail, $emailTitle, $emailMessage, $emailHeader);
                
                if ($sent) 
                {
                    echo 'Sila lihat e-mel anda. Kata laluan telah dihantar ke e-mel anda.';
                } 
                else 
                {
                    echo 'Maaf, proses tukar kata laluan anda gagal.';
                }
            }
            else 
            {
                echo 'E-mel anda tiada dalam sistem. Sila isi e-mel anda yang SAH.';
            }
        }

        //generate a random password
        function generateRandomPassword()
         {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $password = ' ';
            $length = 20;

            for ($i = 0; $i < $length; $i++) 
            {
                $password .= $characters[rand(0, strlen($characters) - 1)];
            }
                return $password;
        }  


        function changePasswordFunction($userIC, $newPassword)
        {
             //Send the input to Module1Repository to verify the user 
             if($this->Module1Repository->changePassword($userIC, $newPassword))
             {
                 ?>
                 <script>
                     alert("Kata Laluan anda telah ditukar");
                     window.location = "../app/ApplicationLayer/ApplicantView/module1/ApplicantLoginPage.php";
                 </script>
                 <?php 
                 //header("Location: index.php?action=viewProfile&from=view");
             }
             else
             {
                 //If the user not exists, it will show error message 
             ?>
                 <script>
                     alert("No Kad Pengenalan anda TIDAK SAH");
                     window.location = "../app/ApplicationLayer/StaffView/module1/StaffLoginPage.php";
                 </script>
             <?php
             }

        }

        //Retrieve data to view
        public function viewProfileFunction($from) {
            
            session_start();
            $usertype = $_SESSION['currentUserType'] ;
            
            if($usertype == "Pemohon"){

                $ic = $_SESSION['currentUserIC'];
                $user = $this->Module1Repository->getApplicantProfileInfo($ic);

                if($from == 'view'){
                    header('Location: ../app/View/ManageUserProfile/viewApplicantProfileDetailsView.php?returnInfo='.  urlencode(serialize($user)));

                }else if($from == 'edit'){
                    header('Location: ../app/View/ManageUserProfile/editApplicantProfileDetailsView.php?returnInfo='.  urlencode(serialize($user)));
                    
                }
                

            }elseif($usertype == "Kakitangan"){

                $id = $_SESSION['accountId'];
                $user = $this->Module1Repository->getStaffProfileInfo($id);
                echo $user['StaffName'];

                if($from == 'view'){
                    header('Location: ../app/View/ManageUserProfile/viewStaffProfileDetailsView.php?returnInfo='.  urlencode(serialize($user)));

                }else if($from == 'edit'){
                    header('Location: ../app/View/ManageUserProfile/editStaffProfileDetailsView.php?returnInfo='.  urlencode(serialize($user)));
                    
                }

            }elseif($usertype == "Admin"){

                $id = $_SESSION['accountId'];

                //Get the data from admin model
                $adminInfo = $this->Module1Repository->getAdminProfileInfo($id);

                if($from == 'view'){
                    //Redirect the user to the admin view profile
                    header('Location: ../app/View/ManageUserProfile/viewAdminProfileDetailsView.php?returnInfo='.  urlencode(serialize($adminInfo)));

                }else if($from == 'edit'){
                    //Redirect the user to the admin edit profile
                    header('Location: ../app/View/ManageUserProfile/editAdminProfileDetailsView.php?returnInfo='.  urlencode(serialize($adminInfo)));
                }
                
            }else{

                echo "Problem";
            }
            
        }




    }
?>

