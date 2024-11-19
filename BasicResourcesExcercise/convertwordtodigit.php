
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convert word to digit</title>
</head>
<body style="text-align:center; height:100vh; background:#384963; color:#eef0ff; ">
    <?php
    function convertNumber($string){
        $word = explode(',',$string);
        $result = '';
        foreach($word as $word){
            switch($word){
                case 'zero':
                    $result .= 0;
                    break;
                case 'one': 
                    $result .= 1;
                    break;
                case 'two': 
                    $result .= 2;
                    break;

                case 'three': 
                    $result .= 3;
                    break;
                case 'four': 
                    $result .= 4;
                    break;

                case 'five': 
                    $result .= 5;
                    break;
                case 'six': 
                    $result .= 6;
                    break;
            }

        }
        print_r($result);
    } 

    convertNumber("one,two,three,five");
    convertNumber("one,three,five,five");
    ?>
    <h3>
    
    </h3>

    
</body>
</html>