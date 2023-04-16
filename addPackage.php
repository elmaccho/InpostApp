<?php

$conn = mysqli_connect("localhost","root","","inpostapp");

$trackingNumber = $_POST['trackingNumber'];
$packageName = $_POST['packageName'];


$sql = "INSERT INTO zamowienie VALUES (NULL, '$trackingNumber', 'Rejestracja przesyłki', 'Jakis sklep sp z.o.o', '$packageName')";
$query = mysqli_query($conn, $sql);

header("Location: index.php");

$conn -> close();

?>