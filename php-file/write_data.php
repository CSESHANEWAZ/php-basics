<?php

    $writeData = fopen('file/file1.txt', 'a');

    $data = file_get_contents('file/file2.txt');

    fwrite($writeData, $data);


    fclose($writeData);


    $toread = fopen('file/file1.txt', 'r');     //open file to read

    while(!feof($toread)){
        echo fgets($toread, 1024);      //stop at newline or EOF
        echo "<br>";
    }


    fclose($toread);    //close file1
?>