<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$bb = new myfunction();
if ($_GET['dynamicId']) {
    $dynamic = $bb->dynamic_show($_POST['dynamicId']);
    echo json_encode($dynamic);
}

?>
