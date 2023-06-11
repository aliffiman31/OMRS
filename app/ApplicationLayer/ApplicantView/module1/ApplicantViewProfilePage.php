<?php
    // Start up your PHP Session
    session_start();

    $encodedData;
    $decodedApplicantData;

    //If the user is not logged in send him/her to the login form
    if(!isset($_SESSION['currentUserIC'])) {

      ?>
          <script>
              alert("Access denied !!!")
              window.location = "../ManageLogin/userLoginView.php";
          </script>
      <?php

    }else{

         // Retrieve the serialized and URL-encoded data from the URL parameter
        $encodedData = $_GET['returnProfileInfo'];
        
        // Decode the URL-encoded data and unserialize it
        $decodedApplicantData = unserialize(urldecode($encodedData));

        //Sidebar Active path
        $_SESSION['route'] = 'viewProfile';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant View Profile</title>
    <link rel="stylesheet" href="ApplicantViewProfilePage.css">
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
                <!-- Put Your Content Here  -->
                <div class="container-ApplicantViewProfile">    
                    <form method="post">
                        <div class="ApplicantViewProfile">

                    <table>
                    <tr>
                        <td scope="row">NO KAD PENGENALAN : </td>
                        <td><?php echo $decodedApplicantData['userIC']; ?></td>
                    </tr>
                    <tr>
                        <td scope="row">NAMA : </td>
                        <td><?php echo $decodedApplicantData['appName']; ?></td> 
                    </tr>
                    <tr>
                        <td scope="row">UMUR : </td>
                        <td><?php echo $decodedApplicantData['appAge']; ?></td>  
                    </tr>
                    <tr>
                        <td scope="row">JANTINA : </td>
                        <td><?php echo $decodedApplicantData['appGender']; ?></td> 
                    </tr>
                    <td scope="row">KATEGORI AKSES : </td>
                        <td><?php echo $decodedApplicantData['userType']; ?></td> 
                    <tr>
                        <td scope="row">NO. TELEFON: </td>
                        <td><?php echo $decodedApplicantData['appPhoneNo']; ?></td> 
                    </tr>
                    <tr>
                        <td scope="row">EMAIL : </td>
                        <td><?php echo $decodedApplicantData['appEmail']; ?></td> 
                    </tr>
                    <tr>
                        <td scope="row">ALAMAT : </td>
                        <td><?php echo $decodedApplicantData['appAddress']; ?></td> 
                    </tr>
                    </table>

                    <input type="submit" id="kemaskiniBtn" value="KEMASKINI" onclick="  ">  
                    <br>
                    </form>
                </div> 
            </div>  
        </div>             
</section>
    </div>
</body>
</html>