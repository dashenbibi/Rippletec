<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$uploaddir = "../image/logo/";
include 'Upload.class.php';
$bb = new myfunction();
if (isset($_SESSION['userId'])) {
    $logo = $files[0];
    echo json_encode($logo);
    if (isset($_POST['partnerName']) and isset($_POST['logo']) and isset($_POST['link'])) {
        $rst = $bb->partner_add($_POST['partnerName'], $_POST['logo'], $_POST['link']);
        if ($rst) {
            $result = "success";
            echo json_encode($result);
        } else {
            $result = "fail";
            echo json_encode($result);
        }
    }
} else {
    $result = "error";
    echo json_encode($result);
}
?>