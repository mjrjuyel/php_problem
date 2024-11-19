<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        * {
            padding: 0;
            margin: 0;
            outline: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 960px auto;
            margin-inline: 2.5rem;
        }

        .section {
            background: #FFDD98;
            height: 100vh;
        }

        body {
            color: black;
        }

        .section_content {
            text-align: center;
        }

        .section_content h1 {
            padding: 20px;
            border-bottom: 2px dashed #fff;
        }
    </style>
</head>

<body>

    <section class="container">
    
        <div class="section">
            <div class="section_content">
                <h1>This is PHP Program</h1>
                <?php
            

              $cars = array(
                  array(
                      'id' => 001,
                      'country' => 'USA',
                      'car_name' => 'Ford',
                  ),
                  array(
                      'id' => 013,
                      'country' => 'Germany',
                      'car_name' => 'Volkswagen',
                  ),
                  array(
                      'id' => 253,
                      'country' => 'Japan',
                      'car_name' => 'Toyota',
                  )
              );
              
              $countries = array_column($cars, 'country' ,1);
              foreach($countries as $na => $cou){
                echo $na . " :" .$cou;
              }
                ?>
                <form action="" method="POST">
                    <label for="">Enter Sequence Number :<label>
                            <input type="number" name="init" value="">
                            <input type="number" name="digit" value="">
                            <input type="number" name="count" value="">
                            <input type="submit" value="Enter Value">
                </form>
            </div>
        </div>
    </section>
    <script src="" async defer></script>
</body>

</html>