<?php
session_start();

$ic=$_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="ApplicantApplyPage.css">

    <style>
        th,
        td {
            padding: 5px;
            vertical-align: top;
            display: flex;
            margin-left: 15px;
        }

        .form-section {
            margin-bottom: 100px;
        }

        .title {
            margin-left: 200px;
            margin-bottom: 15px;
            margin-top: 20px;
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

                    <form action="../../../../public/Facade.php?action=ApplyForm" method="post">

                        <table class="incentive-form">
                            <tbody>
                                <tr>
                                    <th class="title" colspan="3">BORANG PEKERJAAN SUAMI</th>
                                </tr>

                                <tr>
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th>Jenis Pekerjaan : </th>
                                    <td><input type="text" name="suami-jobtype" id="suami-jobtype" required></td>
                                    <th>Nama Pekerjaan : </th>
                                    <td><input type="text" name="suami-jobname" id="suami-jobname" required></td>
                                    <th>Alamat Tempat Bekerja : </th>
                                    <td><input type="text" name="suami-jobaddress" id="suami-jobaddress" required></td>
                                    <th>Pendapatan : </th>
                                    <td><input type="number" name="suami-salary" id="suami-salary" required></td>
                                    <th>Jenis Bank : </th>
                                    <td><input type="text" name="suami-bank" id="suami-bank" required></td>
                                    <th>Nombor Akaun Bank : </th>
                                    <td><input type="number" name="suami-noacc" id="suami-noacc" required></td>
                                </tr>

                                <!-- Gap between form sections -->
                                <tr class="form-section">
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th class="title">BORANG PEKERJAAN ISTERI</th>
                                </tr>

                                <tr>
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th>Jenis Pekerjaan : </th>
                                    <td><input type="text" name="isteri-jobtype" id="suami-jobtype" required></td>
                                    <th>Nama Pekerjaan : </th>
                                    <td><input type="text" name="isteri-jobname" id="suami-jobname" required></td>
                                    <th>Alamat Tempat Bekerja : </th>
                                    <td><input type="text" name="isteri-jobaddress" id="suami-jobaddress" required></td>
                                    <th>Pendapatan : </th>
                                    <td><input type="number" name="isteri-salary" id="suami-salary" required></td>
                                    <th>Jenis Bank : </th>
                                    <td><input type="text" name="isteri-bank" id="suami-bank" required></td>
                                    <th>Nombor Akaun Bank : </th>
                                    <td><input type="number" name="isteri-noacc" id="suami-noacc" required></td>
                                </tr>

                                <!-- Gap between form sections -->
                                <tr class="form-section">
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th class="title">BORANG MAKLUMAT SAUDARA TERDEKAT</th>
                                </tr>

                                <tr>
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th>Nama : </th>
                                    <td><input type="text" name="cr-name" id="cr-name" required></td>
                                    <th>Nombor IC : </th>
                                    <td><input type="number" name="cr-icnum" id="cr-icnum" required></td>
                                    <th>Alamat Rumah : </th>
                                    <td><input type="text" name="cr-address" id="cr-address" required></td>
                                    <th>Hubungan dengan Pemohon : </th>
                                    <td><input type="number" name="cr-relation" id="cr-relation" required></td>
                                    <th>Nombor Telefon : </th>
                                    <td><input type="number" name="cr-phone" id="cr-phone" required></td>
                                </tr>

                                <!-- Gap between form sections -->
                                <tr class="form-section">
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th class="title">DOKUMEN SOKONGAN</th>
                                </tr>

                                <tr>
                                    <!-- spacing -->
                                </tr>

                                <tr>
                                    <th>Slip Gaji : </th>
                                    <td><input type="file" name="file[]" multiple required></td>
                                    <th>Surat Pengesahan Bermastautin(Jika Berkaitan) : </th>
                                    <td><input type="file" name="file2[]" multiple></td>
                                </tr>
                            </tbody>
                        </table>


                        <div class="button">
                            <button type="submit">Submit</button>
                        </div>


                    </form>

                </div>
            </div>
        </section>
    </div>

    <script src="mohon.js"></script>

    <script>
        // Retrieve form input elements
        const nameInput = document.getElementById('suami-jobtype');
        const emailInput = document.getElementById('suami-jobname');
        // Add more variables for other form fields

        // Load saved form data from localStorage
        window.addEventListener('load', () => {
            const savedFormData = localStorage.getItem('formData');
            if (savedFormData) {
                const parsedData = JSON.parse(savedFormData);
                nameInput.value = parsedData.name;
                emailInput.value = parsedData.email;
                // Set values for other form fields
            }
        });

        // Save form data to localStorage when inputs change
        nameInput.addEventListener('input', saveFormData);
        emailInput.addEventListener('input', saveFormData);
        // Add event listeners for other form fields

        function saveFormData() {
            const formData = {
                name: nameInput.value,
                email: emailInput.value,
                // Add properties for other form fields
            };
            localStorage.setItem('formData', JSON.stringify(formData));
        }
    </script>

</body>

</html>