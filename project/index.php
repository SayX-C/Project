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
            margin: 0;
            background-image: url(<?php echo $imgUrl; ?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: rgba(25, 25, 255, 0.5);
            height: 100vh;
        }
    </style>
</head>

<body class="container-fluid g-0 ">
    <div class="bg-clr  ">
        <div class="d-flex align-content-center justify-content-center text-danger fs-1 text-decoration-underline">
            <h1>Project</h1>
        </div>
        <div class="container d-flex flex-column align-items-center justify-content-center g-2 height">
            <div class="text-center d-flex align-content-center justify-content-center">
                <p class=" text-light fs-3 "><?php echo $quoteApi[0] ?></p>
            </div>
            <div class=" d-flex align-content-md-center align-content-sm-start justify-content-center ">
                <p class=" text-decoration-underline text-light fs-5">-<?php echo " " . $quoteApi[1] ?></p>
            </div>
        </div>
    </div>
    <!-- !script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>