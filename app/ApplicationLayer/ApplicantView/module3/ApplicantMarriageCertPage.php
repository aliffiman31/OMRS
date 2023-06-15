<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="MarriageCert.css">
    <title>Marriage Certificate and Card</title>
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
            <h1>~PENDAFTARAN PERKAHWINAN~</h1>
           </div>
           <div class="box">
           <h1>SIJIL PERKAHWINAN</h1>
           </div>
           <table id="resultsTable" border="1">
                <tr>
                    <th>No</th>
                    <th>No K/P </th>
                    <th>Status</th>
                    <th>Keterangan</th>
                    <th>Senarai Semak</th>
                    <th>Operasi(Klik di sini untuk muat turun sijil perkahwinan)</th>
                    
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                       
                    </td>
                    <td></td>
                    <td>
                        
                      </td>
                      <td>
                      <a href="#" class="print-link">KLIK DI SINI</a>
                     </td>
                </tr>
            </table>
            <div class="pagination">
            <button id="submit" type="submit"><a href="ApplicantCheckStatusPage.php">KEMBALI</a></button>
            <button id="submit" type="submit">OKAY</button>
            </div>
</div>
</div>
</section>
</div>
</body>
</html>
