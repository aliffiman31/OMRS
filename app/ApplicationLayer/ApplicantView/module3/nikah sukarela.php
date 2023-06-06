<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nikah sukarela.css">
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
    <form action="../../../../public/Facade.php?action=voluntarymarriage" method="post" id="myForm"></form>
    <div class="box">
        <h1>~PERMOHONAN PERKAHWINAN~</h1>
        </div>
        <div class="smallbox">
            <h2>Perkahwinan Sukarela</h2>
        </div>
        <table id="sukarela" class="file-input-container">
            <tr >
                <td>Salinan Kad Pengenalan (Warganegara) Pemohon Dan Pasangan:</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <tr >
                <td>Gambar Berukuran passport:</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <tr >
                <td>Slip Permohonan Online: <a href="slip pendaftaran online.html">(tekan sini)</a></td> 
                <td><input type="file" id="surat"></td>
            </tr>
            <tr >
                <td>Surat Akuan Permastautinan (Sekiranya Alamat Kad Pengenalan Berbeza Dengan Alamat Semasa):</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <tr >
                <td>Borang HIV (pemohon dan pasangan):</td>
                <td><input type="file" id="surat"></td>
            </tr>
            <button type="submit" id="button1">submit</button>
            <button type="button" id="button2">Seterusnya</button>
        </table>
</div>
</body>
</html>