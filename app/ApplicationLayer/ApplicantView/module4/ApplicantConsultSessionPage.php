<?php

include 'DB_Connection_Manager.php';
include 'ConsultationSessionController.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZKahwin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>

<?php
    require_once '../app/Controller/ConsultationSessionController.php';

    $ConsultationSessionController = new ConsultationSessionController();
    $consultationData = $ConsultationSessionController->createConsultationSession();
    ?>


    <?php include "App/Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "App/Component/sidebar.php"; ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Aduan/Khidmat Nasihat</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <!-- Display all the application -->
                        <?php
                        if (!empty($consultationData)) {
                            echo "<table style='border: 1px solid black; border-collapse: collapse; width: 100%; background-color: white;'>";
                            echo "<tr>";
                            echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>IC/Nama Pemohon</th>";
                            echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>Tarikh Temu Janji</th>";
                            echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>Masa Temu Janji</th>";
                            echo "</tr>";

                            foreach ($consultationData as $consultation) {
                                $consultation_ID = $consultation['CS_Id'];
                                $consultation_date = $consultation['CSdate'];
                                $consultation_time = $consultation['CStime'];

                                echo "<tr>";
                                echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'></td>";
                                echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>$consultation_date</td>";
                                echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>$consultation_time</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "<br><br>";
                        } else {
                            echo "No consultation found.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
