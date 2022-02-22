<?php
include_once '../config.php';
/*
 * PHP: Recursively Backup Files & Folders to ZIP-File
 * MIT-License - 2012-2018 Marvin Menzerath
*/

// Make sure the script can handle large folders/files
ini_set('max_execution_time', 600);
ini_set('memory_limit', '1024M');

// Start the backup!
LazyBackup(LAZY_FM_PATH, BACKUP_DIR);

// Here the magic happens :)
function LazyBackup($source, $destination)
{
    if (extension_loaded('zip')) {
        if (file_exists($source)) {
            $zip = new ZipArchive();
            if ($zip->open($destination, ZIPARCHIVE::CREATE)) {
                $source = realpath($source);
                if (is_dir($source)) {
                    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS), RecursiveIteratorIterator::SELF_FIRST);
                    foreach ($files as $file) {
                        $file = realpath($file);
                        if (is_dir($file)) {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        } else if (is_file($file)) {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                } else if (is_file($source)) {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }
            return $zip->close();
        }
    }
    return false;
}
