/**
 * Created by wyw on 2017/8/13.
 */


$(function () {
    var file =$("#file").get(0);
    var uimg=$("#uimg").get(0);
    var textobj=$(".upfile span").get(0);
    var upload = new Upload("index.php?a=upload",file,null,null,null,null,true,textobj)
    upload.createimg(function (e) {
        uimg.src=e;
        textobj.innerText="更换头像";
    });
    
    
    $(".sub").click(function () {
        var data="uname="+$("#user").val()+"&usign="+$("#usign").val()+"&sex="+$("input[name='sex']:checked").val()+"&resume="+$("#resume").val()+"&uimg="+$("#uimg").attr("src")+"&user="+$("#zh").val();
        $.ajax({
            url:"index.php?a=minsetinfo",
            data:data,
            success:function (e) {
                if(!isNaN(e)){
                    $("#keep").text("保存成功");
                    $("#keep").slideDown();
                    var t = setTimeout(function () {
                        $("#keep").slideUp();
                        clearTimeout(t);
                    },1500)
                }else{
                    $("#keep").text("操作失败");
                    $("#keep").slideDown();
                    var t = setTimeout(function () {
                        $("#keep").slideUp();
                        clearTimeout(t);
                    },1500)
                }
            }
        })
    })
})