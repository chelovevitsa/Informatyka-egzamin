<?php
$conn = mysqli_connect('localhost', 'root', '', 'wedkarstwo');
$zp1 = 'INSERT INTO `zawody_wedkarskie`(`Karty_wedkarskie_id`,`Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (0."'$_POST['lowisko']'".","."'$_POST['data']'".","."'$_POST['sedzia']'")';
$result = $conn -> query($zp1);

$conn -> close();
?>