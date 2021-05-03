<?php

    $handle = opendir('file');

    //$files = readdir($handle);       //read content of file directory

    while (false !== ($files = readdir($handle))) {
        echo "$files <br>";
    }

    closedir($handle);      //close file directory

?>