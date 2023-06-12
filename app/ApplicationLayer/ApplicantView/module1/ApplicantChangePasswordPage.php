<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Change Password</title>
    <link rel="stylesheet" href="ApplicantChangePasswordPage.css">
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
        <div class="container-cp">

        <div id="errorMessage">
            <!-- the error or success message password-->  
        </div>

        <form action = "/app/ApplicationLayer/ApplicantView/module1/ApplicantLoginPage.php">
            <div class="changePassword">
                <img style="height:50px;"src="../../Asset/Change_Password.png"> 
                <h2><b>Tukar Kata Laluan</b></h2>
            </div>

            
            <table>
                <tr>
                    <td>NO. KAD PENGENALAN   :</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userIC" id="userIC"></td>
                </tr>
                <tr>
                    <td>KATA LALUAN SEMASA:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userPassword" id="userPassword"></td>
                </tr>
                <tr>
                    <td>KATA LALUAN BARU:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="newPassword" id="newPassword"></td>
                </tr>
            </table>

            <input type="submit" id="submit" value="TUKAR KATA LALUAN" onclick="   ">
            <a href="ApplicantLoginPage.php">[  KEMBALI  ]</a>
            <br>
        </form>
        </div>
        </div>
</section>
    </div>


    <script>
    //Validation code for change password form
    function changePasswordFormValidate()
    {
        //Declaring variable based on id
        var ic = document.getElementById("userIC").value;
        var password = document.getElementById("userPassword").value;
        var confirm_password = document.getElementById("newPassword").value;
        var error_message = document.getElementById("errorMessage");

        var text;

        //Validation Condition
        if(password.length <= 8 || password.length >= 21)
        {
            text = "Sila masukkan Kata Laluan yang sah.";
            error_message.innerHTML = text;
            return false;
        }

        if(password != confirm_password){
        text = "Kata laluan anda tidak sepadan";
        error_message.innerHTML = text;
        return false;
        }

        return true;
    }
    </script>
</body>
</html>