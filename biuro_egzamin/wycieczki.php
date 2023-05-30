<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <div class="baner">
            <h1>BIURO TURYSTYCZNE</h1>
        </div>
        <div class="dane">
            <h3>Wycieczki, na ktore sa wolne miejsca</h3>
            <ul>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'biuro');
                $sk1 = 'SELECT id, dataWyjazdu, cel, cena FROM wycieczki
                WHERE dostepna = 1';
                $result1 = $conn -> query($sk1);
                foreach($result1 as $var1){
                    echo '<li>'.$var1['id'].'. dnia '.$var1['dataWyjazdu'].' jedziemy do '.$var1['cel'].', cena: '.$var1['cena'].'</li>';
                }
                ?>
            </ul>
        </div>
    </header>
    <main>
        <div class="lewy">
            <h2>Bestselery</h2>
            <table>
                <tr><td>Wenecja</td><td>kwiecien</td></tr>
                <tr><td>Londyn</td><td>lipiec</td></tr>
                <tr><td>Rzym</td><td>wrzesien</td></tr>
            </table>
        </div>
        <div class="srodkowy">
            <h2>Nasze zdjecia</h2>
            <?php
            $sk2 = 'SELECT nazwaPliku, zdjecia.podpis FROM wycieczki
            JOIN zdjecia ON zdjecia.id = wycieczki.zdjecia_id
            ORDER BY zdjecia.podpis DESC';
            $result2 = $conn -> query($sk2);
            foreach($result2 as $var2){
                echo '<img src="'.$var2['nazwaPliku'].'"alt="'.$var2['podpis'].'"/>';
            }
            $conn -> close();
            ?>
        </div>
        <div class="prawy">
            <h2>Skontaktuj sie</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </div>
    </main>
    <footer>
        <p>Strone wykonal: 01234567890</p>
    </footer>
</body>
</html>