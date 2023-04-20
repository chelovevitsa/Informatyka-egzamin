<?php
$conn = mysqli_connect("localhost", "root", "", "baza");
if ($conn-> connect_error) {
    die("Connection failed: " . $conn-> connect_error);
}
$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];
$zap1 = "Insert into zawody_wedkarskie values(0,NULL,'$lowisko','$data','$sedzia')";
if($conn-> query($zap1) === TRUE) {
    echo ('Dodano');
} else {
    echo ('Nie Dodano');
}
?>