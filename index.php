<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elias Mäkelän portfolio</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="napit">
        <div class="nappi">
            <a href="index.php"><p class="nimiteksti">Suomeksi</p></a><a href="indexEnglish.php"><p class="nimiteksti">in English</p></a>
        </div>
    </div>
    <?php
    require "./name.php"; 
    require "./project.php"; 
    ?>
</body>
</html>