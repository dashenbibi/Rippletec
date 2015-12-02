<?php
include "../mysql/mysql.inc.php";
include "../mysql/myfunction.inc.php";
$bb = new myfunction();
if (isset($_SESSION['userId'])) {
    if (isset($_GET['partnerId'])) {
        $rst = $bb->partner_delete($_POST['partnerId']);
        if ($rst) {
            $result = "success";
            echo json_encode($result);
        } else {
            $result = "fail";
        }
    }
} else {
    $result = "error";
    echo json_encode($result);
}
?>
