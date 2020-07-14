<?php echo $__env->make('front/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="line46"></div>
<article>
    <div class="leftbox">
        <div class="newblogs">
            <h2 class="hometitle"><span><a href="/front/search?keyboard=心得笔记" target="_blank">心得笔记</a><a href="/front/search?keyboard=随心记录" target="_blank">随心记录</a><a href="/front/search?keyboard=读后感" target="_blank">读后感</a></span>学无止境</h2>
            <ul></ul>
            <div class="pagelist"><div id="test1"></div></div>
        </div>
    </div>
    <div class="rightbox">
        <div class="blank"></div>
        <div class="search">
            <form action="/front/search" method="get" name="searchform" id="searchform">
                <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
                <input  class="input_submit" value="搜索" type="submit">
            </form>
        </div>
        <div class="paihang recommend">
            <h2 class="ab_title"><a href="javascript:void(0)">本栏推荐</a></h2>
            <ul></ul>
            <div class="ad"><img src="images/ad300x100.jpg"></div>
        </div>
        <div class="paihang ranking">
            <h2 class="ab_title"><a href="javascript:void(0)">点击排行</a></h2>
            <ul></ul>
            <div class="ad"><img src="images/ad01.jpg"></div>
        </div>
        <div class="weixin">
            <h2 class="ab_title">微信关注</h2>
            <ul>
                <img src="images/wx.jpg">
            </ul>
        </div>
    </div>
</article>
<?php echo $__env->make('front/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script src="/front/js/study.js"></script>