<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Strona główna</a></li>
                <li><a href="index.php">O nas</a></li>
                <li><a href="index.php">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="left-block">
            <h2>Lista pokoi</h2>
            <ul>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'baza');
                $kw5 = 'SELECT DISTINCT p.nazwa, p.id AS idd FROM Pokoj p JOIN rezerwacja ON rezerwacja.pokoj = p.id';
                $result1 = $conn -> query($kw5);
                foreach($result1 as $var5) {
                    echo('<li><a href="index.php?id='.$var5["idd"].'">'.$var5["nazwa"].'</a></li>'.'</br>');
                }
                ?>
            </ul>
        </div>
        <div class="center-block">
            <?php
            if(!empty($_GET["id"])){
                $ids = $_GET["id"];
                $kw4 = 'SELECT pokoj.nazwa, pokoj.numer, rezerwacja.imie, rezerwacja.nazwisko, rezerwacja.czasRozpoczecia, rezerwacja.czasZakonczenia FROM pokoj JOIN rezerwacja ON rezerwacja.pokoj = pokoj.id WHERE pokoj.id='.$ids;
                $result4 = $conn -> query($kw4);
                $dub=0;
                foreach($result4 as $var4) {
                    if($dub!=1) {
                        echo('<h2>'.$var4["nazwa"].'</h2>');
                        echo('<h3>'.$var4["numer"].'</h3>');
                        echo('<p>'.$var4["imie"].$var4["nazwisko"].'</p>');
                        echo('<p>'.$var4["czasRozpoczecia"].'</p>');
                        echo('<p>'.$var4["czasZakonczenia"].'</p>');
                        $dub=1;
                    }
                }
            }
            if(empty($_GET["id"])){
                $else='SELECT MIN(id) AS min FROM pokoj';
                $reselse=$conn -> query($else);
                foreach($reselse as $block) {

                }
                $kw4 = 'SELECT pokoj.nazwa, pokoj.numer, rezerwacja.imie, rezerwacja.nazwisko, rezerwacja.czasRozpoczecia, rezerwacja.czasZakonczenia FROM pokoj JOIN rezerwacja ON rezerwacja.pokoj = pokoj.id WHERE pokoj.id='.$block["min"];
                $result4 = $conn -> query($kw4);
                $dub=0;
                foreach($result4 as $var4) {
                    if($dub!=1) {
                        echo('<h2>'.$var4["nazwa"].'</h2>');
                        echo('<h3>'.$var4["numer"].'</h3>');
                        echo('<p>'.$var4["imie"].$var4["nazwisko"].'</p>');
                        echo('<p>'.$var4["czasRozpoczecia"].'</p>');
                        echo('<p>'.$var4["czasZakonczenia"].'</p>');
                        $dub=1;
                    }
                }
            }
            ?>
        </div>
        <div class="right-block">
            <h2>Dodaj nową rezerwację</h2>
            <form method="post" action="index.php">
                <label>Imię</label><br>
                <input class="inp" name="name" type="text"><br>
                <label>Nazwisko</label><br>
                <input class="inp" name="surname" type="text"><br>
                <label>Pokoj</label><br>
                <select name="select">
                    <?php
                    $kw2 = 'SELECT id, nazwa FROM pokoj';
                    $result2 = $conn -> query($kw2);
                    foreach($result2 as $op) {
                        echo('<option value="'.$op["id"].'">'.$op["nazwa"].'</option>');
                    }
                    ?>
                </select><br>
                <label>Data rozpoczęcia rezerwacji</label><br>
                <input class="inp" name="start" type="date"><br>
                <label>Data zakończenia rezerwacji</label><br>
                <input class="inp" name="stop" type="date"><br>
                <input class="btn" name="submit" type="submit" value="Wyslij">
            </form>
            <?php
            if(!empty($_POST['submit'])) {
                $sql = "INSERT INTO `rezerwacja`(`imie`, `nazwisko`, `czasRozpoczecia`, `czasZakonczenia`, `pokoj`) VALUES ('".$_POST["name"]."','".$_POST["surname"]."','2023-05-16 15:00','2023-05-17 12:00',2)";
                $cmc = $conn -> query($sql);
            }
            $conn -> close();
            ?>
        </div>
    </main>
    <footer>
        <p>&copy 05313010227</p>
    </footer>
</body>
</html>