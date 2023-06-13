<?php
    class ProfileController
    {
        private $Module1Repository;

        public function __construct($Module1Repository)
        {
            $this->Module1Repository = $Module1Repository;  
        }

        //view profile function
        public function viewProfileFunction($from)
        {
            session_start();
            $userType = $_SESSION['currentUserType'];

            if($userType == "Pemohon")
            {
                $Applicant_IC = $_SESSION['currentUserIC'];
                $appProfileInfo = $this->Module1Repository->getApplicantProfileInfo($Applicant_IC);

                if($from == 'view')
                {
                    header('Location: ../app/ApplicantView/module1/ApplicantViewProfilePage.php?returnProfileInfo='. urlencode(serialize($appProfileInfo)));
                }
                else if($from == 'edit')
                {
                    header('Location: ../app/ApplicantView/module1/ApplicantUpdateProfilePage.php?returnProfileInfo='. urlencode(serialize($appProfileInfo)));
                }
            }
            else if($userType == "Kakitangan")
            {
                $Staff_IC = $_SESSION['UserAcc_Id'];
                $staffProfileInfo = $this->Module1Repository->getStaffProfileInfo($Staff_IC);

                if($from == 'view')
                {
                    header('Location: ../app/StaffView/module1/StafftViewProfilePage.php?returnProfileInfo='. urlencode(serialize($staffProfileInfo)));
                }
                else if($from == 'edit')
                {
                    header('Location: ../app/StaffView/module1/StaffUpdateProfilePage.php?returnProfileInfo='. urlencode(serialize($staffProfileInfo)));
                }
            }
            else if($userType == "Admin")
            {
                $Admin_Id = $_SESSION['UserAcc_Id'];
                $adminProfileInfo = $this->Module1Repository->getAdminProfileInfo($Admin_Id);

                if($from == 'view')
                {
                    header('Location: ../../../app/AdminView/AdminViewProfilePage.php?returnProfileInfo='. urlencode(serialize($adminProfileInfo)));
                }
                else if($from == 'edit')
                {
                    header('Location: ../../../app/AdminView/AdminUpdateProfilePage.php?returnProfileInfo='. urlencode(serialize($adminProfileInfo)));
                }
            }
            else
            {
                echo "Maaf, sistem tidak dapat meneruskan aktiviti anda.";
            }
        }  
    }
?>