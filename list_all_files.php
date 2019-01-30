<?php
// Define a function to output files in a directory
function outputFiles($path){
    if(file_exists($path)&&is_dir($path)){
        //Scan the files in this directory
        $result=scandir($path);
        //Filter out the current (.) and parent (..) directories
        $files=array_diff($result,array('.','..'));

        if(count($files)>0){
            //Loop through returned array
            foreach($files as $file){
                if(is_file("$path/$file")){
                //Display filename
                echo $file . "<br>";
            }else if(is_dir("$path/$file")){
                //Recursively call the function if directories found
                outputFiles("$path/$file");
            }
        }
        }else{
            echo "ERROR: NO files found in the directory.";
        }
}else{
    echo "ERROR: No files found in the directory.";
}
}
//Call the function
outputFiles("/var/www/html/upload");
?>
