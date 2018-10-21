<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

    <?php

    $predmety = ['čeština' => 2, 'matematika' => 4, 'němčina' => 1, 'ruština' => 3];
    $soucet = 0;
    $pocet = 0;

    echo '<table class="table table-bordered">';

    foreach ($predmety as $predmet => $znamka) {

        $trida = '';

        if ($znamka > 3) {
            $trida = 'class="alert-danger"';
        }

        echo "<tr $trida>
            <td>$predmet</td>
            <td>$znamka</td>
        </tr>";

        $pocet = $pocet + 1;
        $soucet = $soucet + $znamka;
    }

    echo '</table>';

    echo "Průměr: ";
    echo $soucet / $pocet;

    ?>

</div>
</body>
</html>
