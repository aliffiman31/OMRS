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