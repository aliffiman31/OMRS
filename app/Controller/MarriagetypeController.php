<?php

class $marriagetypeController{

    private $module3Repository;
    
    public function __construct($module3Repository)
    {
        $this->module3Repository = $module3Repository;
    }
    public function insertform( $Fee_ID, $Application_Slip, $ApplicantPartner_IC, $Borang_HIV, $Surat_Pemastautinan, $ApplicantPartner_Photo)
    {
        $this->module3Repository->( $Fee_ID, $Application_Slip, $ApplicantPartner_IC, $Borang_HIV, $Surat_Pemastautinan, $ApplicantPartner_Photo);
    }
    public function getvoluntarymarriageData()
    {
        return $this->module2Repository->getvoluntarymarriageData();
    }


    public function insertForm($Fee_ID, $ApplicantPartner_IC,  $ApplicantPartner_Passport,  $Surat_Perakuan, $Akuan_Sumpah_Berkanun, $Surat_Pemastautinan)
    {
        $this->module3Repository->($Fee_ID, $ApplicantPartner_IC,  $ApplicantPartner_Passport,  $Surat_Perakuan, $Akuan_Sumpah_Berkanun, $Surat_Pemastautinan);
    }
    public function getunauthorizedmarriageData()
    {
        return $this->module2Repository->getunauthorizedmarriageData();
    }


    
    
    }
?>