<?php
include "../mysql/mysql.inc.php";
include "../mysql/myfunction.inc.php";
$bb = new myfunction();
if (isset($_POST['userId'])) {
    if ($_POST['newPassword']) {
        $rst = $bb->user_update($_POST['newPassword']);
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