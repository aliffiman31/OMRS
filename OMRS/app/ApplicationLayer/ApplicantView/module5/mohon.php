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

                    <!-- SUAMI JOB FORM TABLE -->
                    <section id="suami" class="active">
                    <h3 style="text-align: center;">BORANG BUTIRAN PEKERJAAN SUAMI</h3>
            <form action="suamijobform" method="post">
                <table class="suamitable">
                    <tr>
                        <th >Jenis Pekerjaan : </th>
                        <td ><input type="text" name="jenis-pekerjaan-suami" id=""></td>
                        <th >Nama Majikan/Perusahaan : </th>
                        <td ><input type="text" name="nama-majikan-suami" id=""></td>
                    </tr>
                    <tr>
                        <th>Nama Pekerjaan : </th>
                        <td><input type="text" name="nama-pekerjaan-suami" id=""></td>
                        <th>Alamat Majikan : </th>
                        <td><input type="text" name="alamat-majikan-suami" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <th>Pendapatan : </th>
                        <td><input type="text" name="pendapatan-suami" id=""></td>
                        <th>Poscode : </th>
                        <td><input type="text" name="poscode-suami" id=""></td>
                    </tr>
                    <tr>
                        <th>Nama Bank : </th>
                        <td><input type="text" name="bank-suami" id=""></td>
                        <th>Negeri : </th>
                        <td><input type="text" name="negeri-suami" id=""></td>
                    </tr>
                    <tr>
                        <th>Nombor Akaun : </th>
                        <td><input type="text" name="akaun-suami" id=""></td>
                        <th>Bandar : </th>
                        <td><input type="text" name="bandar-suami" id=""></td>
                    </tr>
                </table>
                <button type="submit" class="kemaskini">Kemaskini</button>
            </form>
                    </section>

                    <!-- ISTERI JOB FORM TABLE -->
                    <section id="isteri">
                    <h3 style="text-align: center;">BORANG BUTIRAN PEKERJAAN ISTERI</h3>
            <form action="isterijobform" method="post">
                <table class="isteritable">
                    <tr>
                        <th >Jenis Pekerjaan : </th>
                        <td ><input type="text" name="jenis-pekerjaan-isteri" id=""></td>
                        <th >Nama Majikan/Perusahaan : </th>
                        <td ><input type="text" name="nama-majikan-isteri" id=""></td>
                    </tr>
                    <tr>
                        <th>Nama Pekerjaan : </th>
                        <td><input type="text" name="nama-pekerjaan-isteri" id=""></td>
                        <th>Alamat Majikan : </th>
                        <td><input type="text" name="alamat-majikan-isteri" style="width: 100%;"></td>
                    </tr>
                    <tr>
                        <th>Pendapatan : </th>
                        <td><input type="text" name="pendapatan-isteri" id=""></td>
                        <th>Poscode : </th>
                        <td><input type="text" name="poscode-isteri" id=""></td>
                    </tr>
                    <tr>
                        <th>Nama Bank : </th>
                        <td><input type="text" name="bank-isteri" id=""></td>
                        <th>Negeri : </th>
                        <td><input type="text" name="negeri-isteri" id=""></td>
                    </tr>
                    <tr>
                        <th>Nombor Akaun : </th>
                        <td><input type="text" name="akaun-isteri" id=""></td>
                        <th>Bandar : </th>
                        <td><input type="text" name="bandar-isteri" id=""></td>
                    </tr>
                </table>
            </form>
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
