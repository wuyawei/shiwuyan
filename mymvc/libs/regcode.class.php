<?php

class regcode
{
    private $str="acdefhijkmnpwxyABCDEFGHJKMNPQWXY134567";
    private $strnum=4;
    public $resulttext;
    public $width=150;
    public $height=50;
    public $linenum=2;
    public $pixnum=20;
    public $type='png';
    public $fontstyle="hgf.ttf";
    public $fontsize=array('min'=>18,'max'=>25);
    public $img;
    public $color;

    public function getbgcolor(){
        $this->color=imagecolorallocate($this->img,mt_rand(50,128),mt_rand(50,128),mt_rand(50,128));
    }
    public function gettextcolor(){
        $this->color=imagecolorallocate($this->img,mt_rand(128,250),mt_rand(128,250),mt_rand(128,250));
    }
    public function createimg(){
        $this->img=imagecreatetruecolor($this->width,$this->height);
        $this->getbgcolor();
        imagefill($this->img,0,0,$this->color);
    }
    public function createline(){
        for($k=0;$k<$this->linenum;$k++){
            $this->gettextcolor();
            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->color);

        }
    }
    public function createpix(){
        for($k=0;$k<$this->pixnum;$k++){
            $this->gettextcolor();
            imagesetpixel($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->color);
        }
    }
    public function gettext(){
        $str='';
        $len=strlen($this->str)-1;
        for($k=0;$k<4;$k++){
            $i=mt_rand(0,$len);
            $str.=$this->str[$i];
        }
        $this->resulttext=strtolower($str);
        return $str;
    }
    public function createtext(){
        $str=$this->gettext();

        for($k=0;$k<$this->strnum;$k++){
            $this->gettextcolor();
            $x=$this->width/$this->strnum;
            $fontsize=mt_rand($this->fontsize["min"],$this->fontsize["max"]);
            $rect=imagettfbbox($fontsize,0,$this->fontstyle,$str);
            $w=($x*$k+5)+mt_rand(-5,5);
            $h=mt_rand($rect[1]-$rect[5],$this->height-5);
            imagettftext($this->img,$fontsize,mt_rand(-20,20),$w,$h,$this->color,$this->fontstyle,$str[$k]);
        }
    }

    //$rect0    字体左下角 X 位置
    //$rect1	左下角 Y 位置
    //$rect2	右下角 X 位置
    //$rect3	右下角 Y 位置
    //$rect4	右上角 X 位置
    //$rect5	右上角 Y 位置
    //$rect6	左上角 X 位置
    //$rect7	左上角 Y 位置

    public function output(){
        header('content-type:image/'.$this->type);
        $this->createimg();
        $this->createline();
        $this->createpix();
        $this->createtext();
        $img='image'.$this->type;
        $img($this->img);
        imagedestroy($this->img);
    }
}
