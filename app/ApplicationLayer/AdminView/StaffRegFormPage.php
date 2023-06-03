<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration Form</title>
    <link rel="stylesheet" href="StaffRegFormPage.css">
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
            <div class="content-StaffRegForm">
                <div class="text-container">
                  <p><b>PENDAFTARAN KAKITANGAN:</b></p>
                </div>
            <form>
                <table id="registrationTable">
                    <tr>
                        <td>NO. KAD PENGENALAN  :</td>
                        <td><input type="text" name="userIC" id="userIC"></td>
                    </tr>
                    <tr>
                        <td>NAMA PENGGUNA :</td>
                        <td><input type="text" name="staffName" id="staffName"></td>
                    </tr>
                    <tr>
                        <td>JABATAN :</td> 
                        <td><select style="width:410px; height:30px;"name="staffDepartmentName" id="staffDepartmentName">
                                <option disabled selected>SILA PILIH</option>
                                <option value="staffDepartmentName">JABATAN AGAMA ISLAM NEGERI PAHANG</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>KATEGORI AKSES :</td>
                        <td><select style="width:410px; height:30px;" name="userType" id="userType">
                                <option disabled selected>SILA PILIH</option>
                                <option value="userType">KAKITANGAN</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>E-MEL :</td>
                        <td><input type="text" name="staffEmail" id="staffEmail"></td>
                    </tr>
                    <tr>
                        <td>NO. TELEFON  :</td>
                        <td><input type="text" name="staffPhoneNo" id="staffPhoneNo"></td>
                    </tr>
                </table>

                <input type="submit" id="submit" value="DAFTAR" onclik="   ">
            </form>

            </div>
        </div>
</section>
    </div>
</body>
</html>