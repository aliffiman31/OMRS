<?php
require 'Module4Repository.php';

class ConsultationMainController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new Module4Repository();
    }

    public function checkRequestExistence($applicantIC, $partnerId)
    {
        return $this->repository->checkRequestExistence($applicantIC, $partnerId);
    }

    public function checkPartnerExistence($partnerIC)
    {
        return $this->repository->checkPartnerExistence($partnerIC);
    }

    public function getConsultationData($requestId, $sortOption)
    {
        return $this->repository->getConsultationData($requestId, $sortOption);
    }

    public function processData($applications)
    {
        return $this->repository->processData($applications);
    }

    public function autoAssignStaff()
    {
        $this->repository->autoAssignStaff();
    }

    public function deleteConsultationApplication($requestId, $CA_Id)
    {
        $this->repository->deleteConsultationApplication($requestId, $CA_Id);
    }

    public function deleteConsultationSession($requestId, $CS_Id)
    {
        $this->repository->deleteConsultationSession($requestId, $CS_Id);
    }

    public function getSessionData($requestId, $CS_Id)
    {
        return $this->repository->getSessionData($requestId, $CS_Id);
    }

    public function updateConsultationSession($CS_Id, $date, $place)
    {
        $this->repository->updateConsultationSession($CS_Id, $date, $place);
    }
}
?>
