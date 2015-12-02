<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$bb = new myfunction();
$partners = $bb->partners_show();
if ($partners) {
    $array = array(
        'partners' => $partners
    );
    echo json_encode($array);
}
?>