<?php
$dir="testdir";

if(!file_exists($dir)){
    if(mkdir($dir)){
        echo "Directory created successful.";
    }else{
        echo "Error: Directory could not be created.";
    }
}else{
    echo "ERROR: Directory already exists.";
}
