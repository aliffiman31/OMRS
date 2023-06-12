<?php
    class PasswordController
    {
        private $connect;
        private $Module1Repository;

        public function __construct($Module1Repository, $database) 
        {
            $this->Module1Repository = $Module1Repository;
            $this->connect = $database;
        }

        function passwordFunctionApplicant($userIC, $appEmail)
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
        
                $sent = mail($appEmail, $emailTitle, $emailMessage, $emailHeader);
                
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
    }
?>

