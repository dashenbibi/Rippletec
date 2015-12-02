<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$bb = new myfunction();
if (isset($_SESSION['userId'])) {
    $banners = $bb->banners_show();
    if ($banners) {
        $array = array(
            'banners' => $banners
        );
        echo json_encode($array);
    }
}
?>
