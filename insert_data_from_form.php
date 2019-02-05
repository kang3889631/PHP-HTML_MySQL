<"?php
//Retrieving and inserting the form data
$link=mysqli_connect("localhost", "root", "123456","demo");
if($link===false){
    die("ERROR: Could not connect. " . mysqls_connect_error());
}
$first_name = mysqli_real_escape_string($link,$_REQUEST['first_name']);
$last_name= mysqli_real_escape_string($link,$_REQUEST['last_name']);
$email = mysqli_real_escape_string($link,$_REQUEST['email']);
$sql =  "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($link,$sql)){
    echo "Records added successful.";
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
