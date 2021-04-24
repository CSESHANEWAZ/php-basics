<?php

    $toread = fopen('file/file1.txt', 'r');     //open file to read

    //$towrite = fopen('file/file1.txt', 'w');    //open file to write


    while(!feof($toread)){
        echo fgets($toread, 1024);      //stop at newline or EOF
        echo "<br>";
    }


    fclose($toread);    //close file1

    //fclose($towrite);   //close file1

?>