<?php
class ConsultationApplicationController
{
    public function submitConsultationApplication($applicationId, $sessionId, $userId)
    {
        
    }

    public function cancelConsultationApplication($applicationId)
    {
        
    }

    // Implement your consultation application controller logic here
    // This class can handle consultation application-related operations

    public function getApplicationData($requestId) {
        // Fetch information from the database based on the Request_Id
        global $con;
        $requestId = mysqli_real_escape_string($con, $requestId);
        $sql = "SELECT ApplicantInfo.appName, ApplicantInfo.appPhoneNo, ApplicantInfo.appEmail, ApplicantInfo.appEduLevel,
                       PartnerInfo.PartnerIC, PartnerInfo.PartnerName
                FROM Marriage_Request_Info
                INNER JOIN ApplicantInfo ON Marriage_Request_Info.Applicant_IC = ApplicantInfo.Applicant_IC
                INNER JOIN PartnerInfo ON Marriage_Request_Info.Partner_Id = PartnerInfo.Partner_Id
                WHERE Marriage_Request_Info.Request_Id = '$requestId'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function handleFormSubmission() {
        if (isset($_POST['submit'])) {
            // Handle submit form submission
        } elseif (isset($_POST['save'])) {
            // Handle save form submission
        } elseif (isset($_POST['cancel'])) {
            // Handle cancel form submission
        }
    }


}
?>
