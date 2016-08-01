<?php

if ($_GET['book']==1) {
    $file=fopen('dom.txt','a+');
    flock($file,LOCK_EX);
    $count=fread($file,100);
    $count++;

    ftruncate($file,0);
    fwrite($file,$count);
    flock($file,LOCK_UN);
    fclose($file);
    echo $count;
};

?>