<?php
include 'DB_Connection_Manager.php';
include 'ConsultationMainController.php';
include 'ConsultationApplyController.php';

$requestId = $_GET['requestId'];

$applyController = new ConsultationApplicationController();
$row = $applyController->getApplicationData($requestId);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $applyController->handleFormSubmission();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
          <link rel="stylesheet" href="maintemplate.css">
    
    <title>Khidmat Nasihat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        

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
    <form method="post">
        <div class="mb-3">
            <header>
                <h2 class="title-box">Maklumat Pengadu</h2>
            </header>
            <div class="mb-3">
                <table>
                    <label>Nama Pengadu</label>
                    <p class="form-control"><?php echo $row['appName']; ?></p>
                    <label>No. K/P / No. Passport</label>
                    <p class="form-control"><?php echo $row['appIC']; ?></p>
                    <label>No. Telefon</label>
                    <p class="form-control"><?php echo $row['appPhoneNo']; ?></p>
                    <label>Email</label>
                    <p class="form-control"><?php echo $row['appEmail']; ?></p>
                    <label>Tahap Pendidikan</label>
                    <p class="form-control"><?php echo $row['appEduLevel']; ?></p>
                </table>
            </div>

            <header>
                <h2 class="title-box">Maklumat Pasangan</h2>
            </header>
            <table>
                <label>No. K/P / No. Passport</label>
                <p class="form-control"><?php echo $row['PartnerIC']; ?></p>
                <label>Nama Pasangan</label>
                <p class="form-control"><?php echo $row['PartnerName']; ?></p>
            </table>

            <header>
                <h2 class="title-box">Maklumat Aduan</h2>
            </header>

            <label>Keterangan Aduan</label>
            <textarea class="form-control" placeholder="Sila isi sini" name="CAdetails"></textarea>
        </div>

        <button type="submit" class="btn btn-danger" name="cancel">Batal</button>
        <button type="submit" class="btn btn-primary" name="save">Simpan</button>
        <button type="submit" class="btn btn-success" name="submit">Hantar</button>
    </form>
</div>
</body>
     
</div>
        </div>
</section>
    </div>
        


</body>

</html>
