<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display source code of a webpage</title>
</head>
<body style="text-align:center; height:100vh; background:#384963; color:#eef0ff; ">
    <?php
    $all_lines = file('https://www.w3resource.com/');

    // Iterate through each line in the array
    foreach ($all_lines as $line_num)
    {
        // Display the line number and the HTML-escaped content of the line
        echo  htmlspecialchars($line_num) . "\n";
    }
    ?>
    <h3>
    
    </h3>

    
</body>
</html>