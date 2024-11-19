<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>computethesumoftheprimenumberslessthan100</title>
</head>
<body style="text-align:center; height:100vh; background:#384963; color:#eef0ff; ">
    <?php
      $sum = 0;
      for($i=2; $i<=100; $i++){
        $isPrimeNmber = true;
         for($j=2; $j*$j <= $i ; $j++){
            if($i%$j == 0){
            $isPrimeNmber = false;
              break;
            }
            $isPrimeNmber = true;
         }
         if($isPrimeNmber == true){
            $sum += $i;
         }
      }
      echo "Sum of the prime number: " . $sum;
    ?>
    <h3>
    
    </h3>

    
</body>
</html>