<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="mohon.css">

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
                    <!-- Navigation Bar -->
                    <nav>
                        <ul>
                            <li><a href="#suami" id="nav-suami" onclick="navigateToSection('suami')">Suami</a></li>
                            <li><a href="#isteri" id="nav-isteri" onclick="navigateToSection('isteri')">Isteri</a></li>
                            <li><a href="#dokumen" id="nav-dokumen" onclick="navigateToSection('dokumen')">Dokumen</a></li>
                        </ul>
                    </nav>

                    <!-- Content Sections -->
                    <section id="suami" class="active">
                        <h2>Suami</h2>
                        <p>This is the content for Suami.</p>
                    </section>

                    <section id="isteri">
                        <h2>Isteri</h2>
                        <p>This is the content for Isteri.</p>
                    </section>

                    <section id="dokumen">
                        <h2>Dokumen</h2>
                        <p>This is the content for Dokumen.</p>
                    </section>

                    <!-- Navigation Buttons -->
                    <div class="navigation-buttons">
                        <button id="backButton" onclick="navigateToPreviousSection()" disabled>Back</button>
                        <button id="nextButton" onclick="navigateToNextSection()">Next</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="mohon.js"></script>
</body>
</html>
