<?php

class Module3Repository
{
    private $connect;

    //connecct database
    public function __construct($database) 
    {
        $this->connect = $database;
    }

    //Add initial applicant info
    public function addVoluntaryMariageInfo($Request_ID, $Fee_ID, $Application_Slip, $ApplicantPartner_IC, $Borang_HIV, $Surat_Pemastautinan, $ApplicantPartner_Photo )
    {
        //Add SQL Query
        $query =$this->connect-prepare("
        INSERT INTO Applicant
        (Request_ID,
        Application_Slip,
        ApplicantPartner_IC,
        Borang_HIV,
        Surat_Pemastautinan,
        ApplicantPartner_Photo,
        ) VALUES ( ?, ?, ?, ?, ?, ?, ) ");

        //return to controller
        return $query->execute([$Request_ID, $Fee_ID, $Application_Slip, $ApplicantPartner_IC, $Borang_HIV, $Surat_Pemastautinan, $ApplicantPartner_Photo ]);

    }
    public function addUnauthorizedMarriageInfo($Request_ID, $Fee_ID, $ApplicantPartner_IC,  $ApplicantPartner_Passport,  $Surat_Perakuan,$UM_Akuan_Sumpah_Berkanun, $Surat_Pemastautinan)
    {
        //Add SQL Query
        $query = $this->connect->prepare("
        INSERT INTO Applicant
        (Request_ID,
        ApplicantPartner_IC,
        ApplicantPartner_Passport,
        Surat_Perakuan,
        Akuan_Sumpah_Berkanun,
        Surat_Pemastautinan,
        Payment_Receipt
        ) VALUES (?, ?, ?, ?, ?, ?, ?");

        //return to  controller
        return $query->execute([$Request_ID, $Fee_ID, $ApplicantPartner_IC,  $ApplicantPartner_Passport,  $Surat_Perakuan,$UM_Akuan_Sumpah_Berkanun, $Surat_Pemastautinan]);
    
    }
    public function addMarriageCertificateInfo ($marriage_cert_ID, $VoluntaryMarriage_ID, $UnauthorizedMarriage_ID, $Fee_id, $applied_date, $payment_proof_status)
    {
        //Add SQL Query
        $query = $this ->connect->prepare("
        INSERT INTO Applicant
        (marriage_cert_ID,
        VoluntaryMarriage_ID,
        UnauthorizedMarriage_ID,
        Fee_id,
        applied_date,
        payment_proof_status)
        VALUES (?,?,?,?,?,?)");

        //return to  controller
        return $query->execute([$marriage_cert_ID, $VoluntaryMarriage_ID, $UnauthorizedMarriage_ID, $Fee_id, $applied_date, $payment_proof_status]);

    }
}
?>