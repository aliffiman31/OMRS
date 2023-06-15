<?php

include 'DB_Connection_Manager.php';
include 'ConsultationMainController.php';
include 'ConsultationApplyController.php';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nasihat Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="mb-3">

            <!-- User details retrieved from the database -->
            <header>
                <h2 class="title-box">Maklumat Pengadu</h2>
            </header>

            <div class="mb-3">
                <table>
                    <label>Nama Pengadu</label>
                    <p class="form-control">
                        <?php echo $existingAppName; ?>
                    </p>

                    <label>No. K/P / No. Passport</label>
                    <p class="form-control">
                        <?php echo $existingAppIC; ?>
                    </p>

                    <label>No. Telefon </label>
                    <p class="form-control">
                        <?php echo $existingAppPhoneNo; ?>
                    </p>

                    <label>Email</label>
                    <p class="form-control">
                        <?php echo $existingAppEmail; ?>
                    </p>

                    <label>Tahap Pendidikan</label>
                    <p class="form-control">
                        <?php echo $existingAppEduLevel; ?>
                    </p>
                </table>
            </div>

            <header>
                <h2 class="title-box">Maklumat Pasangan</h2>
            </header>

            <table>
                <label>No. K/P / No. Passport</label>
                <p class="form-control">
                    <?php echo $existingPartnerIC; ?>
                </p>
                <label>Nama Pasangan</label>
                <p class="form-control">
                    <?php echo $existingPartnerName; ?>
                </p>
            </table>

            <header>
                <h2 class="title-box">Maklumat Aduan</h2>
            </header>

            <label>Keterangan Aduan</label>
            <textarea class="form-control" placeholder="Sila isi sini" name="CAdetails"><?php echo $existingCAdetails; ?></textarea>
        </div>

        <button type="submit" class="btn btn-danger" name="cancel">Batal</button>
        <button type="submit" class="btn btn-primary" name="save">Update</button>
        <button type="submit" class="btn btn-success" name="submit">Hantar</button>
    </form>
</div>
</body>
</html>
