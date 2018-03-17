/**
 * Created by wyw on 2017/8/13.
 */

$(function () {

    //顶部
    $("#search").focus(function () {
        $(this).parent().addClass("active");
    })
    $("#search").blur(function () {
        if($(this).val()==""){
            $(this).parent().removeClass("active");
        }
    });


    document.body.onclick=function (e) {
        var e = e||window.event;
        if(e.target.className=="icon iconfont n"){
            $(".daoh").slideToggle(200);
            $(".hanbao span").toggleClass("active");
        }else if(e.target.id=="userimg"){
            $(".daoh").slideToggle(200);
            $(".hanbao span").toggleClass("active");
        }else{
            $(".daoh").slideUp(200);
            $(".hanbao span").removeClass("active");
        }
    }

    function jumpidea() {
        $("#zhezhao").css("display","block");
        var t = setTimeout(function () {
            $("#zhezhao").css("display","none");
            clearTimeout(t);
        },3000)
        $(".modal .on").click(function () {
            location.href="index.php?a=login";
        })
        $(".modal .off").click(function () {
            $("#zhezhao").css("display","none");
        })
    }

    //弹出框
    $(".drive").on("click",function () {
        if($(this).attr("flag")){
            location.href="index.php?a=put";
        }else{
            jumpidea()
        }

    })

    //搜索

    $(".search .sear").click(function () {
        if($("#search").val()==""){
            $("#search").parent().removeClass("active");
        }else{
            var href = "index.php?f=search&sear="+$("#search").val();
            location.href=href;
        }
    })

})