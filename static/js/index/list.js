/**
 * Created by wyw on 2017/8/11.
 */

$(function () {
    var text;
    var cid=$(".love").attr("catid");
    $(".love").click(function () {
        if($(this).attr("flag")){
            if($(this).attr("take")=="false"){
                $.ajax({
                    url:"index.php?f=lists&a=take",
                    data:"cid="+cid,
                    success:function (e) {
                        if(e=="true"){
                            $(".love").attr("take","true")
                            $(".love").text("已订阅");
                            text = "已订阅";
                        }
                    }
                })
            }else{
                $.ajax({
                    url:"index.php?f=lists&a=canceltake",
                    data:"cid="+cid,
                    success:function (e) {
                        if(e=="true"){
                            $(".love").text("+订阅");
                            $(".love").attr("take","false")
                            text = "+订阅";
                        }
                    }
                })

            }
        }else{
            $("#zhezhao").css("display","block");
            var t = setTimeout(function () {
                $("#zhezhao").css("display","none");
                clearTimeout(t);
            },3000);
            $(".modal .on").click(function () {
                location.href="index.php?a=login";
            });
            $(".modal .off").click(function () {
                $("#zhezhao").css("display","none");
            })
        }
    });

    $(".love").hover(function () {
        text = $(this).text();
        if($(this).attr("take")=="true"){
            $(this).text("取消订阅");
        }
    },function () {
        $(this).text(text);
    })



    $(".tirgger li").click(function (){
        $(".listcon ul").removeClass("active").eq($(this).index()).addClass("active")
        $(".tirgger li").removeClass("active").eq($(this).index()).addClass("active")
        if ($(this).index() == 1) {
            $.ajax({
                url: "index.php?f=lists&a=hot",
                data: "posid=7&cid="+$(this).attr("catid"),
                dataType: "json",
                success: function (arr) {
                    $(".s_list").eq(1).html("");
                    var str = "";
                    arr.forEach(function (value, index) {
                        var desc = value.skey.substr(0, 100);
                        str += `
                    <li>
						<div class="s_cont">
							<div class="author">
								<a class="toux"  href="">
									<img src="${value.uimgurl}" alt="96">
								</a>
								<div class="name">
									<a class="uname" href="">${value.uname}</a>
									<span class="time">${value.stime}</span>
								</div>
							</div>
							<a href="index.php?f=show&sid=${value.sid}" class="title">${value.stitle}</a>
							<p class="scont">
								${desc}...
							</p>
							<div class="meta">
								<a href="" class="hits">
									<i class="icon iconfont2">&#xe690;</i> 2598
								</a>
								<a  href="" class="ping">
									<i class="icon iconfont2">&#xe60e;</i> 66
								</a>
								<a class="shouc" href=""><i class="iconfont2">&#xe610;</i>307</a>
							</div>
						</div>
						<a href="">
							<img src="${value.imgurl}" alt="" />
						</a>
					</li>
                    `
                    });
                    if(str){
                        $(".s_list").eq(1).append(str);
                    }else{
                        $(".s_list").eq(1).append("<p>暂无内容！</p>");
                    }

                }

            })
        }

    })

})
