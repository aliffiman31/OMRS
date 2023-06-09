<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="marriagetype.css">
    <title>Semak status permohonaan</title>

</head>
<body>
    <div>
        <!-- Header -->
        <?php
        include_once('../../Common/header.php');
        ?>


        <section>

            <div>
                <?php include_once('../../Common/sidebar.php');  ?>
            </div>

            <div class="content">
        <form class="myform" action="../../../../public/Facade.php?action=applystatus" method="post">
            <div>
                <h1>Permohonaan Perkahwinan</h1>
                <label for="icNumber" class="">No K/P Pemohon:</label>
                <input type="text" id="icNumber" placeholder="xxxxxx-xx-xxxx" required>
                
                <button  type="button" onclick="search()">Semak</button>

            </div>
        </form>
        <table id="resultsTable" style="display: none;">
            <tr>
              <th>No</th>
              <th>No K/P Pasangan</th>
              <th>Tarikh mohon</th>
              <th>Status</th>
              <th>Keterangan</th>
            </tr>
          </table>
       </div>

    </div>
    
</body>
</html>