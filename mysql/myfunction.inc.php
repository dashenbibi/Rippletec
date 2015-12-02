<?php

class myfunction
{
    // ///////////////字符转换：向数据库中插入或更新时用//////////////////////////
    function str_to($str)
    {
        $str = str_replace(" ", "&nbsp;", $str); // 把空格替换html的字符串空格
        $str = str_replace("<", "&lt;", $str); // 把html的输出标志正常输出
        $str = str_replace(">", "&gt;", $str); // 把html的输出标志正常输出
        $str = nl2br($str); // 把回车替换成html中的br
        return $str;
    }
    // ///////////////////用户登录/////////////////////////
    function user_login($userName, $userPassword)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "select * from tb_user where userName='" . $userName . "' and userPassword='" . $userPassword . "'";
        $rst = $aa->excu($query);
        return mysql_fetch_array($rst);
    }
    // ///////////////////用户修改密码///////////////////////
    function user_update($userPassword)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "update tb_user set userPassword = '" . $_POST['userPassword'] . "' where userId = '" . $_SESSION['userId'] . "'";
        $rst = $aa->excu($rst);
        return $rst;
    }
    // //////////////////////////////////////////////////////////////////////////
    // ///////////////////增加Banner///////////////////////
    function banner_add($remark, $contentPic, $backgroundPic, $link)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "insert into tb_banner(remark,contentPic,backgroundPic,link)values('$remark','$contentPic','$backgroundPic','$link')";
        $rst = $aa->excu($query);
        return $rst;
    }
    // //////////////////修改Banner///////////////////////
    function banner_update($remark, $contentPic, $backgroundPic, $link, $bannerId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "update tb_banner set remark='$remark',contentPic='$contentPic',backgroundPic='$backgroundPic',link='$link' where bannerId='$bannerId')";
        $rst = $aa->excu($query);
        return $rst;
    }
    // //////////////////删除Banner///////////////////////
    function banner_delete($bannerId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "delete from tb_banner where bannerId = '$bannerId'";
        $rst = $aa->excu($query);
        return $rst;
    }
    // //////////////////显示全部Banner////////////////////
    function banners_show()
    {
        $aa = new mysql();
        $aa->link("");
        $query = "select * from tb_banner";
        $rst = $aa->excu($query);
        $banners = array();
        $i = 0;
        while ($row = mysql_fetch_array($rst, MYSQL_ASSOC)) {
            $banners[$i] = $row;
            $i ++;
        }
        return $banners;
    }
    // ///////////////////显示Banner详情////////////////////
    function banner_show($bannerId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "select * from tb_banner where bannerId = '$bannerId'";
        $rst = $aa->excu($query);
        return mysql_fetch_array($rst);
    }
    // ///////////////////////////////////////////////////////////////////////////////
    // ////////////////////增加Partner////////////////////
    function partner_add($partnerName, $logo, $link)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "insert into tb_partner(partnerName,logo,link)values('$partnerName','$logo','$link')";
        $rst = $aa->excu($query);
        return $rst;
    }
    // ////////////////////修改Partner////////////////////
    function partner_update($partnerName, $logo, $link, $partnerId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "update tb_partner set partnerName='$partnerName',logo='$logo',link='$link' where partnerId='$partnerId'";
        $rst = $aa->excu($query);
        return $rst;
    }
    // ////////////////////删除Partner////////////////////
    function partner_delete($partnerId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "delete from tb_partner where partnerId='$partnerId'";
        $rst = $aa->excu($query);
        return $rst;
    }
    // ////////////////////显示全部Partner////////////////////
    function partners_show()
    {
        $aa = new mysql();
        $aa->link("");
        $query = "select * from tb_partner";
        $rst = $aa->excu($query);
        $partners = array();
        $i = 0;
        while ($row = mysql_fetch_array($rst, MYSQL_ASSOC)) {
            $partners[i] = $row;
            $i ++;
        }
        return $partners;
    }
    // ////////////////////显示Partner详情////////////////////
    function partner_show($partnerId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "select * from tb_partner where partnerId='$partnerId'";
        $rst = $aa->excu($query);
        return mysql_fetch_array($rst);
    }
    // ///////////////////////////////////////////////////////////////////////////
    // ////////////////////增加Dynamic///////////////////////
    function dynamic_add($title, $coverImg, $date, $content, $description, $type)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "insert into tb_dynamic(title,coverImg,date,content,description,type)values('$title','$coverImg',$date','$content','$description','$type')";
        $rst = $aa->excu($query);
        return $rst;
    }
    // ////////////////////修改Dynamic///////////////////////
    function dynamic_update($title, $coverImg, $date, $content, $description, $type, $dynamicId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "update tb_dynamic set title='$title',coverImg='$coverImg',date='$date',content='$content',description='$description',type='$type' where dynamicId='$dynamicId";
        $rst = $aa->excu($query);
        return $rst;
    }
    // /////////////////////删除Dynamic///////////////////////
    function dynamic_delete($dynamicId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "delete from tb_dynamic where dynamicId='$dynamicId'";
        $rst = $aa->excu($query);
        return $rst;
    }
    // ////////////////////获取Dynamic总数//////////////////////
    function dynamic_count($query) {
        $aa = new mysql();
        $aa->link("");
        $rst = $aa->excu($query);
        $count = mysql_num_rows($sql);
        return $count;
    }
    // /////////////////////查找Dynamic///////////////////////
    function dynamic_find($keyWord, $offect, $pageSize)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "select * from tb_dynamic where title like '%" . $keyWord . "%' order by date desc limit '$offect','$pageSize'";
        $rst = $aa->excu($query);
        $dynamics = array();
        $i = 0;
        while ($row = mysql_fetch_array($rst, MYSQL_ASSOC)) {
            $dynamics[i] = $row;
            $i ++;
        }
        return $dynamics;
    }
    // //////////////////////////分页显示Dynamic///////////////////////
    function dynamics_show($offect, $pageSize,$type)
    {
        $aa = new mysql();
        $aa->link("");
        if($type)
        {
            $query = "select * from tb_dynamic where type='$type' order by date desc limit '$offect','$pageSize'";
        }
        else 
        {
            $query = "select * from tb_dynamic order by date desc limit '$offect','$pageSize'";
        }
        $rst = $aa->excu($query);
        $dynamics = array();
        $i = 0;
        while ($row = mysql_fetch_array($rst, MYSQL_ASSOC)) {
            $dynamics[i] = $row;
            $i ++;
        }
        return $dynamics;
    }
    // /////////////////////////////显示Dynamic详情/////////////////////
    function dynamic_show($dynamicId)
    {
        $aa = new mysql();
        $aa->link("");
        $query = "select * from tb_dynamic where dynamicId-'$dynamicId'";
        $rst = $aa->excu($query);
        return mysql_fetch_array($rst);
    }
} // end myfunction
?>
