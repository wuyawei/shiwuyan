<?php

class db
{
    private $host="localhost";
    private $name="root";
    private $pass="";
    private $port=3306;
    public $dbname="blog";
    public $tablename;
    public $db;

    function __construct($tablename="")
    {
        $this->tablename=$tablename;
        $this->db=new mysqli($this->host,$this->name,$this->pass,$this->dbname,$this->port);
        if($this->db->connect_errno){
            echo "数据库连接失败".$this->db->connect_errno;
            exit;
        }
        $this->db->query("set names utf8");
    }

    function selectAll($filed="*",$where=""){
        if(!empty($where)){
            $sql="select ".$filed." from ".$this->tablename." where ".$where;
        }else{
            $sql="select ".$filed." from ".$this->tablename;
        }
        $result=$this->db->query($sql);
        return $array=$result->fetch_all(MYSQLI_ASSOC);
    }

    function selectone($filed="*",$where=""){
        if(!empty($where)){
            $sql="select ".$filed." from ".$this->tablename." where ".$where;
        }else{
            $sql="select ".$filed." from ".$this->tablename;
        }
        $result=$this->db->query($sql);
        return $array=$result->fetch_assoc();
    }

    function del($where){
        $sql="delete from ".$this->tablename." where ".$where;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function update($filed,$where=""){
        if($where==""){
            $sql="update ".$this->tablename." set ".$filed;
        }else{
            $sql="update ".$this->tablename." set ".$filed." where ".$where;
        }
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function insert($filed){
        $k="";
        $v="";
        foreach($filed as $a=>$b){
            $k.=$a.",";
            $v.="'{$b}',";
        }
        $k=substr($k,0,-1);
        $v=substr($v,0,-1);
        $sql="insert into ".$this->tablename." (".$k.")"." values "."(".$v.")";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
}

//$db=new db("stu");
//var_dump($db->insert(['age'=>18,'name'=>'lisi','sex'=>'女','class'=>128]));