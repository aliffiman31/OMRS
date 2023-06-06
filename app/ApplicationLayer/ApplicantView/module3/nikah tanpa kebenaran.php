<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nikah tanpa kebenaran.css">
    <title>Jenis Perkahwinan</title>
</head>
<body>
     <!-- Header -->
     <?php
        include_once('../../Common/header.php');
        ?>


        <section>

            <div>
                <?php include_once('../../Common/sidebar.php');  ?>
            </div>
    
<div class="content">
    <form action="../../../../public/Facade.php?action=unauthorizedmarriage" method="post" id="myForm"></form>
    <div class="box">
        <h1>~PERMOHONAN PERKAHWINAN~</h1>
        </div>
        <div class="smallbox">
            <h2>Perkahwinan tanpa Kebenaran</h2>
        </div>
        <table id="tanpakebenaran">
            <tr class="file-input-container">
                <td>Salinan Kad Pengenalan Pemohon Dan Pasangan:</td>
                <td><input type="file" id="ic"></td>
            </tr>
            <tr class="file-input-container">
                <td>Salinan Passport Pemohon Dan Pasangan:</td>
                <td><input type="file" id="passport"></td>
            </tr>
            <tr class="file-input-container">
                <td>Surat Perakuan Nikah Tanpa Kebenaran (Asal Dan Salinan):</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <tr class="file-input-container">
                <td>Surat Akuan Pemastautinan (Sekiranya Alamat Kad Pengenalan Berbeza Dengan Alamat Semasa):</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <tr class="file-input-container">
                <td>Surat Akuan Sumpah Berkanun (Pesuruhjaya Sumpah Muslim Sahaja) (Bagi Pemohon Yang Tiada Pengesahan Perjalanan):</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <button type="submit" id="button1">submit</button>
            <button type="button" id="button2">Seterusnya</button>
        </table>
</div>
</body>
</html>