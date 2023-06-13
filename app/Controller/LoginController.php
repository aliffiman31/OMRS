
<?php
    class LoginController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }

        //Applicant login function 
        /*public function loginApplicantFunction($userIC, $userPassword)
        {
            // Send the input to Module1Repository to verify the user 
            if ($this->Module1Repository->loginApplicantAcc($userIC, $userPassword)) {
            $_SESSION["alert-success"] = "Berjaya Log Masuk.";
        ?>
        <script>
            window.location = "../app/ApplicationLayer/ApplicantView/module1/homepage.php";
        </script>
        <?php
        } else {
        $_SESSION["alert-fail"] = "Maaf kad pengenalan dan kata laluan anda tidak SAH.";
        ?>
        <script>
            window.location = "../app/ApplicationLayer/ApplicantView/module1/ApplicantLoginPage.php";
        </script>
        <?php
        }
        }*/


       /* public function loginApplicantFunction($userIC, $userPassword)
        {
            // Send the input to Module1Repository to verify the user 
            if ($this->Module1Repository->loginApplicantAcc($userIC, $userPassword, 'pemohon')) 
            {
                // Login successful
                
                echo "Bejaya Log Masuk";
            
                $_SESSION["alert-success"] = "Berjaya Log Masuk.";
                header("Location: ../app/ApplicationLayer/ApplicantView/module1/homepage.php");
            } 
            else 
            {
                // Login failed
                $_SESSION["alert-fail"] = "Maaf kad pengenalan dan kata laluan anda tidak SAH.";
                header("Location: ../app/ApplicationLayer/ApplicantView/module1/ApplicantLoginPage.php");
            }
            // Redirect to specific homepage
            header("Location: ../app/ApplicationLayer/ApplicantView/module1/homepage.php");
        }*/


        // Applicant login function
public function loginApplicantFunction($userIC, $userPassword)
{
    $loginResult = $this->Module1Repository->loginApplicantAcc($userIC, $userPassword);

    if ($loginResult) {
        $_SESSION["alert-success"] = "Berjaya Log Masuk.";
        header("Location: ../app/ApplicationLayer/ApplicantView/module1/homepage.php");
    } else {
        $_SESSION["alert-fail"] = "Maaf kad pengenalan dan kata laluan anda tidak SAH.";
        header("Location: ../app/ApplicationLayer/ApplicantView/module1/ApplicantLoginPage.php");
    }
}


         //Staff login function
        public function loginStaffFunction($userIC, $userPassword)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginStaffAcc($userIC, $userPassword))
            {
                //header("Location: index.php?action=viewProfile&from=view");
            }
            else
            {
                //If the user not exists, it will show error message 
            ?>
                <script>
                    alert("Incorrect IC or Password");
                    window.location = "../app/ApplicationLayer/ApplicantView/module1/homepage.php";
                </script>
            <?php
            }
        }

         //Admin login function
        public function loginAdminFunction($userIC, $userPassword)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginAdminAcc($userIC, $userPassword))
            {
            ?>
                <script>
                    alert("Berjaya Masuk");
                </script>
            <?php
                header("Location: Facade.php?action=viewProfile&from=view");
            }
            else
            {
                //If the user not exists, it will show error message 
            ?>
                <script>
                    alert("Incorrect IC or Password");
                    window.location = "../app/ApplicationLayer/AdminView/AdminLoginPage.php";
                </script>
            <?php
            }
        }  
    }
?>