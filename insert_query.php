<?php
$link=mysqli_connect("localhost","root","123456","demo");
//create table 
if($link===false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql="CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE    
)";
if(mysqli_query($link,$sql)){
    echo "Table created successfully.";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

//insert info
$sql="INSERT INTO persons (first_name, last_name, email) VALUES ('Peter','Parker','peterparker@mail.com')";
if(mysqli_query($link,$sql)){
    echo "Records inserted successful.";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
