<?php
include 'var/www/lazy/config.php';
ini_set('max_execution_time', '300');
ini_set('set_time_limit', '0');
try {

    $target = BACKUP_DIR . date('d-m-Y') . '.tar'; //default to archive.tar
    $dir = LAZY_FM_PATH; //defaults to all in current dir

    //setup phar
    $phar = new PharData($target);
    $phar->buildFromDirectory($dir);
    echo 'Compressing all files done, check your server for the file ' . $target;
} catch (Exception $e) {
    // handle errors
    echo 'An error has occured, details:';
    echo $e->getMessage();
}
