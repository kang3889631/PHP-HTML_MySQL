<?php
//Setting a cookie
//create a cookie named "username", assign the value "SW",and spefigy the
//cookie will expire after 30 days
setcookie("username","Shiyin Weng", time()+30*24*60*60);
//Accessing an individual cookie value
echo $_COOKIE["username"];
//Verify whether a cookie is set or not
if(isset($_COOKIE["username"])){
    echo "Hi " . $_COOKIE["username"];
}else{
    echo "Welcome Guest!";
}
//Delete a cookie
setcookie("username","",time()-1);
?>
