<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Artykuły papiernicze</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>
    <div class="main">
        <div class="lewy">
            <h2>Kontakt</h2>
            <p>telefon: 444333222<br> e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
            <img src="promocja2.png" alt="promocja">
        </div>
        <div class="srodkowy">
            <h2>Promocja 10% obejmuje artykuły:</h2>
            <ul>
                <?php
                    $localhost = "localhost";
                    $servername = "root";
                    $password = "";
                    $dbname = "sklep";
                    $conn = new mysqli($localhost, $servername, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $skrypt1 = "SELECT nazwa FROM towary WHERE promocja = 1";
                    $result = $conn->query($skrypt1);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<li>".$row["nazwa"]."</li>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </ul>
        </div>
        <div class="prawy">
            <h2>Cena wybranego artykułu w promocji</h2>
            <form action='index.php' method='Post' class='Form'>

            <select typqe='select' name='towar' > 
                <option value='Gumka do mazania'>Gumka do mazania</option>
                <option value='Cienkopis'>Cienkopis</option>
                <option value='Pisaki 60 szt.'>Pisaki 60 szt.</option>
                <option value='Markery 4 szt.'>Markery 4 szt.</option>
            </select>

            <input type='submit' name='submit'  value='Wybierz'> 

            </form>
            <?php

            if($_POST['submit'] == "Wybierz"){
                $val=$_POST['towar'];
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sklep";
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql ="SELECT t.cena  FROM towary t JOIN dostawcy d ON t.IdDostawcy =d.id_dostawcy Where t.nazwa='$val'";
                $result = $conn->query($sql);
                foreach($result as $row) {
                    echo round($row["cena"]*0.85, 2) ;
                };
                $conn->close();
            }
            ?>
        </div>
    </div>
    <div class="stopka">
        <h3>Autor strony 12345678922</h3>
    </div>
</body>
</html>