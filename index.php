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
</head>

<body>
    <!-- Remember that alternative syntax is good and html inside php is bad Intro to PHP -->

    <?= "<h1>{$config['gallery_name']}</h1>" ?>
    <div id="gallery">
        <?php
        foreach ($config['unsplash_categories'] as $category) {
            echo "
        <div>
            <h2>" . ucfirst($category) . "</h2>
            <img src='https://source.unsplash.com/300x200/?$category' alt='$category'>
        </div>
        ";
        };
        ?>
        <!-- <p>My name is $eachGhost. My nickname is {$array['nickname']}. I am {$array['color']}.</p> -->

    </div>
    <?= "<h1>" . count($config['local_images']) . " Large Images</h1>" ?>
    <div id="large-images">

        <?php
        foreach ($config['local_images'] as $webpage => $array) {
            $photographer = $array[0];
            $image = $array[1];
            echo "
            <div>
                <img src=\"images/$image\" alt=\"$photographer\">
                <h3 class=\"photographer\"><a href=\"https://unsplash.com/@$webpage\">$photographer</a></h3>
            </div>
            ";
        }
        ?>
    </div>

</body>

</html>