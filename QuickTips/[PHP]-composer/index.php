<!--
    Composer fungsinya untuk mengelola dependency / dependency manager pada PHP
    Dependency = Ketergantungan
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Composer - PHP</title>
 </head>
 <body>

 <?php
    require_once 'vendor/fzaninotto/faker/src/autoload.php';
    // use the factory to create a Faker\Generator instance
    $faker = Faker\Factory::create('id_ID');

    for ($i = 0; $i < 10; $i++)
    {
        echo $faker->name, "</br>";
    }
 ?>

 </body>
 </html>