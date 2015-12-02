<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$bb = new myfunction();
if (isset($_GET['partnerId'])) {
    $partner = $bb->partner_show($_GET['partnerId']);
    if ($partner) {
        echo json_encode($partner);
    }
}
?>
