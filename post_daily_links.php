<?php
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "cms" ;

$conn = mysqli_connect($servername , $username , $password , $dbname) ;
if(!$conn){
    die("Connection failed : ".mysql_errno()) ;
}
extract($_POST) ;

$sql = "INSERT INTO daily_links (link_name , link_address , description) VALUES ('$link_name','$link_address','$description')" ;
if($conn->query($sql) == TRUE){
    echo "New record created successfully. <a href=\"/daily_links.php\">
        <button value='Back' id='back_button' class='button'>Back</button>
    </a>";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error ;
}

$conn->close() ;