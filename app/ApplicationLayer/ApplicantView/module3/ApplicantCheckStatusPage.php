<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="semak status permohonan.css">
    <title>Semak status permohonan</title>
</head>

<body>
    <div>
        <!-- Header -->
        <?php
        include_once('../../Common/header.html');
        ?>
        <section>
            <div>
                <?php include_once('../../Common/sidebar.php'); ?>
            </div>
            <div class="content-container">
                <div class="content">
                    <form class="myform" id="myForm" action="../../../../public/Facade.php?action=applystatus" method="post">
                        <div>
                            <h1>Permohonaan Perkahwinan</h1>
                            <label for="icNumber" class="">No K/P Pemohon:</label>
                            <input type="text" id="icNumber" name="icNumber" pattern="\d{6}-\d{2}-\d{4}" placeholder="xxxxxx-xx-xxxx" required>
                            <button type="submit" id="submit">Semak</button>
                        </div>
                    </form>
                    <div id="applicant-table"></div>
                    <p id="success-message" style="display: none;">Successfully submitted!</p>
                </div>
            </div>
        </section>
        <script>
            // Restrict input to numbers and hyphens and limit to 12 characters
            document.getElementById('icNumber').addEventListener('input', function(e) {
                // Remove any non-numeric characters except hyphens
                this.value = this.value.replace(/[^\d-]/g, '');
                // Limit the length to 12 characters
                if (this.value.length > 12) {
                    this.value = this.value.slice(0, 12);
                }
            });

            document.getElementById('myForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent form submission

                var icNumber = document.getElementById('icNumber').value;

                // Perform your logic here (e.g., fetch applicant data from the database)
                // Example applicant data
                var applicantData = [
                    ['990205-05-0987', 'John Doe', '2023-06-01', 'Approved'],
                    ['990205-05-0989', 'Jane Smith', '2023-06-02', 'Pending']
                    // Add more applicant data retrieved from the database
                ];

                // Generate the applicant table
                var html = '<table>';
                html += '<tr>';
                html += '<th>IC Number</th>';
                html += '<th>Name</th>';
                html += '<th>Apply Date</th>';
                html += '<th>Status</th>';
                html += '<th>Action</th>';
                html += '</tr>';

                for (var i = 0; i < applicantData.length; i++) {
                    html += '<tr>';
                    html += '<td>' + applicantData[i][0] + '</td>';
                    html += '<td>' + applicantData[i][1] + '</td>';
                    html += '<td>' + applicantData[i][2] + '</td>';
                    html += '<td>' + applicantData[i][3] + '</td>';
                    html += '<td><button>Edit</button></td>';
                    html += '</tr>';
                }

                html += '</table>';

                // Display the applicant table
                document.getElementById('applicant-table').innerHTML = html;

                // Display the success message
                document.getElementById('success-message').style.display = 'block';
            });
        </script>

    </div>
</body>

</html>