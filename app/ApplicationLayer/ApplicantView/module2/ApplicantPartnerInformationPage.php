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
    <script src="../module2/ApplicantReligiousOfficeOptions.js"></script>
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
                    <h3>Permohonan Berkahwin</h3>
                    <hr>
                    <form action="">
                        <label for="ic-num">Masukkan no kad pengenalan pasangan :</label>
                        <input type="text">
                        <button type="submit">Cari</button>
                    </form>
                    <h3>Berikut merupakan maklumat berkaitan pasangan :-</h3>
                    <table>
                        <tr>
                            <td>No kad pengenalan: </td>
                            <td id="#"></td>
                            <td>Alamat tempat tinggal: </td>
                            <td id="#"></td>
                        </tr>
                        <tr>
                            <td>Nama: </td>
                            <td id="#"></td>
                            <td>Poskod: </td>
                            <td id="#"></td>
                        </tr>
                        <tr>
                            <td>Tarikh lahir: </td>
                            <td id="#"></td>
                            <td>Daerah: </td>
                            <td id="#"></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td id="#"></td>
                            <td>Pekerjaan: </td>
                            <td id="#"></td>
                        </tr>
                        <tr>
                            <td>Jantina: </td>
                            <td id="#"></td>
                            <td>No telefon(bimbit): </td>
                            <td id="#"></td>
                        </tr>
                        <tr>
                            <td>Bangsa: </td>
                            <td id="#"></td>
                        </tr>
                        <tr>
                            <td>Umur: </td>
                            <td id="#"></td>
                        </tr>
                    </table>
                    <a href="../../ApplicantView/module2/ApplicantUpdateMarriageInfoPage.php">
                        <button type="button" >Seterusnya</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
    



</body>

</html>