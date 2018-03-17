
$(function () {



    //登录
var data;
$("#regcode").focus(function () {
    $(document.body).keyup(function () {
        data = $("#regcode").attr("name")+"="+$("#regcode").val();
        $.ajax({
            type:"post",
            url:"index.php?a=codeinfo",
            data:data,
            success:function (e) {
                if(e=="true"){
                    $("i.icon1").animate({"opacity":1},500);
                }else{
                    $("i.icon1").animate({"opacity":0},500);
                }
            }
        })
    })
})


$("#formlogin").validate({
    rules:{
        user:{
            required:true,
            rangelength:[5,10],
        },
        pass:{
            required:true,
            rangelength:[6,8],
        },
        regcode:{
            required:true,
            remote:{
                type:"post",
                url:"index.php?a=codeinfo",
                data:data,
            }
        },
    },
    messages:{
        user:{
            required:"必填",
            rangelength:"请输入5~10个字符",
        },
        pass:{
            required:"必填",
            rangelength:"请输入6~8个字符",
        },
        regcode:{
            required:"请输入验证码",
            remote:"验证码不正确",
        },
    },
    debug:true,
})

$(".lsub input").on("click",function () {
    if($("#formlogin").valid()){
        var data1="user="+$("input[name='user']").val()+"&pass="+$("input[name='pass']").val();
        $(".lsub span").get(0).innerText="登录中";
        $(".lsub").addClass("active");
        $.ajax({
            url:"index.php?a=logininfo",
            type:"post",
            data:data1,
            success:function (e) {
                if(!isNaN(e)){
                    location.href="index.php";
                }else{
                    $(".lsub span").get(0).innerText="登录";
                    $(".lsub").removeClass("active");
                    $(".note").css("display","block");
                }
            }
        })

    }

})

$(".lcontent").on("click",function () {
    $(".note").css("display","none");
})


})