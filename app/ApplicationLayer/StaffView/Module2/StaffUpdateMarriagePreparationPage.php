<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./StaffUpdateMarriagePreparationPage.css" />

    <title>Syarat Kelayakan</title>
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
                    <div class="inner-content">
                        <form action="">
                            <table >
                                <tr>
                                    <td>
                                        <label for="paid">PAID</label>
                                    </td>
                                    <td>
                                        <select id="paid" name="paid" required>
                                            <option value="">Select an office</option>
                                            <option value="JAIPTermerloh">JAIP Termerloh</option>
                                            <option value="JAIPPekan">JAIP Pekan</option>
                                            <option value="JAIPKuantan">JAIP Kuantan</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="tarikhMula">Tarikh Mula:</label>
                                    </td>
                                    <td>
                                        <input type="date" name="tarikhMula" id="tarikhMula">
                                    </td>
                                    <td>
                                        <label for="tarikhTamat">Tarikh Tamat:</label>
                                    </td>
                                    <td>
                                        <input type="date" name="tarikhTamat" id="tarikhTamat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="tempat">Tempat:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="tempat" name="tempat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="alamat">Alamat:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="alamat" name="alamat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="masaMula">Masa mula:</label>
                                    </td>
                                    <td>
                                        <input type="time" name="masaMula" id="masaMula">
                                    </td>
                                    <td>
                                        <label for="masaTamat">Masa Tamat:</label>
                                    </td>
                                    <td>
                                        <input type="time" name="masaTamat" id="masaTamat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="pegawai">Pegawai dihubungi:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="pegawai" name="pegawai">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="noTel">No telefon:</label>
                                    </td>
                                    <td>
                                        <input type="text" id="noTel" name="noTel">
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="catatan">Catatan</label></td>
                                    <td>
                                        <input type="text" id="catatan" name="catatan">
                                    </td>
                                </tr>
                            </table>
                            <button type="submit">Simpan</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>


</body>

</html>