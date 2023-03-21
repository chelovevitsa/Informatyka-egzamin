<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Nasz sklep komputerowy</title>
        <link rel="stylesheet" href="styl8.css">
    </head>
    <body>
        <div class="header">
            <div class="menu">
                <ul>
                    <li><a href="index.php">Glowna</a></li>
                    <li><a href="procesory.html">Procesory</a></li>
                    <li><a href="ram.html">RAM</a></li>
                    <li><a href="grafika.html">Grafika</a></li>
                </ul>
            </div>
            <div class="logo">
                <h2>Podzespoły komputerowe</h2>
            </div>
        </div>
        <div class="main">
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
                $zp1 = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena<1000";
                $result = $conn->query($zp1);
                foreach($result as $var){

                    echo("<tr>".
                        "<td>".$var["id"]."</td>".
                        "<td>".$var["nazwa"]."</td>".
                        "<td>".$var["opis"]."</td>".
                        "<td class='price'>".$var["cena"]."</td>"."</tr>");
                }
                $conn -> close();
                ?>
            </table>
        </div>
        <div class="stopka">
            <div class="column">
                <img src="scalak.jpg" alt="promocje na procesory">
            </div>
            <div class="column">
                <h4>Nasz Sklep Komputerowy</h4>
                <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/">edata</a></p>
            </div>
            <div class="column">
                <p>zadzwon: 601 602 603</p>
            </div>
            <div class="column">
                <p>Stronę wykonał: 000000000000</p>
            </div>
        </div>
    </body>
</html>