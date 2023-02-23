<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozgrywki Futblowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="banner">
        <h2>Swiatowe rozgrywki pilkarskie</h2>
        <img src="obraz1.jpg" alt="" id="img1">
    </div>
    <div class="mecze">
        <?php


        $polacz = mysqli_connect("localhost", "root", "");
        mysqli_select_db($polacz, "egzamin");
        $sql = "SELECT `zespol1`, `zespol2`, `wynik`, `data_rozgrywki` FROM `rozgrywka` WHERE zespol1 = 'EVG'";
        $wynik = mysqli_query($polacz, $sql);
        while($tab = mysqli_fetch_array($wynik)){
            echo "<div class='box'>"."<h3>".$tab['zespol1']." - ".$tab['zespol2']."</h3>"."<br>"."<h4>".$tab['wynik']."</h4>"."<br>"."<p>".$tab['data_rozgrywki']."</p>"."</div>";
        }


        ?>

    </div>
    <div class="main">
        <h2>Repreztacja Polski</h2>
        
    </div>
    <div class="bot">
        <div class="left">
            <p>Podaj pozycje zawodnikow (1-bramkarze 2-obroncy 3-pomocnicy 4-napastnicy)</p>
            <form method="post">
                <input type="number" name="pozycja">
                <input type="submit" value="Sprawdz">
            </form>
         <?php

        $pozycja = $_POST["pozycja"];
        $polacz = mysqli_connect("localhost", "root", "");
        mysqli_select_db($polacz, "egzamin");
        $sql = "SELECT `imie`, `nazwisko` FROM `zawodnik` WHERE `pozycja_id` = $pozycja";
        echo"<ul>";
        $wynik = mysqli_query($polacz, $sql);
        while($tab = mysqli_fetch_array($wynik)){
            echo "<li>".$tab['imie']." ".$tab['nazwisko']."</li>";
        }
        echo "</ul>";

        mysqli_close($polacz);
        ?>
        </div>
        <div class="right">
            <img src="zad1.png" alt="" id="img2">
            <p>Autor: 2323222323</p>
        </div>
    </div>



</body>
</html>