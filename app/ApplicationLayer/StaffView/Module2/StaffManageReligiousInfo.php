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
                    <form id="religious-form" action="../../../../public/Facade.php?action=ReligiousInfo" method="POST">

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
                                    <input type="Date" id="date" name="Date" required>
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
                        </table>
                        <button type="submit" class="kemaskini" onclick="submitForm(event, 'religious-form')">Kemaskini</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        function submitForm(event, formId) {
            event.preventDefault(); // Prevent the default form submission

            // Get the form data
            var form = document.getElementById(formId);
            var formData = new FormData(form);

            // Create an AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open(form.method, form.action, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    alert('Successfully Registered');
                    // You can perform any additional actions or show a success message here

                    // Clear the form inputs if needed
                    form.reset();
                }
            };

            // Send the form data
            xhr.send(formData);
        }
    </script>


</body>

</html>