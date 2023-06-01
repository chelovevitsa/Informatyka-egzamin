<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css?v=3">
</head>
<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <main>
        <div class="lewy">
            <a href="index.html">GLOWNA</a>
            <img src="obraz1.jpg" alt="pokoje" />
        </div>
        <div class="srodkowy">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'wynajem');
                $sk1 = 'SELECT id, nazwa, cena FROM pokoje';
                $result = $conn -> query($sk1);
                foreach ($result as $var){
                    echo ('<tr>');
                    echo ('<td>'.$var['id'].'</td>');
                    echo ('<td>'.$var['nazwa'].'</td>');
                    echo ('<td>'.$var['cena'].'</td>'.'<br>');
                    echo('</tr>');
                }
                $conn -> close();
                ?>
            </table>
        </div>
        <div class="prawy">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="obraz3.jpg" />
        </div>
    </main>
    <footer>
        <p>Strone opracowal: 00000000000</p>
    </footer>
</body>
</html>