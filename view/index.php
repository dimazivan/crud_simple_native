<?php

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
switch ($queries['page']) {
    case 'tambah':
        include 'create_data.php';
        break;
    case 'proses':
        include '../controller/user_controller.php?aksi=tambah';
        break;
    case 'edit':
        include 'edit_data.php';
        break;
    case 'hapus':
        include 'create_data.php';
        break;
    default:
        #code...
        include 'show_data.php';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Project</title>
</head>

<body>

</body>

</html>