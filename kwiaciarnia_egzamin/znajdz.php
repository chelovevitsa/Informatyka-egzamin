<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa polskich Kwiaciarni</h1>
    </header>
    <main>
        <div class="lewy">
            <h2>Menu</h2>
            <ol>
                <li><a href="index.html">Strona glowna</a></li>
                <li><a href="https://www.kwiaty.pl/">Rozpoznaj kwiaty</a></li>
                <li><a href="znajdz.php">Znajdz kwiaciarnie</a></li>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            </ol>
        </div>
        <div class="prawy">
            <h2>Znajdz kwiaciarnie</h2>
            <form action="znajdz.php" method="post">
                <label>podaj nazwe miasta: </label>
                <input type="text" name="city">
                <button type="submit">SPRAWDZ</button>
            </form>
            <?php

            if(!empty($_POST)){

                $city=$_POST['city'];
                $conn = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
                $zap1 = 'SELECT nazwa, ulica FROM kwiaciarnia
                WHERE miasto="'.$city.'"';
                $result1 = $conn -> query($zap1);
                foreach ($result1 as $var1){
                    echo ("<h3>".$var1["nazwa"].",".$var1["ulica"]."</h3>");
                }}
            ?>
        </div>
    </main>
    <footer>
        <p>Strone opracowal: 39823095527</p>
    </footer> 
</body>
</html>