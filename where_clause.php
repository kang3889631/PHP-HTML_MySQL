<?php
$link=mysqli_connect("localhost","root","123456","demo");
if($link===false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql="SELECT * FROM persons WHERE first_name='shiyin'";

if($result=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>first_name</th>";
        echo "<th>last_name</th>";
        echo "<th>email</th>";
        echo "</tr>";
    
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
}else{
    echo "No records matching your query were found.";
}
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
