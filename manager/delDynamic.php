<?php
include "../mysql/mysql.inc.php";
include "../mysql/myfunction.inc.php";
$bb = new myfunction();
if (isset($_SESSION['userId'])) {
    if (isset($_GET['dynamicId'])) {
        $rst = $bb->dynamic_delete($_POST['dynamicId']);
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
