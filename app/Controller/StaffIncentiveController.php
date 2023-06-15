<?php
class StaffIncentiveController
{
    private $Module5Repository;

    public function __construct($Module5Repository)
    {
        $this->Module5Repository = $Module5Repository;
    }

    public function showSpecialIncentives()
    {
        $specialIncentives = $this->Module5Repository->fetchAllSpecialIncentives();
        include '../ApplicationLayer/StaffView/module5/UrusanIncenticePage.php';
    }
}

?>