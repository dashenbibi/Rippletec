<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$bb = new myfunction();
if (isset($_GET['bannerId'])) {
    $banner = $bb->banner_show($_POST['bannerId']);
    if ($banner) {
        echo json_encode($banner);
    }
}

?>