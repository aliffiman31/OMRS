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
                    <h1>Status Permohonan</h1>
                    <hr>
                    <form action="">
                        <label for="ic-number">Sila masukkan no kad pengenalan: </label>
                        <input type="text" id="ic-num" name="ic-num">
                        <button type="submit">Cari</button>
                    </form>
                    <br>
                    <table>
                        <tr>
                            <td>
                                <p>Nama Pemohon</p>
                            </td>
                            <td>
                                <p>No Kad Pengenalan</p>
                            </td>
                            <td>
                                <p>Status</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p id="#"></p>
                            </td>
                            <td>
                                <p id="#"></p>
                            </td>
                            <td>
                                <p id="#"></p>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </section>
    </div>



</body>

</html>