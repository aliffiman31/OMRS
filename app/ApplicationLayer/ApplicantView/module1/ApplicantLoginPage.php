<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Login</title>
    <link rel="stylesheet" href="ApplicantLoginPage.css">
</head>
<body>
    <div>
        <!-- Header -->
        <?php 
        include_once('../../Common/header.html'); 
        include_once('../../Common/headerFrontPage(Module1).html'); 
        ?>


<section>

        <div class="content-container">
            <div class="container-login">
            <form>
            <div class="logMasuk">
                <img style="height:50px;"src="../../Asset/Login_Profile.jpg">
                <h2><b>Log Masuk</b></h2>
            </div>
            <table>
                <tr>
                    <td>NO. KAD PENGENALAN   :</td>
                    <td> <input style="height:30px; width:200px;" type = "text" name="ICNum" id="ICNum"></td>
                </tr>
                <tr>
                    <td>KATA LALUAN :</td>
                    <td> <input style="height:30px; width:200px;" type = "text" name="password" id="password"></td>
                </tr>
            </table>
            <input type="submit" id="submit" value="MASUK" onclik="   "> <br> <br> <br>

            <div class="href-link">
                <a href="registrationApplicant.html" >Daftar</a>
                <div class="verticle-line"></div>
                <a href="changePasswordApplicant.html" >Tukar Kata Laluan </a>
                <div class="verticle-line"></div>
                <a href="forgotPasswordApplicant.html" >Lupa Kata Laluan?</a>
            </div>
            <br>
            </form>
            </div>
        </div>
</section>
    </div>
</body>
</html>