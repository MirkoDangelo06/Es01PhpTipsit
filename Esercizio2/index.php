<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Ciao regaz, ecco l'elenco degli autoveicoli o macchine</h1>

    <?php
         require_once "Veicolo.php";
         require_once "Automobile.php";

        $v1 = new Veicolo("hiundai", 2000);
        $v2 = new Veicolo("hiundai", 2000);

        $v1->stampaAttributi();
        $v2->stampaAttributi();

        $a1 = new Automobile("jojo", 1900,"gxt");
        $a1->stampaAttributi();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>