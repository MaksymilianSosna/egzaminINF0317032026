<?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'medica');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Medica</title>
    <link rel="icon" href="obraz2.png">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>

    <article>
        <?php
            $zapytanie = "SELECT abonamenty.nazwa, abonamenty.cena, abonamenty.opis FROM abonamenty";
            $wynik = mysqli_query($polaczenie, $zapytanie);

            while($row = mysqli_fetch_array($wynik)){
                echo "<h3>Pakiet $row[0] - cena $row[1] zł</h3>";
                echo "<p>$row[2]</p>";
            }
        ?>
        <a href="opis.html">Dowiedz się więcej</a>
    </article>
        
    <main>

        <section>
            <h2>Standardowy</h2>
            <ul>
                <?php
                    $zapytanie2 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 1";
                    $wynik2 = mysqli_query($polaczenie, $zapytanie2);

                    while($row = mysqli_fetch_array($wynik2)){
                        echo "<li>$row[1]</li>";
                    }
                ?>
            </ul>
        </section>

        <section>
            <h2>Premium</h2>
            <ul>
                <?php
                    $zapytanie3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 2";
                    $wynik3 = mysqli_query($polaczenie, $zapytanie3);

                    while($row = mysqli_fetch_array($wynik3)){
                        echo "<li>$row[1]</li>";
                    }
                ?>
            </ul>
        </section>

        <section>
            <h2>Dziecko</h2>
            <ul>
                <?php
                    $zapytanie4 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 3";
                    $wynik4 = mysqli_query($polaczenie, $zapytanie4);

                    while($row = mysqli_fetch_array($wynik4)){
                        echo "<li>$row[1]</li>";
                    }
                ?>
            </ul>
        </section>
    </main>

    <footer>
        <p><img src="obraz2.png" style="width: 32px;" alt="przychodnia"> Stronę przygotował: 00000000000</p>
    </footer>

    
</body>

<?php
   $polaczenie->close();
?>
</html>