<?php
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];


    $filepath = 'db_backup/' . $id;

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('db_backup/' . $id));
        readfile('db_backup/' . $id);

    }

}
?>