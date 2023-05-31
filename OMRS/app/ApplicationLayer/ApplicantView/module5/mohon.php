<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="mohon.css">
    <style>
        /* Updated CSS */
        nav ul {
            list-style: none;
            padding: 0;
            display: inline-block;
        }
        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 5px;
            border-radius: 5px;
        }
        nav ul li a.active {
            background: black;
            color: white;
        }
        .content section {
            display: none;
        }
        .content section.active {
            display: block;
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
    <script>
        var sections = document.querySelectorAll('.content section');
        var navLinks = document.querySelectorAll('nav ul li a');
        var backButton = document.getElementById('backButton');
        var nextButton = document.getElementById('nextButton');
        var currentSectionIndex = 0;

        function showCurrentSection() {
            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.remove('active');
                navLinks[i].classList.remove('active');
            }

            sections[currentSectionIndex].classList.add('active');
            navLinks[currentSectionIndex].classList.add('active');

            if (currentSectionIndex === 0) {
                backButton.disabled = true;
            } else {
                backButton.disabled = false;
            }

            if (currentSectionIndex === sections.length - 1) {
                nextButton.disabled = true;
            } else {
                nextButton.disabled = false;
            }
        }

        function navigateToSection(sectionId) {
            var sectionIndex = Array.from(sections).findIndex(function (section) {
                return section.id === sectionId;
            });

            if (sectionIndex !== -1) {
                currentSectionIndex = sectionIndex;
                showCurrentSection();
            }
        }

        function navigateToNextSection() {
            if (currentSectionIndex < sections.length - 1) {
                currentSectionIndex++;
                showCurrentSection();
            }
        }

        function navigateToPreviousSection() {
            if (currentSectionIndex > 0) {
                currentSectionIndex--;
                showCurrentSection();
            }
        }

        // Check URL hash on page load
        var initialSectionId = window.location.hash.slice(1);
        var initialIndex = Array.from(sections).findIndex(function (section) {
            return section.id === initialSectionId;
        });

        if (initialIndex !== -1) {
            currentSectionIndex = initialIndex;
        }

        showCurrentSection();
    </script>
</body>
</html>
