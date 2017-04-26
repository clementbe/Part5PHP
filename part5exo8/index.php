<!DOCTYPE html>
<html>
   <head>
        <meta charset="utf-8">
        <title>exo8p5</title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="align">
            <a href="../part5exo1/index.php"><button class="button">Exercice 1</button></a>
            <a href="../part5exo2/index.php"><button class="button">Exercice 2</button></a>
            <a href="../part5exo3/index.php"><button class="button">Exercice 3</button></a>
            <a href="../part5exo4/index.php"><button class="button">Exercice 4</button></a>
            <a href="../part5exo5/index.php"><button class="button">Exercice 5</button></a>
            <a href="../part5exo6/index.php"><button class="button">Exercice 6</button></a>
            <a href="../part5exo7/index.php"><button class="button">Exercice 7</button></a>
            <a href="../part5exo8/index.php"><button class="button">Exercice 8</button></a>
            <a href="../part5exo9/index.php"><button class="button">Exercice 9</button></a>
            <a href="../part5exo10/index.php"><button class="button">Exercice 10</button></a>
        </div>
        <div class="php">
            <?php
            //Déclaration du tableau avec les mois
            $mois = array ('Janvier', 'Fevrier',  'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
            //Début de la boucle de 0 a 12 pour les mois
            for ($numero = 0; $numero < 12; $numero++){
                //Affichage des mois avec la boucle de 0 a 12
                echo $mois[$numero];
                ?>
            <br>
            <?php
             }
            ?>
        </div>
    </body>
</html>