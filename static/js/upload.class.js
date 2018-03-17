/**
 * url  ajax发送地址
 * fileinput  选择文件对象
 * subobj 提交对象
 * boxobj 默认图片预览盒子对象
 * imgobj 自定义图片预览对象
 * proobj 自定义进度条对象
 * callback 上传完成后的回调函数
 */

class Upload{

    constructor(url,fileinput,subobj,boxobj,imgobj,proobj,flag,textobj=null){
        this.url=url;
        this.fileinput=fileinput;
        this.subobj=subobj;
        this.boxobj=boxobj||null;
        this.imgobj=imgobj||null;
        this.proobj=proobj||null;
        this.size=20*1024*1024;
        this.typearr=["jpg","jpeg","gif","png"];
        this.filearr=[];
        this.fname="";
        this.files="";
        this.flag=flag||false;
        this.callback=function () {};
        this.textobj=textobj;
    }

    check(value){
        if(value.size>this.size){
            alert("文件过大");
            return false;
        }
        var flag = false;
        for(var i =0;i<this.typearr.length;i++){
            if(this.fname==this.typearr[i]){
                flag=true;
                break;
            }
        }
        if(!flag){
            alert("格式不符");
            return false;
        }
        return true;
    }

    createimg(callback){
        this.callback=callback;
        var that=this;
        this.fileinput.onchange=function () {
            that.filearr=[];
            if(that.obj){
                that.boxobj.innerHTML="";
            }
            that.files=this.files;
            [...that.files].forEach(function(value,index){
                that.filearr.push({id:index,file:value})
            });
            that.filearr.forEach(function(value,index) {
                that.fname=value.file.name.substr(value.file.name.lastIndexOf(".")+1);
                if(that.check(value.file)){
                    var read = new FileReader;
                    read.readAsDataURL(value.file);
                    read.onload=function(e) {
                        var e = e||window.event;
                        if(that.boxobj){
                            var div=document.createElement("div");
                            div.style.cssText="width:100px;height:100px;box-sizing:border-box;border:1px solid #000;position:relative;float:left;overflow:hidden";
                            div.id=value.id;
                            div.innerHTML=`
                            <img class='loadimg' src=${e.target.result} alt='' width="100%">
                            <div class="del" style="width:20px;height: 20px;background-color: rgba(0,0,0,0.5);font-size: 18px;line-height: 20px;text-align: center;color: #fff;position: absolute;right:10px;top:10px;cursor: pointer;">×</div>
                            <div class="pro" id="p${value.id}" style="width:0%;height: 5px;background-color: #00b7ee;position: absolute;left:0;bottom: 0;"></div>
                            <div class="sess" id="s${value.id}" style="width:100%;height: 30px;font-size: 28px;line-height: 30px;position: absolute;left:0;top:50%;margin-top: -15px;text-align: center;"></div>
                            `;
                            that.boxobj.appendChild(div);
                        }else{
                            if(that.imgobj){
                                that.imgobj.src=e.target.result;
                            }

                        }
                    }

                    if(that.flag){
                        that.filearr.forEach(function(value,index) {
                            var formdata =new FormData();
                            formdata.append("file",value.file);
                            var ajax=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
                            ajax.upload.onprogress=function (e) {
                                var e = e||window.event;
                                var itm=e.loaded/e.total*100+"%";
                                if(that.boxobj){
                                    var pro=document.querySelector("#p"+value.id);
                                    pro.style.width=itm;
                                }else{
                                    if(that.proobj){
                                        that.proobj.style.width=itm;
                                        that.proobj.innerHTML=itm;
                                    }
                                }
                                if(that.textobj){
                                    that.textobj.innerText="上传中···"
                                }

                            }
                            ajax.onload=function () {
                                var text=ajax.responseText;
                                that.callback(text);
                            }
                            ajax.open("post",that.url);
                            ajax.send(formdata);
                        })
                    }


                }
            })
        }
    }

    del(){
        if(this.boxobj){
            var that=this;
            this.boxobj.onclick=function (e) {
                var e = e||window.event;
                var btn=e.target;
                if(btn.className=="del"){
                    that.filearr=that.filearr.filter(function (value,index) {
                        return btn.parentNode.id!=value.id;
                    });
                    that.boxobj.removeChild(btn.parentNode);
                }
            }
        }
    }

    sub(callback){
        var that=this;
        this.subobj.onclick=function (e) {
            e.preventDefault();
            that.filearr.forEach(function(value,index) {
                var formdata =new FormData();
                formdata.append("file",value.file);
                var ajax=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
                ajax.upload.onprogress=function (e) {
                    var e = e||window.event;
                    var itm=e.loaded/e.total*100+"%";
                    if(that.boxobj){
                        var pro=document.querySelector("#p"+value.id);
                        pro.style.width=itm;
                    }else{
                        if(that.proobj){
                            that.proobj.style.width=itm;
                            that.proobj.innerHTML=itm;
                        }
                    }

                }
                ajax.onload=function () {
                    var text=ajax.responseText;
                    callback(text);
                }
                ajax.open("post",that.url);
                ajax.send(formdata);
            })
        }
    }

}