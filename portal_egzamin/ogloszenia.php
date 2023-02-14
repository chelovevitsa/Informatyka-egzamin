<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portal ogłoszeniowy</title>
</head>
<body>
    <header>
        <h1>Portal Ogłoszeniowy</h1>
    </header>
    <div class="lewy">
        <h2>Kategorie ogłoszeń</h2>
        <ol>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        </ol>
        <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
        <table>
            <tr>
                <td>Liczba ogłoszeń</td>
                <td>Ceba ogłoszenia</td>
                <td>Bonus</td>
            </tr>
            <tr>
                <td>1 - 10</td>
                <td>1 PLN</td>
                <td rowspan="3">Subskrypcja newslettera to upsut 0.20 PLN na ogłoszenie</td>
            </tr>
            <tr>
                <td>11 - 50</td>
                <td>0.80 PLN</td>
            </tr>
            <tr>
                <td>51 i więcej</td>
                <td>0.60 PLN</td>
            </tr>
        </table>
    </div>
    <div class="prawy">
        <h2>Ogłoszenia kategorii książki</h2>
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'ogloszenia');
        if(!$db) {
            die("Something went wrong.");
        }
        $sql1 = "SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1";
        // zeby bylo wyswietlane 
        $result1 = mysqli_query($db, $sql1); 
        print_r($result1);

        while( $row = mysqli_fetch_array($result1))
        {
            echo("<h3>".$row["id"]. "-". $row["tytul"]."</h3>");
            echo("<p>".$row["tresc"]."</p>");

            $sql2 = "SELECT uz.telefon
            FROM ogloszenie as og
            JOIN uzytkownik as uz ON og.uzytkownik_id = uz.id
            WHERE og.id =" . $row["id"];
            $result2 = mysqli_query($db, $sql2);
            $tel = mysqli_fetch_array($result2);

            echo("<p>Telefon kontaktowy: ".$tel["telefon"]."</p>");
        }

        mysqli_close($db);
        ?>
    </div>
    <footer>
        Portal ogłoszeniowy opracował: 0000000000
    </footer>
</body>
</html>