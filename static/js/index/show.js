/**
 * Created by wyw on 2017/8/14.
 */

$(function () {

    //判断登录后进行操作
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




    //关注作者
    var text=$(".artice .sinfo>a").text();
    $(".artice .sinfo>a").on("click",function () {
        let gnum=Number($(".s_info .meta i").text());
        let that = this;
        let uid1 = $(this).attr("uid1");
        let uid2 = $("#per").attr("uid2");
        if($(this).attr("flag")){
            if($(this).attr("guan")==="false"){
                $.ajax({
                    url:"index.php?f=show&a=guan",
                    data:`uid1=${uid1}&uid2=${uid2}`,
                    success:function (e) {
                        if(e>0){
                            $(".floau .guan").attr("guan","true");
                            $(".floau .guan").text("已关注");
                            $(that).attr("guan","true");
                            $(that).text("已关注");
                            $(".s_info .meta i").text(gnum+1)
                            text="已关注";
                        }
                    }
                });
            }else{
                $.ajax({
                    url:"index.php?f=show&a=off",
                    data:`uid1=${uid1}&uid2=${uid2}`,
                    success:function (e) {
                        if(e>0){
                            $(".floau .guan").attr("guan","false");
                            $(".floau .guan").text("+关注");
                            $(".s_info .meta i").text(gnum-1);
                            $(that).attr("guan","false");
                            $(that).text("+关注");
                            text="+关注";
                        }
                    }
                });
            }
        }else{
            jumpidea()
        }

    });

    $(".artice .sinfo>a").hover(function () {
        if($(this).attr("flag")){
            if($(this).attr("guan")==="true"){
                $(this).text("取消关注")
            }
        }
    },function () {
        $(this).text(text)
    });


    var text2=$(".floau .guan").text();

    $(".floau .guan").on("click",function () {
        let gnum=Number($(".s_info .meta i").text());
        let that = this;
        let uid1 = $(this).attr("uid1");
        let uid2 = $("#per").attr("uid2");
        if($(this).attr("flag")){
            if($(this).attr("guan")==="false"){
                $.ajax({
                    url:"index.php?f=show&a=guan",
                    data:`uid1=${uid1}&uid2=${uid2}`,
                    success:function (e) {
                        if(e>0){
                            $(".artice .sinfo>a").attr("guan","true");
                            $(".artice .sinfo>a").text("已关注");
                            $(".s_info .meta i").text(gnum+1);
                            $(that).attr("guan","true");
                            $(that).text("已关注");
                            text2="已关注";
                        }
                    }
                });
            }else{
                $.ajax({
                    url:"index.php?f=show&a=off",
                    data:`uid1=${uid1}&uid2=${uid2}`,
                    success:function (e) {
                        if(e>0){
                            $(".artice .sinfo>a").attr("guan","false");
                            $(".artice .sinfo>a").text("+关注");
                            $(".s_info .meta i").text(gnum-1);
                            $(that).attr("guan","false");
                            $(that).text("+关注");
                            text2="+关注";
                        }
                    }
                });
            }
        }else{
            jumpidea()
        }

    });

    $(".floau .guan").hover(function () {
        if($(this).attr("flag")){
            if($(this).attr("guan")==="true"){
                $(this).text("取消关注")
            }
        }
    },function () {
        $(this).text(text2)
    });




    //收藏文章
    $(".like-group").on("click",function () {
        if($(this).attr("flag")){
            let that = this;
            let sid = $(".artice").attr("sid");
            let uid = $("#per").attr("uid2");
            let text = Number($(".modal-wrap span").text());
            if($(this).is(".active")){
                $.ajax({
                    url:'index.php?f=show&a=offlove',
                    data:`sid=${sid}&uid=${uid}`,
                    success:function (e) {
                        if(e>0){
                            $(that).removeClass("active");
                            $(".modal-wrap span").text(text-1);
                            $(".s_info .meta em").text(text-1);
                        }
                    }
                })
            }else{
                $.ajax({
                    url:'index.php?f=show&a=love',
                    data:`sid=${sid}&uid=${uid}`,
                    success:function (e) {
                        if(e>0){
                            $(that).addClass("active");
                            $(".modal-wrap span").text(text+1);
                            $(".s_info .meta em").text(text+1);
                        }
                    }
                })
            }
        }else{
            jumpidea()
        }

    });



//    评论
    $("#rate textarea").focus(function () {
        $("#rate .write").fadeIn()
    });
    $("#rate .send").on("click",function () {
        let val=$("#rate textarea").val();
        let that = this;
        let sid = $(".artice").attr("sid");
        let uid = $("#per").attr("uid2");
        if(val===""){
            $("#keep").text("内容不能为空");
            $("#keep").slideDown();
            let t = setTimeout(function () {
                $("#keep").slideUp();
                clearTimeout(t);
            },1500)
        }else{
            let time = moment().format("YYYY-MM-DD HH:mm:ss");
            let rnum=Number($(".ptop span i").text());
            $.ajax({
                url:'index.php?f=show&a=rate',
                data:`val=${val}&sid=${sid}&uid=${uid}`,
                dataType:'json',
                success:function (uarr) {
                    if(uarr){
                        let str=`
                        <div class="comment">
                            <div class="mauth">
                                <a href="" >
                                    <img src="${uarr.imgurl}" alt="" />
                                </a>
                                <div class="minfo">
                                    <a href="">${uarr.uname}</a>
                                    <p >
                                        <span>13楼 · ${time}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="comment_wrap">
                                <p>${val}</p>
                                <div class="groop" rid="${uarr.rid}" uid="${uarr.uid}">
                                    <a href="javascript:;">
                                        <i class="icon icon6">&#xe6cd;</i>
                                        <span>点赞</span>
                                    </a>
                                    <a href="javascript:;" class="reply" flag="{$flag}">
                                        <i class="icon icon6">&#xe6a3;</i>
                                        <span>回复</span>
                                    </a>
                                    <a href="javascript:;" class="delrate">
										<span>删除</span>
									</a>
                                </div>
                            </div>
                           
                            <div class="sub_comment">
                                <div class="comment_rebox"></div>
                                <div class="subcom">
                                    <textarea placeholder="写下你的评论..."></textarea>
                                    <div class="write">
                                        <span class="send">发送</span>
                                        <span class="cacel">取消</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
                        if($(".norate")){
                            $(".norate").remove()
                            $(".ptop").html(`
                            <span><i>1</i>条评论</span>
                            `)
                        }
                        $(".commentbox").prepend(str);
                        $(".ptop span i").text(rnum+1);
                        $("#rate textarea").val("");
                        $("#rate .write").fadeOut();
                    }
                }
            })
        }
    });

    $("#rate .cacel").on("click",function () {
        $("#rate .write").fadeOut()
    });


    //删除评论
    $(".commentbox").on("mouseover",".groop",function () {
        let that = this;
        let rid =$(this).attr("rid");
        $(".delrate",$(this)).stop(true);
        $(".delrate",$(this)).fadeIn();

        $(".delrate",$(this)).on("click",function () {
            $("#zhezhao").css("display","block");
            $("#zhezhao p").text("确定删除该评论及其所有回复吗？");
            let rnum=Number($(".ptop span i").text());
            let t = setTimeout(function () {
                $("#zhezhao").css("display","none");
                clearTimeout(t);
            },3000);

            $(".modal .off").click(function () {
                $("#zhezhao").css("display","none");
            });

            $(".modal .on").click(function () {
                $.ajax({
                    url:'index.php?f=show&a=delrate',
                    data:`rid=${rid}`,
                    success:function (e) {
                        if(e>0){
                            $(that).parent().parent().remove();
                            $(".ptop span i").text(rnum-1);
                            $("#zhezhao").css("display","none");
                        }
                    }
                })
            });
        })
    });

    $(".commentbox").on("mouseout",".groop",function (){
        $(".delrate",$(this)).stop(true);
        $(".delrate",$(this)).fadeOut();
    });




    //回复
    $(".add-comment-btn").on("click",function () {
        if($(this).attr("flag")){

        }else{
            jumpidea()
        }

    });

    $(".comment_rebox").each(function () {
        if($(this).children().length){
            $(this).next().css("display","none");
        }else{
            $(this).parent().css("display","none");
        }
    });


    $(".commentbox").on('click',".groop .reply",function () {
        if($(this).attr("flag")){
            let sub=$(this).parent().parent().next();
            if($(".comment_rebox",sub).children().length){
                $(".subcom",sub).fadeToggle();
                $("textarea",sub).get(0).focus();
            }else{
                sub.fadeToggle();
            }
            $(".send",sub).removeAttr("answer");
            $(".send",sub).attr("reply","reply");

            if($(".send",sub).attr("reply")){

            $(".send",sub).on("click",function () {
                let that = this;
                let sub=$(this).parent().parent().parent();
                let rid=$(this).attr("rid");
                let uid1=$(this).attr("uid");
                let val=$("textarea",sub).val();
                let sid = $(".artice").attr("sid");
                let uid2 = $("#per").attr("uid2");
                if(val===""){
                    $("#keep").slideDown();
                    let t = setTimeout(function () {
                        $("#keep").slideUp();
                        clearTimeout(t);
                    },1500)
                }else{
                    let time = moment().format("YYYY-MM-DD HH:mm:ss");
                    $.ajax({
                        url:'index.php?f=show&a=reply',
                        data:`val=${val}&rid=${rid}&uid1=${uid1}&uid2=${uid2}`,
                        dataType:'json',
                        success:function (uarr) {
                            if(uarr){
                                let str = `
                                <div class="comment_re">
                                    <p>
                                        <a href="">${uarr[1].uname}</a>：
                                        <span>
                            `;
                                if(uarr[0]['id']!=uid1){
                                    str+=`<a href="">@${uarr[0].uname}</a>`;
                                }

                                str+=`
										${val}
									</span>
                                    </p>
                                    <div class="sub_group" mid="${uarr[0].mid}" uid="${uarr[1].id}">
                                        <span>${time}</span>
                                        <a class="answer" flag="{$flag}">
                                            <i class="icon icon7">&#xe6a3;</i>
                                            <span>回复</span>
                                        </a>
                                        <a href="javascript:;" class="delmess">
                                            <span>删除</span>
                                        </a>
                                    </div>
                                </div>
                        `;
                                $(".comment_rebox",sub).append(str);
                                $("textarea",sub).val("");
                                $(".subcom",sub).fadeOut();
                                $(".send",sub).removeAttr("reply")
                            }
                        }
                    })
                }
            });

            }

        }else{
            jumpidea()
        }

    });

    $(".commentbox").on("click",".sub_comment .cacel",function () {
        let sub=$(this).parent().parent().parent();
        if($(".comment_rebox",sub).children().length){
            $(".subcom",sub).fadeOut();
            $("textarea",sub).val("");
            $(".send",sub).removeAttr("answer");
            $(".send",sub).removeAttr("reply");
        }else{
            $("textarea",sub).val("");
            sub.fadeOut();
            $(".send",sub).removeAttr("answer");
            $(".send",sub).removeAttr("reply");
        }

    });



    //删除回复
    $(".commentbox").on("mouseover",".sub_group",function () {
        let that = this;
        let mid =$(this).attr("mid");
        $(".delmess",$(this)).stop(true);
        $(".delmess",$(this)).fadeIn();

        $(".delmess",$(this)).on("click",function () {
            $.ajax({
                url:'index.php?f=show&a=delmess',
                data:`mid=${mid}`,
                success:function (e) {
                    if(e>0){
                        $(that).parent().remove();
                    }
                }
            })
        })
    });
    $(".commentbox").on("mouseout",".sub_group",function (){
        $(".delmess",$(this)).stop(true);
        $(".delmess",$(this)).fadeOut();
    });

    //回复留言

    $(".commentbox").on("click",".answer",function () {
        if($(this).attr("flag")){
            let that = this;
            let sub=$(this).parent().parent().parent().next();
            let mid=$(this).parent().attr("mid");
            let uid1=$(this).parent().attr("uid");
            let uid2 = $("#per").attr("uid2");
            sub.fadeToggle();
            $(".send",sub).removeAttr("reply");
            $(".send",sub).attr("answer","answer");

            if($(".send",sub).attr("answer")){


            $(".send",sub).on("click",function () {
                let val=$("textarea",sub).val();
                if(val===""){
                    $("#keep").slideDown();
                    let t = setTimeout(function () {
                        $("#keep").slideUp();
                        clearTimeout(t);
                    },1500)
                }else{
                    let time = moment().format("YYYY-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'index.php?f=show&a=replymess',
                        data: `val=${val}&mid=${mid}&uid1=${uid1}&uid2=${uid2}`,
                        dataType: 'json',
                        success: function (uarr) {
                            if(uarr){
                                let str = `
                                <div class="comment_re">
                                    <p>
                                        <a href="">${uarr[1].uname}</a>：
                                        <span>
                            `;

                                str+=`
                                <a href="">@${uarr[0].uname}</a>
										${val}
									</span>
                                    </p>
                                    <div class="sub_group" mid="${uarr[0].mid}" uid="${uarr[1].id}">
                                        <span>${time}</span>
                                        <a class="answer" flag="{$flag}">
                                            <i class="icon icon7">&#xe6a3;</i>
                                            <span>回复</span>
                                        </a>
                                        <a href="javascript:;" class="delmess">
                                            <span>删除</span>
                                        </a>
                                    </div>
                                </div>
                        `;
                                $(that).parent().parent().after(str);
                                $("textarea",sub).val("");
                                sub.fadeToggle();
                                $(".send",sub).removeAttr("answer")
                            }
                        }
                    })
                }
            })
            }

        }else{
            jumpidea()
        }

    })
    

});