<?php
//MySQL connection
$link=mysqli("localhost","root","123456");
//Check connection
if($link===false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Attempt create table query execution
$sql="CREATE TABLE persions(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link,$sql)){
    echo "Table created successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli.error($link);  
}
//Close connection 
mysqli_close($link);
?>
