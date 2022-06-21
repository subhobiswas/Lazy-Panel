<?php
$action = $_GET['action'];
switch ($action) {
    case 'delete_backup':

        unlink('../backup/' . $_GET['file']);
        $files = [];
        if ($handle = opendir('../backup')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    $files[] = $entry;
                }
            }
            closedir($handle);
        }
        $i = 1;
        if (count($files) > 0) {
            foreach ($files as $file) {
                echo '<tr>';
                echo '<td>' . $i++ . '</td>';
                echo '<td>' . date("F d Y H:i:s.", filemtime('../backup/' . $file)) . '</td>';
                echo '<td><a href="../backup/' . $file . '" class="btn btn-success">Download</a></td>';
                echo '<td><button type="button" value="' . $file . '" class="btn btn-danger del_file">Delete</button></td>';                echo '</tr>';
            }
        } else {
            echo '<tr>';
            echo '<td colspan=4>No Backup Found </td>';
            echo '</tr>';
        }

        break;
}
