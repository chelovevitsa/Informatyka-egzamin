<!DOCTYPE html>
<head lang="pl">
    <meta charset="utf-8">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl.css?v=3">
</head>
<body>
    <header>
        <div class="tytul">
            <h1>Czas na grzyby!</h1>
        </div>
        <div class="miniatura">
            <a href="podgrzybek.jpg"><img src="podgrzybek-miniatura.jpg" alt="Grzybobranie"></a>
        </div>
    </header>
    <main>
        <div class="lewy">
            <h3>Grzyby jadalne</h3>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "grzybobranie");
            $kw1 = 'SELECT id, nazwa, potoczna FROM grzyby WHERE jadalny = TRUE';
            $result = $conn -> query($kw1);
            foreach($result as $row) {
                echo "<p>".$row["id"].$row["nazwa"]."(".$row["potoczna"].")"."</p>";
            }
            ?>
            <h3>Polecamy do zup</h3>
            <ul>
                <?php
                $kw2='SELECT potoczna, rodzina.nazwa as rnazwa, potrawy.nazwa FROM grzyby 
                JOIN rodzina ON rodzina_id = rodzina.id 
                JOIN potrawy ON potrawy_id = potrawy.id 
                WHERE potrawy.nazwa = "zupa"';
                $result2 = $conn -> query($kw2);
                foreach($result2 as $li) {
                    echo "<li>".$li["potoczna"].","."rodzina: ".$li["rnazwa"]."</li>";
                }
                ?>
            </ul>
        </div>
        <div class="prawy">
            <?php
            $kw3 = 'SELECT nazwa, nazwa_pliku FROM grzyby';
            $result3 = $conn -> query($kw3);
            foreach($result3 as $img) {
                echo "<img class='photo' src=".$img["nazwa_pliku"]." title=".$img["nazwa"]." alt=".$img["nazwa"].">";
            }
            $conn -> close();
            ?>
        </div>
    </main>
    <footer>
        <p>Autor: 00000000000</p>
    </footer>
</body>
</html>