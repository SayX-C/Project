<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'api.php';


$api = new Api;

$quoteApi = $api->getApiQuote();
$imgUrl = $api->getApiImage();
// var_dump($imgUrl);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" type="text/css">

    <title>Image</title>

    <style>
        body {
            background-image: url(<?php echo $imgUrl; ?>);
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-color: rgba(25, 25, 255, 0.5);
        }

        .quotes {
            color: white;
            font-size: 30px;

        }

        .aurthor {
            color: white;
            font-size: 15px;
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>

<body class="container-fluid h-100 w-100 g-0">
    <div class="bg-clr border boder-5 boder-dark height">
        <h1 class=" text-center text-danger">Project</h1>
        <div class=" ">
            <h3 class="quotes text-center "><?php echo $quoteApi[0] ?></h3>
            <p class="aurthor text-center ">-<?php echo $quoteApi[1] ?></p>
        </div>
    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>