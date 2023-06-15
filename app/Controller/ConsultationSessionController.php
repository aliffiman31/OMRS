<?php
class ConsultationSessionController
{
    public function createConsultationSession($date, $place, $CS_Id)
    {
        
    }

    public function updateConsultationSession($sessionId, $date, $place)
    {
        
    }

    public function deleteConsultationSession($sessionId)
    {
       
    }

    public funciton getConsultationData($CS_Id, $CSdate,$CStime)
    {
        foreach ($consultationData as $consultation) {
            $consultation_ID = $consultation['CS_Id'];
            $consultation_date = $consultation['CSdate'];
            $consultation_time = $consultation['CStime'];
            
            echo "Consultation ID: $consultation_ID<br>";
            echo "Consultation Date: $consultation_date<br>";
            echo "Consultation Time: $consultation_time<br><br>";
        
    }
}
?>
