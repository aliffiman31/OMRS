<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ApplicantViewList.css">
    <title>Applicant List</title>
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
            <form action="../../../../public/index.php?action=applystatus" method="post" id="myForm"></form>
            <div class="box">
            <h1>~URUSAN NIKAH~</h1>
           </div>
           <div class="box">
           <h1>Senarai Pemohon</h1>
           </div>
           <table id="resultsTable" border="1">
                <tr>
                    <th>No</th>
                    <th>No K/P </th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Senarai Semak</th>
                    <th>Operasi(insert marriage doc and card)</th>
                    
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <select>
                    <option value="" disabled selected>Select Option</option>
                    <option value="approve">Approve</option>
                    <option value="reject">Reject</option>
                       </select>
                    </td>
                    <td></td>
                    <td>
                        <a href="ApplicantDoc.php" class="print-link">KLIK DI SINI</a>
                      </td>
                      <td>
                        <input type="file" id="MarriageCert">
                     </td>
                </tr>
            </table>
            <div class="pagination">
            <button id="submit" type="submit">HANTAR</button>
            </div>
</div>
</div>
</section>
</div>
</body>
</html>