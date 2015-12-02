<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$bb = new myfunction();
if (isset($_SESSION['userId'])) {
    if (isset($_GET['pageNumber'])) { // 判断页数是否为空
        $pageNumber = $_GET['pageNumber'];
    } else {
        $pageNumber = 1;
    }
    if($_GET['type'])
    {
        $query = "select * from tb_dynamic where type = '".$_GET['type']."'";
    }
    else 
    {
        $query = "select * from tb_dynamic";
    }
    $pageSize = 10; // 设置每页显示的数目
    $count=$bb->dynamic_count($query);
    $totalPage = ceil($count / $pageSize);
    $offect = ($pageNumber - 1) * $pageSize;
    $dynamics=$bb->dynamics_show($offect, $pageSize,$_GET['type']);
    if($dynamics)
    {
        $array=array('dynamics'=>$dynamics,'totalPage'=>$totalPage);
        echo json_encode($array);
    }
}
?>
