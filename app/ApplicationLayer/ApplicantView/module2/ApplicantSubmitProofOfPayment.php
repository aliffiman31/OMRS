<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="ApplicantReligiousOfficeOptions.css">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
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
                    <h1>Maklumat Pemohon</h1>
                    <table>
                        <tr>
                            <td>
                                <p>USER ID</p>
                            </td>
                            <td>
                                <p id="#">:</p>
                            </td>
                        <tr>
                            <td>
                                <p>NAME</p>
                            </td>
                            <td>
                                <p id="#">:</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>IC NUMBER</p>
                            </td>
                            <td>
                                <p id="#">:</p>
                            </td>
                        </tr>
                        </tr>
                    </table>
                    <hr>
                    <p>Terma dan Peraturan:-</p>
                    <p>1. Yuran yang dikenakan ke atas pemohon adalah sebanyak <span>RM 120.00</span></p>
                    <p>2. Jika pemohon didapati lewat menjelaskan yuran,pemohon akan dikenakan denda sebanyak <span>RM 60.00</span></p>
                    <p>3. Yuran tidak akan dikembalikan kepada pemohon jika pemohon tidak hadir ke kursus tanpa maklum</p>
                    <h3>ANJURAN :</h3>
                    <p id="#"></p>
                    <h3>TEMPAT DAN TARIKH :</h3>
                    <P id="#">Venue</P>
                    <P id="#">Tarikh</P>
                    <div>
                        <label for="UpdateForm">Please insert your proof of payment</label>
                        <input type="file" name="proofPayment" id="proofPayment">
                    </div>
                </div>
            </div>

        </section>
    </div>



</body>

</html>