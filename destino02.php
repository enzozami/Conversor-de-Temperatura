<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            $celsius = filter_input(INPUT_POST, "celsius", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            $tempF = (1.8 * $celsius) + 32;
        
            echo"A temperatura de ". number_format($celsius, 1, ",", ".") . "°C convertida em Fahrenheit é ". number_format($tempF, 1, ",", ".") . "°F";
        ?>
    </div>
</body>
</html>