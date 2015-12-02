<?php
include "../mysql/myfunction.inc.php";
include "../mysql/mysql.inc.php";
$bb = new myfunction();
if (isset($_POST['userName']) and isset($_POST['userPassword'])) {
    $user = $bb->user_login($_POST['userName'], $_POST['userPassword']);
    if ($user) {
        $_SESSION['sessionId'] = session_id();
        $_SESSION['userId'] = $user['userId'];
        $result = "success";
        echo json_encode($result);
    } else {
        $result = "fail";
        echo json_encode($result);
    }
} else {
    $result = "error";
    echo json_encode($result);
}
?>