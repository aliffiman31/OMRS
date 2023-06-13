<?php

require_once '../../../OMRS.dataaccess/DB_Connection_Manager.php';




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="StaffManageReligiousInfo.css">
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
                    <form id="religious-form" action="../../../../public/Facade.php?action=ReligiousInfo" method="POST" enctype="multipart/form-data">
                        <table class="table-info">
                            <tr>
                                <td>
                                    <label for="office">Religious Office:</label>
                                </td>
                                <td>
                                    <select id="office" name="office" required>
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
                                    <label for="Venue">Place:</label>
                                </td>
                                <td>
                                    <input type="text" id="Venue" name="Venue" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Date">Date:</label>
                                </td>
                                <td>
                                    <input type="Date" id="Date" name="Date" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Capacity">Capacity:</label>
                                </td>
                                <td>
                                    <input type="number" id="Capacity" name="Capacity" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Vacancy">Vacancy:</label>
                                </td>
                                <td>
                                    <input type="number" id="Vacancy" name="Vacancy" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="speakerName">Speaker Name:</label>
                                </td>
                                <td>
                                    <input type="text" id="speakerName" name="speakerName" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="MCcertificate">Marriage Course Certificate:</label>
                                </td>
                                <td>
                                    <input type="file" id="MCcertificate" name="MCcertificate" required>
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="kemaskini" onclick="submitForm('religious-form')">Kemaskini</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        
    </script>

</body>

</html>