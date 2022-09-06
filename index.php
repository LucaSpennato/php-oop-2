<?php 

    require_once __DIR__ . '/classes/product/Product.php';
    require_once __DIR__ . '/classes/product/Food.php';
    require_once __DIR__ . '/classes/product/Utilities.php';
    require_once __DIR__ . '/classes/user/Registered.php';
    require_once __DIR__ . '/classes/user/User.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>
        <?php
            $user = new Registered("ciccio", "pasticcio");
            $user->addToCart(new Food("cibbo", 33.44, 2313132425, "pappabella", "can", true, "dog", "bono", true, "20/04/2500", "400g"));
            $user->addToCart(new Utilities("pillolazze", 50.33, 1415151515, "pillazze per cose", "3x2"));
            var_dump($user);

            $guest = new User();
            $guest->addToCart(new Food("pappa", 33.55, 1919191919, "pappa altamente nutriente", "busta", false, "cat", "pocobono", true, "20/01/3000", "445g"));
            $guest->addToCart(new Utilities("Cool Shaders", 5000.22, 1010101010, "coolest shaders ever", "30cmX10cm"));
            var_dump($guest);
        ?>
    </h3>

    <h5>
        <?php 
            echo "Prezzo utente registrato: " . $user->getDiscounted();
        ?>
    </h5>

    <h5>
        <?php
            echo "Prezzo ospite: " . $guest->getCartTotal();
        ?>
    </h5>

</body>
</html>