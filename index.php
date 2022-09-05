<?php 

    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Food.php';
    require_once __DIR__ . '/classes/Utilities.php';
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/Registered.php';
    require_once __DIR__ . '/classes/Guest.php';

    // Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno 
    // shop online con le seguenti caratteristiche:
    // L'e-commerce vende prodotti per gli animali.
    //  I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    // L'utente potrà sia comprare i prodotti senza registrarsi,
    //  oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    // Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    // BONUS:
    // Alcuni prodotti (es. antipulci) avranno la caratteristica che
    // saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).

    /**
     * User{
     *  utente iscritto | non iscritto
     * }
     * 
     * Class Product{
     *  $name;
     *  $desription;
     *  $price;
     *  $serialCode;
     *  $typeOfProduct; ->
     *  Class Food{
     *      $packaging;
     *      $dryOrWet;
     *      $wichAnimal;
     *      $nutritionValue;
     *      $puppyOrAdults;
     *      $expirationDate;
     *    }
     * Class Toys{
     *       $size;
     *       $material;
     *     }
     * Class Utilities{
     *      $size;
     *      $porpouse;
     *     }
     * }
     * 
     */
    // $products = [];
    // $products[] = new Product("ciao", 33.40, 1455667899, "ciao");
    // $products[] = new Product("pappanza", 33.42, 1212121212, "ehila");

    $foods = [];
    $foods[] = new Food("pappa", 33.44, 1234567899, "cibazzo", "latta", false, "dog", "bono", true, "22/10/2200", "400g");
    $foods[] = new Food("pappanza", 22.30,  1234567890, "pappabella", "busta", true, "cat", "bonissimo", true, "23/01/3404", "300g");

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

    <?php foreach ($foods as $food) {  ?>
        <div>  
           <?php echo 'Name: ' . $food->getName() . '  '; ?>
        </div>
    <?php } ?>
</body>
</html>