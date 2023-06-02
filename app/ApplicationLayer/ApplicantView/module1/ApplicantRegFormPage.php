<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Registration Form</title>
    <link rel="stylesheet" href="ApplicantRegFormPage.css">
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
        <div class="container-registration">    
        <form id="reg-form" action="../../../../public/Facade.php?action=registerApplicantAcc" method="post">
            <div class="registration">
                <img style="height:50px;"src="../../Asset/Registration.png"> 
                <h2><b>Daftar Pengguna</b></h2>
            </div>
            <table>
                <tr>
                    <td>NO. KAD PENGENALAN   :</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userIC" id="userIC"></td>
                </tr>
                <tr>
                    <td>NAMA:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="appName" id="appName"></td>
                </tr>
                <tr>
                    <td>KATEGORI AKSES :</td>
                    <td><select style="width:260px; height:40px;" name="userType" id="userType">
                            <option disabled selected>SILA PILIH</option>
                            <option value="userType">PEMOHON</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>JANTINA:</td>
                    
                    <td>
                        <select style="width:260px; height:40px;" name="appGender" id="appGender">
                            <option disabled selected>SILA PILIH</option>
                            <option value="male">LELAKI</option>
                            <option value="female">PEREMPUAN</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>NO. TELEFON:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="appPhoneNo" id="appPhoneNo"></td>
                </tr>
                <tr>
                    <td>ALAMAT:</td>
                    <td> <textarea name="appAddress" id="appAddress" rows="5" cols="32"></textarea></td>
                </tr>
                <tr>
                    <td>E-MEL:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="appEmail" id="appEmail"></td>
                </tr>
                <tr>
                    <td>KATA LALUAN:</td>
                    <td> <input style="height:30px; width:250px;" type = "text" name="userPassword" id="userPassword"></td>
                </tr>
            </table>

            <input type="submit" id="submit" value="DAFTAR" onclick="submitForm(event, 'reg-form')">
            <a href="ApplicantLoginPage.php">[  KEMBALI  ]</a>
            <br>
        </form>
        </div>   
        </div>
</section>
    </div>


    <script>
 // function submitForm(event, formId) {
  //  event.preventDefault(); // Prevent the default form submission

     // Get the form data
   // var form = document.getElementById(formId);
    // var formData = new FormData(form);

    // Create an AJAX request
        // var xhr = new XMLHttpRequest();
    // xhr.open(form.method, form.action, true);
    // xhr.onreadystatechange = function () {
       //if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // alert('Successfully Registered');
         // You can perform any additional actions or show a success message here

//         // Clear the form inputs if needed
       //  form.reset();
      // }
    // };

//     // Send the form data
   // xhr.send(formData);
 // }
</script>
</body>
</html>