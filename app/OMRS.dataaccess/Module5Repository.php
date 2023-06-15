<?php
class Module5Repository
{

  private $connect;

  //Registration controller's constructor
  public function __construct($database)
  {
    $this->connect = $database;
  }

  function insertincentiveformdatawithresidencyletter(
    $sjt, $sjn, $sja, $ss, $sb, $sna,
    $ijt, $ijn, $ija, $is, $ib, $ina,
    $crn, $cri, $cra, $crr, $crp,
    $file1, $file2, $file3, $file4)
  {

    $uniqid = uniqid();

    // Insert into special incentive table
    //$query = $this->connect->prepare("INSERT INTO specialincentive(SI_ID ,SI_UserAccount ,SI_GFID, SI_BFID, SI_CRFID,SI_SDID) VALUES (?, ?, ?, ?, ?, ?)");
    //$query->execute([$uniqid, $uniqid, $uniqid, $uniqid, $uniqid, $uniqid, $uniqid]);

    // Insert into groom table for the suami data
    $query = $this->connect->prepare("INSERT INTO groomform(GF_ID ,GF_JobType ,GF_JobName, GF_JobAddress, GF_Salary,GF_Bank ,GF_AccNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $sjt, $sjn, $sja, $ss, $sb, $sna]);

    // Insert into bride table for the isteri data
    $query = $this->connect->prepare("INSERT INTO brideform(BF_ID ,BF_JobType ,BF_JobName, BF_JobAddress, BF_Salary,BF_Bank ,BF_AccNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $ijt, $ijn, $ija, $is, $ib, $ina]);

    // Insert into close relative table for the close relative data
    $query = $this->connect->prepare("INSERT INTO closerelativeform(CRF_ID  ,CRF_Name ,CRF_ICNumber, CRF_Address, CRF_Relationship	,CRF_PhoneNumber) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $crn, $cri, $cra, $crr, $crp]);

    // Insert into supporting document table for the supporting document data
    // Read the contents of the files
    $file1Data = file_get_contents($_FILES['file1']['tmp_name']);
    $file2Data = file_get_contents($_FILES['file2']['tmp_name']);
    $file3Data = file_get_contents($_FILES['file3']['tmp_name']);
    $file4Data = !empty($file4) && $file4['error'] !== UPLOAD_ERR_NO_FILE ? file_get_contents($file4['tmp_name']) : null;

    // Insert into supporting document table for the supporting document data
    $query = $this->connect->prepare("INSERT INTO supportingdocument (SD_ID, SD_PaySlip1, SD_PaySlip2, SD_PaySlip3, SD_ResidencyLetter) VALUES (?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $file1Data, $file2Data, $file3Data, $file4Data]);
  }


  function insertincentiveformdata(
    $sjt, $sjn, $sja, $ss, $sb, $sna,
    $ijt, $ijn, $ija, $is, $ib, $ina,
    $crn, $cri, $cra, $crr, $crp,
    $file1, $file2, $file3)
  {
    $uniqid = uniqid();

    // Insert into groom table for the suami data
    $query = $this->connect->prepare("INSERT INTO groomform(GF_ID ,GF_JobType ,GF_JobName, GF_JobAddress, GF_Salary,GF_Bank ,GF_AccNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $sjt, $sjn, $sja, $ss, $sb, $sna]);

    // Insert into bride table for the isteri data
    $query = $this->connect->prepare("INSERT INTO brideform(BF_ID ,BF_JobType ,BF_JobName, BF_JobAddress, BF_Salary,BF_Bank ,BF_AccNumber) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $ijt, $ijn, $ija, $is, $ib, $ina]);

    // Insert into close relative table for the close relative data
    $query = $this->connect->prepare("INSERT INTO closerelativeform(CRF_ID  ,CRF_Name ,CRF_ICNumber, CRF_Address, CRF_Relationship	,CRF_PhoneNumber) VALUES (?, ?, ?, ?, ?, ?)");
    $query->execute([$uniqid, $crn, $cri, $cra, $crr, $crp]);

    // Insert into supporting document table for the supporting document data
    // Read the contents of the files
    $file1Data = file_get_contents($_FILES['file1']['tmp_name']);
    $file2Data = file_get_contents($_FILES['file2']['tmp_name']);
    $file3Data = file_get_contents($_FILES['file3']['tmp_name']);

    // Insert into supporting document table for the supporting document data
    $query = $this->connect->prepare("INSERT INTO supportingdocument (SD_ID, SD_PaySlip1, SD_PaySlip2, SD_PaySlip3) VALUES (?, ?, ?, ?)");
    $query->execute([$uniqid, $file1Data, $file2Data, $file3Data]);
  }
}
