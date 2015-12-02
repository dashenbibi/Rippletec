<?php
if (! empty($_FILES['files']['name'])) {
    $files_name = $_FILES['files']['name'];
    for ($i = 0; $i < count($files_name); $i ++) {
        if ($files_name[$i] != "") {
            $extension_name = strtolower(stristr($files_name[$i], "."));
            if ($extension_name != ".gif" && $extension_name != ".jpg" && $extension_name != ".jpeg" && $extension_name != ".bmg" && $extension_name != ".png") { // 判断文件和图片的格式是否符合要求
                $result = "fail";
                echo json_encode($result);
            } else {
                $link = date("YmjHis");
                $paths = $link . mt_rand(1000000, 9999999) . $extension_name; // 创建图片的名称
                $files[$i] = $uploaddir . $paths; // 创建图片的存储路径
                move_uploaded_file($_FILES['files']["tmp_name"], $files[$i]); // 将图片存储到指定的文件夹下
            }
        }
    }
}
?>
