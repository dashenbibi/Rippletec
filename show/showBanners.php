<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$bb = new myfunction();
$banners = $bb->banners_show();
if ($banners) {
    $array = array(
        'banners' => $banners
    );
    echo json_encode($array);
}

?>
