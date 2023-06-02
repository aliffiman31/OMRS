<?php
    class Module1Repository
    {
        private $connect;

        //connect database
        public function __construct($database)
         {
            $this->connect = $database;
         }
//,$userType, $appName, $appGender, $appPhoneNo, $appAddress, $appEmail, $hashed_password
         public function createUserAcc($userIC)
         {
            //syntax to insert into database                table (column)
            $query = $this->connect->prepare("INSERT INTO useraccount(ICNum) VALUES (?)");
            $query->execute([$userIC]);

            ?>
                <script>
                    alert('Successfully Registered');
                    window.location = '';
                </script>
            <?php


         }
        

    }
?>