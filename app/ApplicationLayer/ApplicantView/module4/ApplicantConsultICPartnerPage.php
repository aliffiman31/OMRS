<?php

include 'DB_Connection_Manager.php';
include 'ConsultationMainController.php';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="maintemplate.css">
    <title>Khidmat Nasihat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        /* Add this CSS style within the <style> tags in your HTML file or in a separate CSS file */

        #mycontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div>
        <!-- Header -->
        <?php 
        include_once('../../Common/header.html'); 
        ?>


<section>

        <div>
            <?php include_once('../../Common/sidebar.php');  ?>
        </div>

        
        <div class="content-container">
            <div class="content">
                <!-- Put Your Content Here  -->
<body>
<div class="mycontainer">
    <form method="post" action="ConsultationMainController.php">
        <?php if(isset($errorMessage)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
        <div class="mb-3">
            <label>Partner IC</label>
            <input type="text" class="form-control" placeholder="Enter partner IC" name="partnerIC" required>
        </div>
        <div class="mb-3">
            <label>Applicant IC</label>
            <input type="text" class="form-control" placeholder="Enter applicant IC" name="applicantIC" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
</body>
</div>
        </div>
</section>
    </div>
        


</body>
</html>
