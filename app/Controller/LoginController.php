<?php
    class LoginController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }

        //Applicant login function 
        public function loginApplicantFunction($ic, $password)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginApplicantAcc($ic, $password))
            {
                //header("Location: index.php?action=viewProfile&from=view");
            }
            else
            {
                //If the user not exists, it will show error message 
            ?>
                <script>
                    alert("Incorrect IC or Password");
                   // window.location = "../app/View/ManageLogin/adminLoginView.php";
                </script>
            <?php
            }
        }

         //Staff login function
        public function loginStaffFunction($ic, $password)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginStaffAcc($ic, $password))
            {
                //header("Location: index.php?action=viewProfile&from=view");
            }
            else
            {
                //If the user not exists, it will show error message 
            ?>
                <script>
                    alert("Incorrect IC or Password");
                   // window.location = "../app/View/ManageLogin/adminLoginView.php";
                </script>
            <?php
            }
        }

         //Admin login function
        public function loginAdminFunction($ic, $password)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginAdminAcc($ic, $password))
            {
                //header("Location: index.php?action=viewProfile&from=view");
            }
            else
            {
                //If the user not exists, it will show error message 
            ?>
                <script>
                    alert("Incorrect IC or Password");
                    // window.location = "../app/View/ManageLogin/adminLoginView.php";
                </script>
            <?php
            }
        }  
    }
?>