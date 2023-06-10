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
                    <h3>Perkahwinan</h3>
                    <hr>
                    <form action="">
                    <table>
                        <tr>
                            <td>MAKLUMAT PERKAHWINAN</td>
                        </tr>
                        <tr>
                            <td><label for="date">Tarikh Mohon:</label></td>
                            <td><input type="date" id="date" name="date"></td>
                            <td>Tempat Kahwin:</td>
                            <td>Retrieve data from database</td>
                        </tr>
                        <tr>
                            <td>Nama Pemohon:</td>
                            <td>retrieve from database</td>
                            <td><label for="negara">Negara:</label></td>
                            <td><input type="text" id="negara" name="negara"></td>
                        </tr>
                        <tr>
                        <td>Nama Pasangan:</td>
                            <td>retrieve from database</td>
                            <td><label for="negeri">Negeri:</label></td>
                            <td><input type="text" id="negeri" name="negeri"></td>
                        </tr>
                        <tr>
                            <td>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</td>
                        </tr>
                        <tr>
                            <td>
                                <label for="TarAkadNikah">Tarikh Akad Nikah:</label>
                            </td>
                            <td><input type="date" id="TarAkadNikah" name="TarAkadNikah"></td>
                            <td>
                                <label for="MasKahwin">Mas Kahwin:</label>
                            </td>
                            <td><input  type="text" id="MasKahwin" name="MasKahwin"></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="AlamatTempatKahwin">Alamat tempat perkahwinan:</label>
                            </td>
                            <td><input type="text" id="AlamatTempatKahwin" name="AlamatTempatKahwin"></td>
                            <td>
                                <label for="Hantaran">Hantaran:</label>
                            </td>
                            <td><input  type="text" id="Hantaran" name="Hantaran"></td>
                        </tr>
                        <tr>
                        <td>
                                <label for="JenisMasKahwin">Jenis Mas Kahwin:</label>
                            </td>
                            <td><input  type="text" id="JenisMasKahwin" name="JenisMasKahwin"></td>
                        </tr>
                        <tr>
                            <td>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</td>
                        </tr>
                        <tr>
                            <td>
                                <label for="wali">Nama Wali:</label>
                            </td>
                            <td>
                            <input  type="text" id="wali" name="wali">
                            </td>
                            <td>
                                <label for="hubungan">Hubungan:</label>
                            </td>
                            <td>
                            <input  type="text" id="hubungan" name="hubungan">
                            </td>
                        </tr>
                        <tr>
                        <td>
                                <label for="ic-wali">No kad pengenalan wali:</label>
                            </td>
                            <td>
                            <input  type="text" id="ic-wali" name="ic-wali">
                            </td>
                            <td>
                                <label for="tarikhNikParent">Tarikh Nikah Ibu Bapa:</label>
                            </td>
                            <td>
                            <input  type="date" id="tarikhNikParent" name="tarikhNikParent">
                            </td>
                        </tr>
                        <tr>
                        <td>
                                <label for="Alamat-wali">Alamat Wali:</label>
                            </td>
                            <td>
                            <input  type="text" id="Alamat-wali" name="Alamat-wali">
                            </td>
                            <td>
                                <label for="NoSijil">No.Sijil Nikah Ibu Bapa:</label>
                            </td>
                            <td>
                            <input  type="date" id="NoSijil" name="NoSijil">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tarikhLahirWali">Tarikh Lahir Wali</label>
                            </td>
                            <td>
                                <input type="date" id="tarikhLahirWali" name="tarikhLahirWali">
                            </td>
                        </tr>
                        <tr>
                        <td>
                                <label for="UmurWali">Umur Wali:</label>
                            </td>
                            <td>
                                <input type="text" id="UmurWali" name="UmurWali">
                            </td>
                        </tr>
                        <tr>
                        <td>
                                <label for="NoTelWali">No. Telefon Wali:</label>
                            </td>
                            <td>
                                <input type="text" id="NoTelWali" name="NoTelWali">
                            </td>
                        </tr>
                    </table>
                    <button type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

</body>

</html>