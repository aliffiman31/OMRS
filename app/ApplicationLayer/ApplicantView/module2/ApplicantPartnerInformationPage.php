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

        .inner-content {
            margin-left: 30px;
            margin-top: 20px;
        }

        .table-info {
            width: 90%;
            border: none;
        }

        #ic-num {
            background: #FFFFFF;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), inset 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
        }

        #button1 {
            background: #6D72F1;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
            color: #FFFFFF;
            margin-left: 20px;
            width: 50px;
        }
        #line{
            margin-right: 30px;
        }
        #form1{
            margin-left: 20px;
        }
        #button2{
            background: #6D72F1;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            border: none;
            color: #FFFFFF;
            width: 100px;
            float: right;
            margin-right: 80px;
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
                    <div class="inner-content">
                        <h3>Permohonan Berkahwin</h3>
                        <hr id="line">
                        <form action="" id="form1">
                            <label for="ic-num">No kad pengenalan pasangan :</label>
                            <input type="text" id="ic-num" name="ic-num">
                            <button type="submit" id="button1"><b>Cari</b></button>
                        </form>
                        <br>
                        <h5>Berikut merupakan maklumat berkaitan pasangan :-</h5>
                        <br>
                        <table class="table-info">
                            <tr>
                                <td><strong> kad pengenalan </strong></td>
                                <td id="#">:990611-06-2254</td>
                                <td><strong>Alamat tempat tinggal </strong></td>
                                <td id="#">:Lot A2,Kg Semerah Kuning</td>
                            </tr>
                            <tr>
                                <td><strong>Nama </strong></td>
                                <td id="#">:Nur Safeha binti Amir</td>
                                <td><strong>Poskod </strong></td>
                                <td id="#">:26000</td>
                            </tr>
                            <tr>
                                <td><strong>Tarikh lahir </strong></td>
                                <td id="#">:11 Jun 1999</td>
                                <td><strong>Daerah </strong></td>
                                <td id="#">:Indera Mahkota</td>
                            </tr>
                            <tr>
                                <td><strong>Email </strong></td>
                                <td id="#">:Safeha99@gmail.com</td>
                                <td><strong>Pekerjaan </strong></td>
                                <td id="#">:Pengawal Bank</td>
                            </tr>
                            <tr>
                                <td><strong>Jantina </strong></td>
                                <td id="#">:Perempuan</td>
                                <td><strong>No telefon(bimbit) </strong></td>
                                <td id="#">:012-23271632</td>
                            </tr>
                            <tr>
                                <td><strong>Bangsa </strong></td>
                                <td id="#">:Melayu</td>
                            </tr>
                            <tr>
                                <td><strong>Umur </strong></td>
                                <td id="#">:24</td>
                            </tr>
                        </table>
                        <br><br>
                        <a href="../../ApplicantView/module2/ApplicantUpdateMarriageInfoPage.php">
                            <button type="button" id="button2">Seterusnya</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>




</body>

</html>