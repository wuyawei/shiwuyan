<?php

function g($key){
    return isset($_GET[$key])?$_GET[$key]:null;
}

function p($key){
    return isset($_POST[$key])?$_POST[$key]:null;
}

function r($key){
    return isset($_REQUEST[$key])?$_REQUEST[$key]:null;
}
class blog{
    function blog(){
        $this->str="";
        $this->let="";
        $this->text="";
        $this->arr=array();
    }

    function tree($pid,$flag,$db,$table,$curr=null,$sid=null,$catid=null){
        $currpid=null;
        if($curr){
            $sql="select * from {$table} where cat_id=".$curr;
            $result=$db->query($sql);
            $row=$result->fetch_assoc();
            $currpid=$row["parent_id"];
        }
        $flag=$flag+1;
        $let=str_repeat("-",$flag);
        $sql="select * from {$table} where parent_id={$pid}";
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $arr1=$row;
            $arr1['cat_name']="{$let}{$row['cat_name']}";
            array_push($this->arr,$arr1);
            $cid=$row['cat_id'];
            if($cid==$currpid){
                $this->str.="<option selected='selected' value='{$cid}'>{$let}{$row['cat_name']}</option>";
            }else if($cid==$sid){
                $this->str.="<option value='$cid' selected='selected'>{$let}{$row['cat_name']}</option>";
            }else if($cid==$catid){
                $this->str.="<option value='$cid' selected='selected'>{$let}{$row['cat_name']}</option>";
            }else{
                $this->str.="<option value='{$cid}'>{$let}{$row['cat_name']}</option>";
            }

            $this->tree($cid,$flag,$db,$table,$curr,$sid,$catid);
        }
    }

    function table($pid,$flag,$db,$table){
        $flag=$flag+1;
        $let=str_repeat("-",$flag);
        $sql="select * from {$table} where parent_id={$pid}";
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $cid=$row['cat_id'];
            $sql="select posname from posit where id=".$row['posid'];
            $result1=$db->query($sql);
            $row1=$result1->fetch_assoc();
            if($row1['posname']==""){
                $row1['posname']="无";
            }
//            $notice=mb_substr($row['notice'],0,10)."...";
            $this->let.="
            <tr>
                <td>{$row['cat_id']}</td>
                <td>{$let}{$row['cat_name']}</td>
                <td width=\"10 % \"><img src=\"{$row['imgurl']}\" alt=\"\" width=\"70\" height=\"50\" /></td>
                <td>{$row1['posname']}</td>
                <td>{$row['parent_id']}</td>
                <td>
                    <div class='button-group'>
                        <a type='button' class='button border-main' href='index.php?m=admin&f=category&a=editcate&id={$row['cat_id']}'><span class='icon-edit'></span>修改</a>
                        <a class='button border-red' href='index.php?m=admin&f=category&a=delcate&id={$row['cat_id']}'><span class='icon-trash-o'></span> 删除</a>
                    </div>
                </td>
            </tr>           
            ";
            $this->table($cid,$flag,$db,$table);
        }
    }
    //            $time=substr($row["stime"],0,10)
    function show($db,$table,$cid,$limit=null){
        $this->text="";
        $sql1="select cat_name from category where cat_id=".$cid;
        $result1=$db->query($sql1);
        $row1=$result1->fetch_assoc();
        $catname=$row1['cat_name'];
        $sql="select * from {$table} where cid={$cid} ".$limit;
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $sql="select posname from posit where id=".$row['posid'];
            $result1=$db->query($sql);
            $row1=$result1->fetch_assoc();
            if($row1['posname']==""){
                $row1['posname']="无";
            }
            $this->text.="
                <tr class='delete'>
                    <td style=\"text-align:left; padding-left:20px;\"><input type=\"checkbox\" name=\"id[]\" value=\"{$row['sid']}\" class='checkid'/>
                        {$row['sid']}</td>
                    <td width=\"10%\"><img src=\"{$row['imgurl']}\" alt=\"\" width=\"70\" height=\"50\" /></td>
                    <td>{$row['stitle']}</td>
                    <td>{$row1['posname']}</td>
                    <td><font color=\"#00CC99\">{$row['authour']}</font></td>
                    <td>{$catname}</td>
                    <td>{$row["stime"]}</td>
                    <td>
                        <div class=\"button-group\">
                            <a class=\"button border-main\" href=\"index.php?m=admin&f=show&a=editcont&id={$row['sid']}\"><span class=\"icon-edit\"></span> 修改</a>
                            <a class=\"button border-red\" href=\"index.php?m=admin&f=show&a=delcont&id={$row['sid']}\" onclick=\"return del(1,1,1)\"><span class=\"icon-trash-o\"></span> 删除</a>
                        </div>
                    </td>
                </tr>
            ";
        }
    }

}

