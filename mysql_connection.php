<?php
$link=mysqli_connect("localhost","root","123456");
if($link===false){
    die("ERROR: Could not connect." . mysqli_connect());
}
echo "Connect Successful. Host info: " . mysqli_get_host_info($link);
?>
