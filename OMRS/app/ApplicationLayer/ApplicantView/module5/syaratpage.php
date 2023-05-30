<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat Kelayakan</title>
    <link rel="stylesheet" href="syaratpage.css">
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
                <!-- Put Your Content Here  -->
                <form action="../../../../public/Facade.php?action=formregister" method="post">
                    <input type="text" name="names" id="names">
                    <button type="submit">submit</button>
                </form>
            </div>
        </div>
</section>
    </div>
        
</body>
</html>