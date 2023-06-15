<?php
class $marriagecertController{
    private $module3Repository;
     
    public function Insertform($marriage_cert_ID, $VoluntaryMarriage_ID, $UnauthorizedMarriage_ID, $Fee_id, $applied_date, $payment_proof_status)
    {
        $this->module3Repository->($marriage_cert_ID, $VoluntaryMarriage_ID, $UnauthorizedMarriage_ID, $Fee_id, $applied_date, $payment_proof_status);
    }
    public function getapplystatusData()
    {
        return $this->module2Repository->getapplystatusData();
    }
}
?>