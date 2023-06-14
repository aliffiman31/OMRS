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
        .inner-content {
            margin-left: 30px;
            margin-top: 20px;
        }

        .price {

            color: red;
            font-style: italic;
        }

        #proofPayment {
            float: right;
            text-align: center;
            margin-right: 120px;
        }

        #payment-title {
            float: left;
        }

        .icon {
            width: 70px;
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
                    <div class="inner-content">
                        <h3>MAKLUMAT PEMOHON</h3>
                        <table>
                            <tr>
                                <td>
                                    <p>USER ID</p>
                                </td>
                                <td class="data-user">
                                    <p id="#">&nbsp;&nbsp;&nbsp;&nbsp;: A020917</p>
                                </td>
                            <tr>
                                <td>
                                    <p>NAME</p>
                                </td>
                                <td class="data-user">
                                    <p id="#">&nbsp;&nbsp;&nbsp;&nbsp;: RAMZAN BIN MOHD RUSHDI</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>IC NUMBER</p>
                                </td>
                                <td class="data-user">
                                    <p id="#">&nbsp;&nbsp;&nbsp;&nbsp;: 890312-06-1139</p>
                                </td>
                            </tr>
                            </tr>
                        </table>
                        <hr>
                        <h5><b>Terma dan Peraturan:-</b></h5>
                        <p>1. Yuran yang dikenakan ke atas pemohon adalah sebanyak <span class="price">RM 120.00</span></p>
                        <p>2. Jika pemohon didapati lewat menjelaskan yuran,pemohon akan dikenakan denda sebanyak <span class="price">RM 60.00</span></p>
                        <p>3. Yuran tidak akan dikembalikan kepada pemohon jika pemohon tidak hadir ke kursus tanpa maklum</p>
                        <h3>ANJURAN :</h3>
                        <p id="#">office</p>
                        <h3>TEMPAT DAN TARIKH :</h3>
                        <P id="#">Venue</P>
                        <P id="#">Tarikh</P>
                        <div id="proofPayment">
                            <label for="file-upload-3" class="upload-label">
                                <img class="icon" src="../../Common/uploadIcon.png" alt="Upload Icon">
                            </label>
                            <div>
                                <input id="file-upload-3" type="file" style="display: none;">
                                <span id="file-name-3"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <script>
        document.getElementById("file-upload-3").addEventListener("change", function(event) {
            var file = event.target.files[0];
            // Handle the uploaded file here, e.g., send it to a server or perform operations with it
            console.log("Uploaded file:", file.name);
            document.getElementById("file-name-3").textContent = file.name;
        });
    </script>

</body>

</html>