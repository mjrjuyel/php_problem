<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test The Number!</title>
</head>
<body style="text-align:center; height:100vh; background:#384963; color:#eef0ff; ">
    <?php
   function checkNumber($number){
    $r = $number > 30 ? "Greater than 30 " : ( $number > 20 ? "Greater Than 20 " : ($number > 10 ? "Greater Than 10 " : $number));

    echo $r;
   }

  checkNumber(20);
    ?>
</body>
</html>