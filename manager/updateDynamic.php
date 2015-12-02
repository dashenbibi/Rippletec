<?php
include "../mysql/mysql.inc.php";
include "../mysql/myfunction.inc.php";
$uploaddir = "../image/dynamic/";
include 'Upload.class.php';
$bb = new myfunction();
if (isset($_SESSION['userId'])) {
    if (isset($_POST['title']) and isset($_POST['coverImg']) and isset($_POST['date']) and isset($_POST['content']) and isset($_POST['description']) and isset($_POST['dynamicId']) and isset($_POST['type'])) {
        $rst = $bb->dynamic_update($_POST['title'], $_POST['coverImg'], $_POST['date'], $_POST['content'], $_POST['description'], $_POST['type'], $_POST['dynamicId']);
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
