<?php
include "../mysql/mysql.inc.php";
include "../mysql/myfunction.inc.php";
include '../image/banner';
include 'Upload.class.php';
$bb = new myfunction();
if (isset($_SESSION['userId'])) {
    if (isset($_POST['remark']) and isset($_POST['contentPic']) and isset( $_POST['backgroundPic']) and isset($_POST['link']) and isset($_POST['bannerId'])) {
        $rst = $bb->banner_update($_POST['remark'], $_POST['contentPic'], $_POST['backgroundPic'], $_POST['link'], $_POST['bannerId']);
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