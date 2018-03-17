<?php

class show extends indexmain
{
    function init(){
        $this->data();
        $user1=$this->session->get("zhanghu");
        $uid2=$this->db->selectone("id","user='{$user1}'")['id'];
        $this->db->db->close();

        //查询文章信息
        $sid=r('sid');
        $db=new db("shows");
        $sql="select user.uname,user.imgurl as uimgurl,user.resume,shows.* from user,shows where shows.uid=user.id and sid={$sid}";
        $resul=$db->db->query($sql);
        $res=$resul->fetch_assoc();

        //查询文章作者粉丝数
        $uid1=$res['uid'];
        $sql1="select count(*) as num from guanzhu where uid1={$uid1}";
        $resul=$db->db->query($sql1);
        $count=$resul->fetch_assoc();

        //查看文章被收藏数
        $sql2="select count(*) as num from love where sid={$sid}";
        $r=$db->db->query($sql2);
        $lovenum=$r->fetch_assoc()['num'];
        $sql3="select * from love where sid={$sid}";
        $rs=$db->db->query($sql3);
        $lovearr=$rs->fetch_all(MYSQLI_ASSOC);


        //查询登录用户是否关注此文章作者
        if($uid2){
            $sq="select * from guanzhu where uid2={$uid2} and uid1={$uid1}";
            $gu=$db->db->query($sq);
            $row=$gu->fetch_assoc();
            if(empty($row)){
                $guan="false";
            }else{
                $guan="true";
            }
            $love="false";
            foreach ($lovearr as $v){
                if($v['uid']==$uid2){
                    $love="true";
                };
            }
            $this->smarty->assign("love",$love);
            $this->smarty->assign("guan",$guan);
        }

        //查询评论 及回复
        function tree($db,$mid,$smarty){
            global  $replymess ;
            $sql2="select * from message where pid={$mid}";
            $resu=$db->query($sql2);
            while($rowu=$resu->fetch_assoc()){

                $sql3="select id,uname from user where id in ({$rowu['uid1']},{$rowu['uid2']})";
                $rs=$db->query($sql3);
                $remess=$rs->fetch_all(MYSQLI_ASSOC);
                if($rowu['uid2']==$rowu['uid1']){
                    array_push($remess,$remess[0]);
                }
                $rowu['uname1']=$remess[0]['uname'];
                $rowu['uname2']=$remess[1]['uname'];
                $replymess[]=$rowu;
                tree($db,$rowu['mid'],$smarty);
//                var_dump($replymess);
                $smarty->assign("replymess",$replymess);
            }
        }


        $sql3="select rate.*,user.uname,user.imgurl from rate,user where sid={$sid} and user.id=rate.uid order by rate.rtime desc";
        $resul=$db->db->query($sql3);
        $rate=$resul->fetch_all(MYSQLI_ASSOC);
        if(empty($rate)){
            $rate=false;
        }else{
            foreach ($rate as $v){
                $sql="select * from message where message.rid={$v['rid']}";
                $r=$db->db->query($sql);
                while($row=$r->fetch_assoc()){

                    $sql1="select id,uname from user where id in ({$row['uid1']},{$row['uid2']})";
                    $re=$db->db->query($sql1);
                    $mess=$re->fetch_all(MYSQLI_ASSOC);
                    if($row['uid2']==$row['uid1']){
                        array_push($mess,$mess[0]);
                    }
                    $row['uname1']=$mess[0]['uname'];
                    $row['uname2']=$mess[1]['uname'];
                    $reply[]=$row;

                    tree($db->db,$row['mid'],$this->smarty);

                    if(empty($replymess)){
                        $replymess=false;
                    }



                }

            }
            if(empty($reply)){
                $reply=false;
            }

            $this->smarty->assign("reply",$reply);

        }
        //查询评论数
        $sql2="select count(*) as num from rate where sid={$sid}";
        $r=$db->db->query($sql2);
        $ratenum=$r->fetch_assoc()['num'];


        $db->db->close();
        $this->smarty->assign("ratenum",$ratenum);
        $this->smarty->assign("lovenum",$lovenum);
        $this->smarty->assign("count",$count);
        $this->smarty->assign("res",$res);
        $this->smarty->assign("rate",$rate);
        $this->smarty->display("index/show.html");
    }

    //关注作者
    function guan(){
        $uid1=r('uid1');
        $uid2=r('uid2');
        $sql="insert into guanzhu (uid1,uid2) values ({$uid1},{$uid2})";
        $this->db->db->query($sql);
        $res=$this->db->db->affected_rows;
        $this->db->db->close();
        echo $res;
    }

    //取消关注作者
    function off(){
        $uid1=r('uid1');
        $uid2=r('uid2');
        $sql="delete from guanzhu where uid1={$uid1} and uid2={$uid2}";
        $this->db->db->query($sql);
        $res=$this->db->db->affected_rows;
        $this->db->db->close();
        echo $res;
    }

    //取消收藏文章
    function offlove(){
        $uid=r('uid');
        $sid=r('sid');
        $sql="delete from love where uid={$uid} and sid={$sid}";
        $this->db->db->query($sql);
        $res=$this->db->db->affected_rows;
        $this->db->db->close();
        echo $res;
    }

    //收藏文章
    function love(){
        $uid=r('uid');
        $sid=r('sid');
        $sql="insert into love (uid,sid) values ({$uid},{$sid})";
        $this->db->db->query($sql);
        $res=$this->db->db->affected_rows;
        $this->db->db->close();
        echo $res;
    }

    //评论
    function rate(){
        $uid=r('uid');
        $sid=r('sid');
        $val=r('val');
        $sql="insert into rate (uid,sid,rtext) values ({$uid},{$sid},'{$val}')";
        $this->db->db->query($sql);
        $rid=$this->db->db->insert_id;
        $row=$this->db->db->affected_rows;
        if($row>0){
            $sql="select * from user where id={$uid}";
            $r=$this->db->db->query($sql);
            $res=$r->fetch_assoc();
            $res['rid']=$rid;
            $res['uid']=$uid;
        }else{
            $res=false;
        }
        $this->db->db->close();
        echo json_encode($res);
    }

    //删除评论
    function delrate(){
        $rid=r('rid');
        $sql="delete from rate where rid={$rid}";
        $this->db->db->query($sql);
        $res=$this->db->db->affected_rows;
        $this->db->db->close();
        echo $res;
    }

    //回复留言

    function reply(){
        $uid1=r('uid1');
        $uid2=r('uid2');
        $rid=r('rid');
        $val=r('val');
        $sql="insert into message (uid1,uid2,rid,mtext) values ({$uid1},{$uid2},{$rid},'{$val}')";
        $this->db->db->query($sql);
        $mid=$this->db->db->insert_id;
        $row=$this->db->db->affected_rows;
        if($row>0){
            $sql="select id,uname from user where id in ({$uid1},{$uid2})";
            $r=$this->db->db->query($sql);
            $res=$r->fetch_all(MYSQLI_ASSOC);
            $res[0]['mid']=$mid;
            if($uid1==$uid2){
                array_push($res,$res[0]);
            }
        }else{
            $res=false;
        }

        $this->db->db->close();
        echo json_encode($res);
    }


    //删除留言
    function delmess(){
        $mid=r('mid');
        $sql="delete from message where mid={$mid}";
        $this->db->db->query($sql);
        $res=$this->db->db->affected_rows;
        $this->db->db->close();
        echo $res;
    }

    //回复留言
    function replymess(){
        $uid1=r('uid1');
        $uid2=r('uid2');
        $mid=r('mid');
        $val=r('val');
        $sql="insert into message (uid1,uid2,pid,mtext) values ({$uid1},{$uid2},{$mid},'{$val}')";
        $this->db->db->query($sql);
        $mid=$this->db->db->insert_id;
        $row=$this->db->db->affected_rows;
        if($row>0){
            $sql="select id,uname from user where id in ({$uid1},{$uid2})";
            $r=$this->db->db->query($sql);
            $res=$r->fetch_all(MYSQLI_ASSOC);
            $res[0]['mid']=$mid;
            if($uid1==$uid2){
                array_push($res,$res[0]);
            }
        }else{
            $res=false;
        }

        $this->db->db->close();
        echo json_encode($res);
    }

}