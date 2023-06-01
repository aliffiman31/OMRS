<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="maintemplate.css">
    <style>
        table, th, td{
            border: 1px solid black;
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
            <div id="search-box">
            <form action="/search" method="GET">
                <label for="search">Pilih tempat:</label><br>
                <input type="text" id="search" list="options" placeholder="eg:- Jabatan Agama Islam Kuantan">
                <datalist id="options">
                    <option value="JAIP Kuantan">
                    <option value="JAIP Pekan">
                    <option value="JAIP Bentong">
                    <option value="JAIP Temerloh">
                </datalist>
                <button type="button" id="button1">Cari</button>
            </form>
        </div>
        <br>
        <br>
        <div>
            <table class="table-info">
                <tr>
                    <td class="table-data">Bil</td>    
                    <td class="table-data">Anjuran</td>
                    <td class="table-data">Tempat</td>
                    <td class="table-data">Tarikh</td>
                    <td class="table-data">Kapasiti Peserta</td>
                    <td class="table-data">Kekosongan</td>
                    <td class="table-data">Daftar Penyertaan</td>
                </tr>
                <tr>
                    <td class="table-data"></td>    
                    <td class="table-data"></td>
                    <td class="table-data"></td>
                    <td class="table-data"></td>
                    <td class="table-data"></td>
                    <td class="table-data"></td>
                    <td class="table-data"></td>
                </tr>
            </table>

        </div>
            </div>
        </div>
</section>
    </div>
        


</body>
</html>