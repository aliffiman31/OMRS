<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="ApplicantRequirementPage.css">
</head>

<body>
    <div>
        <!-- Header -->
        <?php include_once('../../Common/header.html'); ?>

        <section>
            <div>
                <?php include_once('../../Common/staffsidebar.php'); ?>
            </div>

            <div class="content-container">
                <div class="content">
                    <!-- Put Your Content Here  -->
                    <h1>Special Incentives</h1>

                    <table>
                        <thead>
                            <tr>
                                <th>Applicant ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($specialIncentives as $incentive) : ?>
                                <tr>
                                    <td><?php echo $incentive['GF_ID ']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>
</body>

</html>