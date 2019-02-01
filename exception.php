<?php
function division($dividend,$divisor){
    //Throw exception if divisor is zero
    if($divisor==0){
        throw new Exception("Division by zero.");
    }else{
        $quotient=$dividend/$divisor;
        echo "<p>$dividend/$divisor=$quotient</p>";
    }
}
try{
    division(10,2);
    division(30,-4);
    division(15,0);

    //If exception is thrown following line won't execute
    echo '<p>All divisions performed successful.</p>'; 
}catch(Exception $e){
    //Handle the exception
    echo "<p>Caught exception: " . $e->getMessage() . "</p>";
}

    //Continue execution
    echo "<p>Hello World!</p>";
?>
