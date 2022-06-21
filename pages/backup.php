<?php
include 'header.php';
$files = [];
if ($handle = opendir('../backup')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $files[] = $entry;
        }
    }
    closedir($handle);
}
?>

<div class="container-fluid">
    <table class="table table-striped" id="dataTable">
        <thead class="bg-primary text-light">
            <th>SL NO </th>
            <th>Backup Time</th>
            <th>Download</th>
            <th>Delete</th>
        </thead>
        <tbody id="tbody">
            <?php
            $i = 1;
            if (count($files) > 0) {
                foreach ($files as $file) {
                    echo '<tr>';
                    echo '<td>' . $i++ . '</td>';
                    echo '<td>' . date("F d Y H:i:s.", filemtime('../backup/' . $file)) . '</td>';
                    echo '<td><a href="../backup/' . $file . '" class="btn btn-success">Download</a></td>';
                    echo '<td><button type="button" value="' . $file . '" class="btn btn-danger del_file">Delete</button></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr>';
                echo '<td colspan=4>No Backup Found </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>

<script>
    $('.del_file').click(function() {
        var file = $('.del_file').val();
        $.ajax({
            type: "method",
            url: "Ajax.php?action=delete_backup&file=" + file,
            complete: function(response) {
                $('#tbody').html(response);
            }
        });
    })
</script>