<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    .content-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .content {
        border: 1px solid black;
        height: 700px;
        width: 830px;
        background-color: azure;
        margin-top: 310px;
        margin-left: 290px;
        overflow: auto;
    }

    .table-info {
        width: 770px;
        margin-left: 30px;
        width: 90%;
        border: none;
    }

    .table-data {
        border: 1px solid black;
        border-collapse: collapse;
        padding-left: 10px;
        padding-right: 10px;
        text-align: center;
    }

    .inner-content {
        margin-left: 30px;
        margin-top: 40px;
    }

    #paid {
        width: 260px;
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #alamat {
        width: 400px;
        height: 40px;
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #tarikhMula {
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #tarikhTamat {
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #tempat {
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #masaMula {
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #masaTamat {
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #pegawai {
        width: 300px;
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #noTel {
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #catatan {
        width: 350px;
        background: #FFE0F6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border: none;
    }

    #ic-num {
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), inset 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        border: none;
        width: 300px;
        height: 30px;
    }

    #button1 {
        border-radius: 9px;
        height: 30px;
        background: #6D72F1;
        color: #FFFFFF;
        border: none;
        width: 80px;
        margin-left: 630px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        margin-top: 20px;
    }

    .icon {
        width: 15px;
    }

    .table-info2 {
        border-collapse: collapse;
        width: 96%;
        text-align: center;

    }

    .table-info2 td {
        border: 1px solid #000000;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #button2 {
        border-radius: 9px;
        height: 28px;
        background: #6D72F1;
        color: #FFFFFF;
        border: none;
        width: 60px;
        margin-right: 420px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
</style>

<body>
    <div>
        <!-- Header -->
        <?php
        include_once('../../Common/header.html');
        ?>


        <section>

            <div>
                <?php include_once('../../Common/staffsidebar.php');  ?>
            </div>

            <div class="content-container">
                <div class="content">
                    <div class="inner-content">
                        <form id="religious-form" action="../../../../public/Facade.php?action=ReligiousInfo" method="POST" enctype="multipart/form-data">
                            <table class="table-info">
                                <tr>
                                    <td class="table-header">
                                        <label for="office">Religious Office</label>
                                    </td>
                                    <td>
                                        :<select id="office" name="office" required>
                                            <option value="">Select an office</option>
                                            <option value="JAIPTermerloh">JAIP Termerloh</option>
                                            <option value="JAIPPekan">JAIP Pekan</option>
                                            <option value="JAIPKuantan">JAIP Kuantan</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-header">
                                        <label for="Venue">Place</label>
                                    </td>
                                    <td>
                                        :<input type="text" id="Venue" name="Venue" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-header">
                                        <label for="Date">Tarikh Mula</label>
                                    </td>
                                    <td>
                                        :<input type="Date" id="Date" name="Date" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-header">
                                        <label for="Capacity">Capacity</label>
                                    </td>
                                    <td>
                                        :<input type="number" id="Capacity" name="Capacity" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-header">
                                        <label for="Vacancy">Vacancy</label>
                                    </td>
                                    <td>
                                        :<input type="number" id="Vacancy" name="Vacancy" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-header">
                                        <label for="speakerName">Speaker Name</label>
                                    </td>
                                    <td>
                                        :<input type="text" id="speakerName" name="speakerName" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-header">
                                        <label for="MCcertificate">Marriage Course Certificate</label>
                                    </td>
                                    <td>
                                        :<input type="file" id="MCcertificate" name="MCcertificate" required>
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" id="button1" onclick="submitForm('religious-form')">Kemaskini</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


</body>

</html>