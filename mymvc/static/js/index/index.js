
$(function () {

    //文章主题
    $(".colum .cor").on("click",function () {
        $(".colum .cor").removeClass("curr").eq($(this).index()).addClass("curr");
        $(".showbox .showw").removeClass("active").eq($(this).index()).addClass("active");
        if($(this).index()==1){
            $.ajax({
                url:"index.php?a=posit",
                data:"posid=7",
                dataType:"json",
                success:function (arr) {
                    $(".show_li>.active").html("")
                    var str="";
                    arr.forEach(function (value,index) {
                        var desc=value.cat_desc.substr(0,30)
                        str+=`
                    <div class="h_con" catid="${value.cat_id}">
                        <div class="collection-wrap">
                            <a class="cateimg" href="index.php?f=lists&catid=${value.cat_id}" >
                                <img src="${value.imgurl}" alt="" />
                            </a>
                            <h4><a href="index.php?f=lists&catid=${value.cat_id}" >${value.cat_name}</a></h4>
                            <p class="zhai">${desc}...</p>
                            <a class="flo">+订阅</a>
                            <hr>
                            <div class="count"><a href="index.php?f=lists&catid=${value.cat_id}" >19636篇文章</a>·387.2K人订阅</div>
                        </div>
                    </div>
                    `
                    })

                    $(".show_li>.active").append(str);

                }
            })
        }
    });

    //推荐热门
    $("#hot li").on("click",function () {
        $("#hot li").removeClass("curr").eq($(this).index()).addClass("curr");
        $(".show_li .hot_list").removeClass("active").eq($(this).index()).addClass("active");
        $.ajax({
            url:"index.php?a=posit",
            data:"posid="+$(this).attr("posid"),
            dataType:"json",
            success:function (arr) {
                $(".show_li>.active").html("");
                var str="";
                arr.forEach(function (value,index) {
                    var desc=value.cat_desc.substr(0,30);
                    str+=`
                    <div class="h_con" catid="${value.cat_id}">
                        <div class="collection-wrap">
                            <a class="cateimg" href="index.php?f=lists&catid=${value.cat_id}" >
                                <img src="${value.imgurl}" alt="" />
                            </a>
                            <h4><a href="index.php?f=lists&catid=${value.cat_id}" >${value.cat_name}</a></h4>
                            <p class="zhai">${desc}...</p>
                            <a class="flo">+订阅</a>
                            <hr>
                            <div class="count"><a href="index.php?f=lists&catid=${value.cat_id}" >19636篇文章</a>·387.2K人订阅</div>
                        </div>
                    </div>
                    `
                });

                $(".show_li>.active").append(str);

            }
        })
    })

    




});


