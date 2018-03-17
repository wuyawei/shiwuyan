/**
 * Created by wyw on 2017/8/13.
 */

$(function () {

    var data;
    var data1;

    $("input[name='user']").blur(function () {
        data = $(this).attr("name")+"="+$(this).val();
    })

    $("input[name='regcode']").focus(function () {
        $(document.body).keyup(function () {
            data1 = $("input[name='regcode']").attr("name")+"="+$("input[name='regcode']").val();
            $.ajax({
                type:"post",
                url:"index.php?a=codeinfo",
                data:data1,
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

    $("#formsign").validate({
        onkeyup:function(element) { $(element).valid()},
        rules:{
            user:{
                required:true,
                rangelength:[6,10],
                remote:{
                    type:"post",
                    url:"index.php?a=signcheck",
                    data:data,
                }
            },
            pass:{
                required:true,
                rangelength:[6,10],
            },
            apass:{
                required:true,
                equalTo:"#pass",
            },
            regcode:{
                required:true,
                remote:{
                    type:"post",
                    url:"index.php?a=codeinfo",
                    data:data1,
                }
            },
        },
        messages:{
            user:{
                required:"必填",
                rangelength:"请输入6~10个数字、字母",
                remote:"用户名已存在 ",
            },
            pass:{
                required:"必填",
                rangelength:"密码为6~10个数字、字母",
            },
            apass:{
                required:"必填",
                equalTo:"两次输入不一致",
            },
            regcode:{
                required:"请输入验证码",
                remote:"验证码不正确",
            },
        }
    })

    $(".lsub input").on("click",function () {
        if($("#formsign").valid()){
            var data2="user="+$("input[name='user']").val()+"&pass="+$("input[name='pass']").val();
            $(".lsub span").get(0).innerText="注册中";
            $(".lsub").addClass("active");
            $.ajax({
                url:"index.php?a=signupinfo",
                type:"post",
                data:data2,
                success:function (e) {
                    if(!isNaN(e)){
                        location.href="index.php";
                    }else{
                        $(".lsub span").get(0).innerText="注册";
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
