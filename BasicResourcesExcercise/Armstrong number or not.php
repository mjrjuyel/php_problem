
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong number or not</title>
</head>
<body style="text-align:center; height:100vh; background:#384963; color:#eef0ff; ">
    <?php
    function armstrongNumber($num){
        $num_len = strlen($num);
        $sum = 0;
        $digit = $num;
        for($i=1; $i<=$num_len; $i++){
            $remain =$num%10;
            $sum = $sum +($remain*$remain*$remain);
            $num = intval($num/10);
        }
       if($digit === $sum){
        echo "The number is Armstrong  ". $sum;
       }
       else{
        echo "The Is number is not Armstrong";
       }
    }

    armstrongNumber(407);
    ?>
    <h3>
    
    </h3>

    
</body>
</html>