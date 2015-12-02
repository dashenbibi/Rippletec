<?php
include '../mysql/mysql.inc.php';
include '../mysql/myfunction.inc.php';
$bb = new myfunction();
if ($_GET['keyWord']) {
    if (isset($_GET['pageNumber'])) { // 判断页数是否为空
        $pageNumber = $_GET['pageNumber'];
    } else {
        $pageNumber = 1;
    }
    $pageSize = 10; // 设置每页显示的数目
    $query = "select * from tb_dynamic where title like '%" . $_GET['keyWord'] . "%'";
    $count = $bb->dynamic_count();
    $totalPage = ceil($count / $pageSize);
    $offect = ($pageNumber - 1) * $pageSize;
    $dynamics = $bb->dynamic_find($_GET['keyWord'], $offect, $pageSize);
    if ($dynamics) {
        $array = array(
            'dynamics' => $dynamics,
            'pageNumber' => $pageNumber,
            'count' => $count,
            'totalPage' => $totalPage
        );
        echo json_encode($array);
    }
}
?>
