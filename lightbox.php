<?php

/*******w******** 
    
    Name: Milan Cruz
    Date: 17-05-2024
    Description:

 ****************/

$config = [

    'gallery_name' => 'Milan\'s Imagination',

    'unsplash_categories' => ['cars', 'boats', 'brazil', 'jedis', 'motorcycles', 'planets', 'canada', 'siths'],

    'local_images' => [
        'joeyabanks' => ['Joey Banks', 'image_1.png'],
        'nikolasnoonan' => ['Nikolas Noonan', 'image_2.png'],
        'mattebalza' => ['Matteo Balzanelli', 'image_3.png'],
        'introspectivedsgn' => ['Erik Mclean', 'image_4.png']
    ]

];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <title><?= "{$config['gallery_name']}" ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>

</head>

<body>
    <!-- Remember that alternative syntax is good and html inside php is bad Intro to PHP -->

    <?= "<h1>{$config['gallery_name']}</h1>" ?>
    <div id="gallery">

        <?php
        foreach ($config['local_images'] as $webpage => $array) {
            $photographer = $array[0];
            $image = $array[1];
            $thumbnail_image = str_replace('.png', '_thumbnail.png', $image); // Concatenate _thumbnail
            echo "
        <div>
            <h2>" . ucfirst($photographer) . "</h2>
            <a href=\"images/$image\">
                <img src=\"images/$thumbnail_image\" alt=\"$photographer\">
            </a>
        </div>
        ";
        };
        ?>

    </div>
    <script>
        new LuminousGallery(document.querySelectorAll(".image a"));
    </script>

</body>

</html>