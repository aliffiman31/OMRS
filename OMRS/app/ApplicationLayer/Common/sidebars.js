/* global bootstrap: false */
(() => {
  'use strict'
  const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()


function redirectToURL(className){
  if(className=="maklumatpemohon")
    window.location.replace("../../../ApplicationLayer/ApplicantView/module1/testing.php");
  else if(className=="syarat-kelayakan")
    window.location.replace("../../ApplicantView/module5/syaratpage.php");
  else if(className=="mohon")
    window.location.replace("../../ApplicantView/module5/mohon.php");
}