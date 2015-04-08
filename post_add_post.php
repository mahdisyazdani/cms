<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

extract($_POST);

$sql = "INSERT INTO posts (title , body)VALUES ('$title', '$body')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.
    <a href=\"/admin.php\">
        <button value='Back' id='back_button' class='button'>Back</button>
    </a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();