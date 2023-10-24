<?php
$servername="localhost";
$username="root";
$password="";
$dbname="telugufilmindustry";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error) {
    die("connection failed; ". $conn->connect_error);
}
$sql= "INSERT INTO `heroine` (`first name`, `lastname`, `heroinename`, `remuneration`) VALUES ('langa', 'lohith', 'vinay', '100345')";
if($conn->query($sql)==TRUE) {
    echo "New Record inserted!!!";
}
else {
    echo "error!!". $sql."<br>". $conn->error;
}
$conn->close();
?>
