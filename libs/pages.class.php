<?php

class pages
{
    public $total;
    public $pagenum;
    public $pagenums;
    public $curr;
    public $limit;
    function __construct($total,$curr=0,$pagenum=10,$class="current")
    {
        $this->class=$class;
        $this->pagenum=$pagenum;
        $this->total=$total;
        $this->pagenums=intval(ceil($this->total/$this->pagenum));
        $this->curr=$curr;
        $this->url=isset($_GET['page'])?substr($_SERVER["REQUEST_URI"],0, strrpos($_SERVER["REQUEST_URI"],"=")+1):$_SERVER["REQUEST_URI"]."&pages=";
        $this->url=str_replace("getlist","init",$this->url);
        $this->limit=" limit ".$this->pagenum*$this->curr.",{$this->pagenum}";
    }
    function out(){
        $str="";
        if($this->pagenums!=0){
            $url=$this->url;
            $prev=$this->curr-1<0?0:$this->curr-1;
            $next=$this->curr+1>$this->pagenums-1?$this->pagenums-1:$this->curr+1;
            $last=$this->pagenums-1;
            $str.="<span class={$this->class}>共{$this->pagenums}页</span>";
            $str.="<a href={$url}0>首页</a>";
            $str.="<a href={$url}{$prev}>上一页</a>";
            $start=$this->curr-2<0?0:$this->curr-2;
            if($this->curr-2<0){
                $end=4>$this->pagenums-1?$this->pagenums-1:4;
            }else{
                $end=$this->curr+2>$this->pagenums-1?$this->pagenums-1:$this->curr+2;
            }
            for($i=$start;$i<=$end;$i++){
                $n=$i+1;
                if($i==$this->curr){
                    $str.="<a href={$url}{$i} class={$this->class}>{$n}</a>";
                }else{
                    $str.="<a href={$url}{$i}>{$n}</a>";
                }
            }
            $str.="<a href={$url}{$next}>下一页</a>";
            $str.="<a href={$url}{$last}>尾页</a>";
        }
        return $str;

    }
}