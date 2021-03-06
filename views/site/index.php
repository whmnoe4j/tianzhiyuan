<?php

/* @var $this yii\web\View */

$this->title = '2016河北高考志愿填报指南';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>2016河北高考志愿填报指南</h1>

        <p class="lead">数据根据2016及2015的全省高考成绩推算得出，仅供参考</p>

        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="score">你的高考分数</label>
                    <input type="number" name="score" class="form-control" id="score" placeholder="你的高考分数" value="500">
                </div>
                <div class="form-group">
                    <label>理科<input type="radio" value="l" class="" name="wl" checked></label> &nbsp;&nbsp;
                    <label>文科<input type="radio" value="w" class="" name="wl"></label>
                </div>

                <p><a class="btn btn-success" href="javascript:;" onclick="searchScore()">查询</a></p>
            </div>
            <div class="col-lg-8">
                <h2>分析结果</h2>
                <div class="scoreResult">
                    <p> 快来试试吧！</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- JiaThis Button BEGIN -->
                <div class="jiathis_style_32x32">
                    <a class="jiathis_button_qzone"></a>
                    <a class="jiathis_button_tsina"></a>
                    <a class="jiathis_button_tqq"></a>
                    <a class="jiathis_button_weixin"></a>
                    <a class="jiathis_button_renren"></a>
                    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
                    <a class="jiathis_counter_style"></a>
                </div>
                <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                <!-- JiaThis Button END -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                如有意见或建议，请点击<a href="http://www.liyangweb.com/chat/273.html" target="_blank">http://www.liyangweb.com/chat/273.html</a>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    function searchScore()
    {
        var score = $("input[name='score']").val();
        var wl = $("input[name='wl']:checked").val();
        $.ajax({
            url:"<?= \yii\helpers\Url::to(['searchscore']) ?>",
            method:"POST",
            dataType:"html",
            data:{"score":score, "wl":wl},
            success:function(html){
                $(".scoreResult").html(html);
            },
            error:function(){
                alert('error');
            }
        });
    }
</script>