<?php
include "../mysql/mysql.inc.php";
include "../mysql/myfunction.inc.php";
$uploaddir = "../image/banner/";
include 'Upload.class.php';
$bb = new myfunction();
if (isset($_SESSION['userId'])) {
    $url=$files[0];
    echo json_encode($url);
    if (isset($_POST['remark']) and isset($_POST['$contentPic']) and isset($_POST['$backgroundPic']) and isset($_POST['link'])) {
        $rst = $bb->banner_add($_POST['remark'], $_POST['$contentPic'], $_POST['$backgroundPic'], $_POST['link']);
        if ($rst) {
            $result = "success";
            echo json_encode($result);
        } else {
            $result = "fail";
            echo json_encode($result);
        }
    }
}
else 
{
    $result="error";
    echo json_encode($result);
}
?>
