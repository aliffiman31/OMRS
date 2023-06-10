<?php
    class LoginController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }

        //Applicant login function 
        public function loginApplicantFunction($userIC, $userPassword)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginApplicantAcc($userIC, $userPassword))
            {
            ?>
                <script>
                    //window.location = "../app/";
                </script>
            <?php
            }
            else
            {
                //error message 
            ?>
                <script>
                    alert("Incorrect IC or Password");
                   // window.location = "../app/View/ManageLogin/adminLoginView.php";
                </script>
            <?php
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
                   // window.location = "../app/View/ManageLogin/adminLoginView.php";
                </script>
            <?php
            }
        }

         //Admin login function
        public function loginAdminFunction($Admin_Id, $userPassword)
        {
            //Send the input to Module1Repository to verify the user 
            if($this->Module1Repository->loginAdminAcc($Admin_Id, $userPassword))
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