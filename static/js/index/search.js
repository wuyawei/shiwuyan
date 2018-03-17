/**
 * Created by wyw on 2017/8/16.
 */

$(function () {
    $(".sbox_l li").on("click",function () {
        $(".sbox_l li").removeClass("active").eq($(this).index()).addClass("active")
        $(".sbox_r ul").removeClass("active").eq($(this).index()).addClass("active")
        if($(this).index()==1){
            $.ajax({
                url:'index.php?f=search&a=getuser',
                data:"sear="+$("#search").val(),
                dataType:'json',
                success:function (arr) {
                    $(".sbox_r ul").eq(1).html("");
                    if(arr.length){
                    var str='';
                    arr.forEach(v=>{
                       str += `
                    <li>
                        <a href="" class="avatar"><img src="${v.imgurl}"></a>
                        <div class="info">
                            <a href="" class="name">${v.uname}</a>
                            <div class="meau">
                                <span>关注 0</span>
                                <span>粉丝 0</span>
                                <span>文章 0</span>
                            </div>
                            <div class="meauq">
                                <span class="a">写了 0 字，获得了 0 个喜欢</span>
                            </div>
                        </div>
                        <a class="follow">
                            + 关注
                        </a>
                    </li>
                    `;
                    });
                    $(".sbox_r ul").eq(1).append(str)
                }else{
                        $(".sbox_r ul").eq(1).html("<p>暂无相关用户！</p>")
                    }
                }
            })
        }else if($(this).index()==2){
            $.ajax({
                url:'index.php?f=search&a=getsub',
                data:"sear="+$("#search").val(),
                dataType:'json',
                success:function (arr) {
                    $(".sbox_r ul").eq(2).html("");
                    if(arr.length){
                        var str='';
                        arr.forEach(v=>{
                            str += `
                    <li>
                    <a href="" class="avatar"><img src="${v.imgurl}"></a>
                    <div class="info">
                        <a href="" class="name">${v.cat_name}</a>
                        <div class="meauq">
                            <span>收录了665篇文章，153人订阅</span>
                        </div>
                    </div>
                    <a class="follow">
                        + 订阅
                    </a>
                </li>
                    `;
                        });
                        $(".sbox_r ul").eq(2).append(str)
                    }else{
                        $(".sbox_r ul").eq(2).html("<p>暂无相关专题！</p>")
                    }
                }
            })
        }
    })
})
