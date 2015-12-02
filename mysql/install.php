<?php
include "mysql.inc";
include "myfunction.inc";
$aa = new mysql();
$bb = new mysql();

$aa->link("mysql");
// 创建数据库
$query = "CREATE DATABASE rippletec_data";
if ($aa->excu($query)) {
    echo "===数据库创建成功！===";
}

$bb->link("rippletec_data");
// ////////创建数据表tb_user/////////////
$query = "CREATE TABLE tb_user(
  userId INT(11) NOT NULL AUTO_INCREMENT,
  userName VARCHAR(15) NOT NULL,
  userPassword VARCHAR(15) NOT NULL
)";
$bb->excu($query);
echo "<br>&nbsp;&nbsp;数据表-tb_user-创建成功！";
// ////////创建数据表tb_banner/////////////
$query = "CREATE TABLE tb_banner(
    bannerId INT(11) NOT NULL AUTO_INCREMENT,
    remark VARCHAR(120) NOT NULL,
    contentPic VARCHAR(80) NOT NULL,
    backgroundPic VARCHAR(80) NOT NULL,
)";
$bb->excu($query);
echo  "<br>&nbsp;&nbsp;数据表-tb_banner-创建成功！";
// ////////创建数据表tb_logo/////////////
$query="CREATE TABLE tb_partner(
    partnerId INT(11) NOT NULL AUTO_INCREMENT,
    partnerName VARCHAR(30) NOT NULL,
    logo VARCHAR(80) NOT NULL,
    link VARCHAR(50) NOT NULL
)";
$bb->excu($query);
echo  "<br>&nbsp;&nbsp;数据表-tb_partner-创建成功！";
// ////////创建数据表tb_dynamic/////////////
$query="CREATE TABLE tb_dynamic(
    dynamicId INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    coverImg VARCHAR(80) NOT NULL,
    date VARCHAR(30) NOT NULL,
    content　text NOT NULL,
    description VARCHAR(150) NOT NULL,
    type VARCHAR(20) NOT NULL
 )";
 $bb->excu($query);
 echo "<br>&nbsp;&nbsp;数据表-tb_dynamic-创建成功！";
?>


