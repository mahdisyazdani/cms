<?php
    $servername = "localhost" ;
    $username= "root" ;
    $password = "" ;
    $dbname = "cms" ;

    $blog_title = "Blog Title" ;

    $conn = mysqli_connect($servername , $username , $password , $dbname) ;

    if(! $conn)
        die("Connection failed : ".mysqli_connect_error()) ;

    extract($_POST) ;

    $sql = "SELECT * FROM posts" ;
    $result = $conn->query($sql) ;
    $index = 0 ;
    if($result->num_rows > 0){
        while($row[$index] = $result->fetch_assoc()){
            $index = $index + 1 ;
        }
    }

    $sql = "SELECT * FROM blog_links" ;
    $result1 = $conn->query($sql) ;
    $index1 = 0 ;
    if($result1->num_rows > 0) {
        while($row1[$index1] = $result1->fetch_assoc()){
            $index1 = $index1 + 1 ;
        }
     }
$conn->close() ;