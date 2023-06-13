<?php


class StaffManageMarriageCourseRequestController
{
    private $module2Repository;
    
    public function __construct($module2Repository)
    {
        $this->module2Repository = $module2Repository;
    }

    public function insertForm($office, $venue, $date, $capacity, $vacancy, $speakerName, $MCcertificate)
    {
        $this->module2Repository->insertForm($office, $venue, $date, $capacity, $vacancy, $speakerName, $MCcertificate);

    }
}

?>
