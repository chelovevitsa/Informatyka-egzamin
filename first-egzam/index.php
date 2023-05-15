<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obiekty sportowe</title>
    <link rel="stylesheet" href="style.css"?v=4>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Strona glowna</a></li>
                <li><a href="">O nas</a></li>
                <li><a href="">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="left">
            <h2>Lista obiektow sportowych</h2>
            <!-- <ul>
                <li></li>
            </ul> -->
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'sport');
            $kw3='SELECT id, nazwa FROM obiektsportowy';
            $result1 = $conn -> query($kw3);
            foreach($result1 as $var3){
                echo ('<li><a href="'.'index.php?id='.$var3["id"].'">'.$var3["nazwa"].'</a></li>');
            }
            ?>
        </div>
        <div class="center">
            <?php
            if(!empty($_GET['id'])){
                $idd = $_GET['id'];
                $kw4='SELECT obiektsportowy.id, obiektsportowy.nazwa, obiektsportowy.adres, obiektsportowy.godzinyOtwarcia, obiektsportowy.obrazek, rodzajobiektu.nazwa AS obiekt FROM obiektsportowy
            JOIN rodzajobiektu ON obiektsportowy.rodzajObiektu = rodzajobiektu.id 
            WHERE obiektsportowy.id ='.$idd;
            $result2 = $conn -> query($kw4);
            foreach($result2 as $var4){
                echo('<h2>'.$var4["nazwa"].'</h2>');
                echo('<h3>'.$var4["obiekt"].'</h3>');
                echo('<p>'.$var4["adres"].'</p>');
                echo('<img src="img/'.$var4["obrazek"].'"/>');
                echo('<p>'.$var4["godzinyOtwarcia"].'</p>');
            } }else{
                $kwMin = 'SELECT MIN(id) AS min FROM obiektsportowy';
                $resultMin = $conn -> query($kwMin);
                foreach($resultMin as $varMin){
                }
                $kw4='SELECT obiektsportowy.id, obiektsportowy.nazwa, obiektsportowy.adres, obiektsportowy.godzinyOtwarcia, obiektsportowy.obrazek, rodzajobiektu.nazwa AS obiekt FROM obiektsportowy
            JOIN rodzajobiektu ON obiektsportowy.rodzajObiektu = rodzajobiektu.id 
            WHERE obiektsportowy.id ='.$varMin['min'];
            $result2 = $conn -> query($kw4);
            foreach($result2 as $var4){
                echo('<h2>'.$var4["nazwa"].'</h2>');
                echo('<h3>'.$var4["obiekt"].'</h3>');
                echo('<p>'.$var4["adres"].'</p>');
                echo('<img src="img/'.$var4["obrazek"].'"/>');
                echo('<p>'.$var4["godzinyOtwarcia"].'</p>');
            }
            }
            ?>
        </div>
        <div class="right">
            <h2>Dodaj nowy obiekt</h2>
            <form method="POST" action="index.php">
                <label>Nazwa obiektu:</label>
                <input type="text" name="nazwa">

                <label>Adres obiektu:</label>
                <input type="text" name="adres">

                <label>Rodzaj objektu</label>
                <select name="rodzaj">
                    <?php
                    $kw1 = 'SELECT id, nazwa FROM rodzajobiektu';
                    $result3 = $conn -> query($kw1);
                    foreach($result3 as $var){
                        echo("<option value='".$var['nazwa']."'>".$var['nazwa']."</option>");
                    }

                    if(!empty($_POST)){
                        $nazwa = $_POST['nazwa'];
                        $adres = $_POST['adres'];
                        $rodzaj = $_POST['rodzaj'];
                        $godziny = $_POST['godziny'];

                        $nazwatoId = 'SELECT id FROM RodzajObiektu WHERE nazwa = "'.$rodzaj.'"' ;
                        $resultId = $conn -> query($nazwatoId);
                        foreach($resultId as $varId){
                        }
                        echo($varId["id"]);
                        $kw2and5 = "INSERT INTO `obiektsportowy`(`nazwa`, `adres`, `rodzajObiektu`, `godzinyOtwarcia`, `obrazek`)
                         VALUES ('$nazwa','$adres','".$varId['id']."','$godziny','default.jpeg')";
                        $result5 = $conn -> query($kw2and5);
                    }
                    $conn -> close();
                    ?>
                </select>

                <label>Godziny otwarcia;</label>
                <input type="text" name="godziny"><br>
                <input type="submit" value="Wyslij">
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 00000000000</p>
    </footer>
</body>
</html>