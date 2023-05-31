// // JavaScript code
// document.addEventListener("DOMContentLoaded", function() {
//     const sections = document.querySelectorAll("section");
//     const navLinks = document.querySelectorAll("nav a");
//     const contentContainer = document.querySelector(".content");

//     function showSection(id) {
//         sections.forEach(function(section) {
//             section.style.display = "none";
//         });
//         document.getElementById(id).style.display = "block";
//         contentContainer.innerHTML = document.getElementById(id).innerHTML;
//     }

//     navLinks.forEach(function(navLink) {
//         navLink.addEventListener("click", function(e) {
//             e.preventDefault();
//             const targetId = this.getAttribute("href").substring(1);
//             showSection(targetId);
//         });
//     });

//     showSection("suami");
// });
