<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Established!";
}
else {
    echo "ERROR! Connection Failed!";
}

mysqli_select_db($connection, 'credential');

$firstname = $_POST['First_name'];
$lastname = $_POST['Last_name'];
$email = $_POST['email'];
$feed = $_POST['feed'];

$data = "INSERT INTO feedback (FNAME, LNAME, EMAIL, FEED) VALUES ('$firstname', '$lastname', '$email', '$feed')";

mysqli_query ($connection, $data);
header('location:tf.php');
?>
