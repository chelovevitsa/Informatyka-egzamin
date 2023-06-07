<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Glowna</a></li>
                <li><a href="procesory.html">Procesory</a></li>
                <li><a href="ram.html">RAM</a></li>
                <li><a href="grafika.html">Grafika</a></li>
            </ul>
        </nav>
        <div>
            <h2>Podzespoly komputerowe</h2>
        </div>
    </header>
    <main>
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOLU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'sklep');
            $zap1='SELECT id,nazwa, opis, cena FROM podzespoly WHERE cena < 1000';
            $result= $conn -> query($zap1);
            foreach($result as $var) {
                echo('<tr>');
                echo('<td>'.$var['id'].'</td>'.'<td>'.$var['nazwa'].'</td>'.'<td>'.$var['opis'].'</td>'.'<td>'.$var['cena'].'</td>');
                echo('</tr>');
            };
            $conn -> close();
            ?>
        </table>
    </main>
    <footer>
        <div><img src="scalak.jpg" alt="promocje na procesory"></div>
        <div>
            <h4>Nasz Sklep Komputerowy</h4>
            <p>Wspolpracujemy z hurtownia <a href="http://www.edata.pl">edata</a></p>
        </div>
        <div><p>zadzwon: 601 602 603</p></div>
        <div><p>Strone wykonal: 0000000000</p></div>
    </footer>
</body>
</html>