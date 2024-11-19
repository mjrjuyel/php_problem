<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get the current file name</title>
</head>
<body>
    <?php
    $fileName = basename($_SERVER['PHP_SELF'])
    ?>
    <h3>
        <?php if($fileName != null){
        echo $fileName;
        } ?>
    </h3>

    
</body>
</html>