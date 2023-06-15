<?php
    class ApplicantIncentiveController
    {
        private $Module5Repository;

        public function __construct($Module5Repository)
        {
            $this->Module5Repository = $Module5Repository;  
        }

        function insertincentiveformdata(
        $sjt,$sjn,$sja,$ss,$sb,$sna
        ,$ijt,$ijn,$ija,$is,$ib,$ina
        ,$crn,$cri,$cra,$crr,$crp
        ,$file1,$file2,$file3,$file4) 
        {
            $this->Module5Repository->insertincentiveformdata(
            $sjt,$sjn,$sja,$ss,$sb,$sna
            ,$ijt,$ijn,$ija,$is,$ib,$ina
            ,$crn,$cri,$cra,$crr,$crp
            ,$file1,$file2,$file3,$file4);
        }
    }
