<?php
$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];
if(!empty($_POST)){
    $conn = mysqli_connect('localhost', 'root', '', 'wedkarstwo');
    $zp1 = "INSERT INTO `zawody_wedkarskie`(`Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (0,'".$lowisko."','".$data."','".$sedzia."')";

    $result = $conn -> query($zp1);
    echo('Dodane');
};

$conn -> close();
?>