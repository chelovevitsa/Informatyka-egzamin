<?php
    function connect_db() {
        $db = new mysqli("localhost", "root", "", "wedkowanie");
        if ($db->connect_errno) {
            echo "Błąd połączenia z bazą danych: (" . $db->connect_errno . ") " . $db->connect_error;
        }
        return $db;
    }

    function get_fishes() {
        $db = connect_db();

        $result = $db->query("SELECT nazwa, akwen, wojewodztwo FROM Ryby JOIN Lowisko ON Ryby.id = Lowisko.ryby_id WHERE rodzaj = 3;");

        if (!$result) {
            echo "Błąd zapytania: (" . $db->errno . ") " . $db->error;
        }
        
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>{$row['nazwa']} pływa w rzece {$row['akwen']}, {$row['wojewodztwo']}</li>";
        }
    }

    function get_wystepowanie() {
        $db = connect_db();

        $result = $db->query("SELECT id, nazwa, wystepowanie FROM Ryby WHERE styl_zycia = 1");

        if (!$result) {
            echo "Błąd zapytania: (" . $db->errno . ") " . $db->error;
        }
        
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nazwa']}</td><td>{$row['wystepowanie']}</td></tr>";
        }
    }
?>