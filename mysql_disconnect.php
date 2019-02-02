<?php
$link=mysqli_connect("localhost","root","123456");
if($link===false){
    die("ERROR: Could no connect. " . mysqli_connect_error());
}
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

mysqli_close($link);

?>
