<?php
require_once '../../../OMRS.dataaccess/Db_Connection_Manager.php';
require_once '../../../OMRS.dataaccess/Module5Repository.php';

// Create a new instance of Module5Repository
$db = (new Database())->connect();
$repository = new Module5Repository($db);

// Check if the applicantID parameter is provided in the URL
if (isset($_GET['applicantID'])) {
    $applicantID = $_GET['applicantID'];
    
    // Retrieve the applicant data from the database based on the applicantID
    $applicantData = $repository->getApplicantData($applicantID);

    if ($applicantData) {
        // Display the applicant data
        echo '<h2>Applicant Information</h2>';
        echo 'Applicant ID: ' . $applicantData['BF_ID'] . '<br>';
        echo 'Job Type: ' . $applicantData['BF_JobType'] . '<br>';
        echo 'Job Name: ' . $applicantData['BF_JobName'] . '<br>';
        echo 'Job Address: ' . $applicantData['BF_JobAddress'] . '<br>';
        echo 'Salary: ' . $applicantData['BF_Salary'] . '<br>';
        echo 'Bank: ' . $applicantData['BF_Bank'] . '<br>';
        echo 'Account Number: ' . $applicantData['BF_AccNumber'] . '<br>';

        // Display the close relative data
        echo '<h2>Close Relative Information</h2>';
        echo 'Relative Name: ' . $applicantData['CRF_Name'] . '<br>';
        echo 'Relative Relationship: ' . $applicantData['CRF_Relationship'] . '<br>';

        // Display the groom form data
        echo '<h2>Groom Form Information</h2>';
        echo 'Groom Job Type: ' . $applicantData['GF_JobType'] . '<br>';
        echo 'Groom Job Name: ' . $applicantData['GF_JobName'] . '<br>';

        // Display the bride form data
        echo '<h2>Bride Form Information</h2>';
        echo 'Bride Job Type: ' . $applicantData['BF_JobType'] . '<br>';
        echo 'Bride Job Name: ' . $applicantData['BF_JobName'] . '<br>';

        // Display the supporting document files
        echo '<h2>Supporting Documents</h2>';
        echo 'Pay Slip 1: <a href="data:application/octet-stream;base64,' . base64_encode($applicantData['SD_PaySlip1']) . '" download>Download</a><br>';
        echo 'Pay Slip 2: <a href="data:application/octet-stream;base64,' . base64_encode($applicantData['SD_PaySlip2']) . '" download>Download</a><br>';
        echo 'Pay Slip 3: <a href="data:application/octet-stream;base64,' . base64_encode($applicantData['SD_PaySlip3']) . '" download>Download</a><br>';
        echo 'Residency Letter: <a href="data:application/octet-stream;base64,' . base64_encode($applicantData['SD_ResidencyLetter']) . '" download>Download</a><br>';
    } else {
        echo 'Applicant not found.';
    }
} else {
    echo 'Invalid applicant ID.';
}
?>
