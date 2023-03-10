<?php
// Dati da inviare
$paragraph = $_GET["paragraph"];
$bad_word = $_GET["bad_word"];

$paragraph_length = strlen($paragraph);
$censored_paragraph = str_replace($bad_word, "***", $paragraph);

$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- TITLE -->
    <title>Document</title>
</head>

<body>
    <!-- Stampo paragrafo originale e la sua lunghezza -->
    <p> <?= echo $paragraph ?> <strong> <?= echo $paragraph_length ?></strong></p>

    <!-- Stampo paragrafo censurato e la sua lunghezza -->
    <p> <?= echo $censored_paragraph ?> <strong> <?= echo $censored_paragraph_length ?></strong></p>
</body>

</html>