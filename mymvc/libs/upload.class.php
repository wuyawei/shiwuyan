<?php

    class upload
    {
        public $upload="upload";
        public $imgurl="http://localhost/php/mymvc/upload";

        function __construct($file)
        {
            $this->file=$file;
            date_default_timezone_set("Asia/Shanghai");
        }

        function up(){
            if(is_uploaded_file($this->file["tmp_name"])){
                if(!file_exists("$this->upload")){ //is_dir
                    mkdir("$this->upload");
                };
                $dirname=date("y-m-d");
                if(!file_exists("$this->upload/".$dirname)){
                    mkdir("$this->upload/".$dirname);
                };
                $filename=microtime(true).".".explode("/",$this->file["type"])[1];
                $url=$this->upload."/".$dirname."/".$filename;
                $result=move_uploaded_file($this->file["tmp_name"],$url);
                if($result){
                    echo $imgurl=$this->imgurl."/".$dirname."/".$filename;
                }

            }

        }
    }