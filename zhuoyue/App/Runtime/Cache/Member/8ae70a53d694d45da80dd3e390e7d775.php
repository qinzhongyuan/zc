<?php if (!defined('THINK_PATH')) exit();?><style>
    body{font-size: 12px !important;}
</style>
<div class="width-100" style="_height:300px;height: auto;float: left;min-height: 300px;">
    <div class="width-100" style="height: 190px;">
        <div class="float_left martop_50" style="width: 145px;border-right: 1px solid #d7d7d7;height: 140px;padding-left: 45px;">
            <img src="__ROOT__/Style/H/images/crowdinvest/auto2.png" alt=""/>
            <div class="font14 martop_10" style="color: #333">平台目前预约人数</div>
            <div class="font14 martop_10" style="color: #333"><span style="color: #fc8936;font-size: 20px;"><?php echo (($now_people)?($now_people):0); ?></span>人</div>
        </div>
        <div class="float_left martop_50" style="width: 182px;border-right: 1px solid #d7d7d7;height: 140px;padding-left: 85px;">
            <img src="__ROOT__/Style/H/images/crowdinvest/auto3.png" alt=""/>
            <div class="font14 martop_10" style="color: #333">平台预约总金额</div>
            <div class="font14 martop_10" style="color: #333"><span style="color: #fc8936;font-size: 20px;"><?php echo (($all_count_money)?($all_count_money):0); ?></span>元</div>
        </div>
        <div class="float_left martop_50" style="width: 145px;border-right: 1px solid #d7d7d7;height: 140px;padding-left: 70px;">
            <img src="__ROOT__/Style/H/images/crowdinvest/auto4.png" alt=""/>
            <div class="font14 martop_10" style="color: #333">预计排名</div>
            <div class="font14 martop_10" style="color: #333"><span style="color: #fc8936;font-size: 20px;"><?php echo ($now_count+1); ?></span>名</div>
        </div>
        <div class="float_left martop_50" style="width: 182px;height: 140px;padding-left: 95px;">
            <img src="__ROOT__/Style/H/images/crowdinvest/auto5.png" alt=""/>
            <div class="font14 martop_10" style="color: #333">前面排队资金</div>
            <div class="font14 martop_10" style="color: #333"><span style="color: #fc8936;font-size: 20px;"><?php echo (($now_money)?($now_money):0); ?></span>元</div>
        </div>
    </div>
    <div class="width-100" style="height: 45px;background: #7fd4f3;margin:70px auto 20px;">
        <span style="display: block;height: 45px;line-height: 45px;color: #fff;font-size: 16px;margin-left: 30px">添加众筹预约</span>
    </div>
    <div style="width: 95%;margin: 0 auto;height:250px;border-bottom: 1px solid #dcdcdc">
            <div class="width-100" style="color: #333;height: 50px;font-size: 14px !important;">
                <div class="float_left">您的可用余额：<span style="color: #fc8936;display: block;width: 150px;float: right"><?php echo ($investInfo['account_money']+$investInfo['back_money']); ?>元</span></div>
                <input type="hidden" name="user_info_money" value="<?php echo ($investInfo['account_money']+$investInfo['back_money']); ?>"/>
                <div class="float_left">
                    预期截至时间（默认<font style="color: #fc8936">10</font>天后）:
                    <input type="text" id="deadline" readonly="readonly" class="Wdate timeInput_Day" onfocus="WdatePicker({minDate: '%y-%M-#{%d+1}' })" value="<?php echo date('Y-m-d',$deadline); ?>"/>
                </div>
            </div>
            <div class="width-100" style="color: #333;height: 60px;font-size: 14px !important;">
                新增预约金额：<input type="text" id="auto_money" style="width: 210px !important;height: 40px;border-radius: 4px;box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;color: #555;vertical-align: middle;background-color: #FFF;border: 1px solid #06a9e7;" placeholder="请输入1000的整数倍"/>
                可用预约额度：<?php echo ($remain_money); ?>元
                <input type="hidden" id="remain_money" value="<?php echo ($remain_money); ?>"/>
            </div>
            <div class="width-90" style="margin-left: 90px;height: 50px;font-size: 14px !important;">

                <input type="checkbox" checked="checked" id="xieyi" name="xieyi"/><a target="_blank" href="http://www.baishengzc.com/news/346.html" class="color-red">同意《众筹预约协议》 </a>

            </div>
            <div class="width-90" style="margin-left: 90px;height: 60px;font-size: 14px;">
                <span class="a-small-button main-bg-color color-white text-center font16 invest-a height45  font16" style="width: 146px;height: 40px !important;line-height: 39px;border-radius: 5px;cursor: pointer" onclick="auto_money()">我要预约</span>
            </div>
    </div>
    <div style="width: 95%;height: 420px;margin: 0 auto;line-height: 30px;">
        <div style="margin-top: 10px;margin-bottom: 10px;color: #333;font-size: 16px;"><?php echo ($glo["web_name"]); ?>预约说明</div>
        <div style="color: #666;font-size: 16px;">《<?php echo ($glo["web_name"]); ?>众筹项目预约投资协议》</div>
        <div style="color: #666;font-size: 14px;">1． 预约工具目前仅适用于<?php echo ($glo["web_name"]); ?>众筹项目</div>
        <div style="color: #666;font-size: 14px;">2． 预约金额需要满足以下条件：</div>
        <div style="color: #666;font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;a) 1000元的整数倍</div>
        <div style="color: #666;font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;b) 不超过账户可用余额</div>
        <div style="color: #666;font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;c) 预约总额不超过<?php echo ($all_money); ?>万元</div>
        <div style="color: #666;font-size: 14px;">3． 新增一笔预约后，预约资金将由网站冻结，不能用于其他投资或提现；</div>
        <div style="color: #666;font-size: 14px;">4． 当您的预约状态为“排队等待中”时，您的资金正在等待<?php echo ($glo["web_name"]); ?>众筹项目发布，您可以随时取消预约；</div>
        <div style="color: #666;font-size: 14px;">5． 当您的预约状态为“众筹投资中”时，您的资金正在等待投资，您可以随时查看项目筹资状态，此时不可取消；</div>
        <div style="color: #666;font-size: 14px;">6． 当您的预约状态为“众筹已满标”时，预约中转账户中的当笔资金将被投资到<?php echo ($glo["web_name"]); ?>众筹项目中，等待众筹分红；</div>
        <div style="color: #666;font-size: 14px;">7． 取消预约后，预约中转账户中的当笔资金将返还可用余额，预约额度也将加入本次预约的金额；</div>
        <div style="color: #666;font-size: 14px;">8． 预约设置在众筹项目发布预告之前生效，众筹项目发布预告之后设置的预约将排队到以后的众筹项目中；</div>
        <div style="color: #666;font-size: 14px;">9．若您的预约金额超过可投金额，将未投金额将自动生成一条新的预约记录；</div>
    </div>
</div>
<script>
    function auto_money(){
        var auto_money = parseInt($('#auto_money').val());
        var user_reamin_money = parseInt($("#user_info_money").val());
        var remain_money = parseInt($("#remain_money").val());
        var deadline = $('#deadline').val();
        if(auto_money ==""){
            $.jBox.alert("请输入预约金额！","提示");
            return false;
        }
        if ($("input[name='xieyi']").attr("checked") !="checked") {
            $.jBox.alert("阅读并同意金糯米铸鼎预约投资协议后才能添加预约！","提示");
            return false;
        }
        if(user_reamin_money < auto_money){
            $.jBox.alert("您的可用余额不足以支付本次预约，请充值后再预约！！","提示");
            return false;
        }
        if(auto_money%1000 != 0 ){
            $.jBox.alert("预约金额必须为1000的整数倍，请重新输入!","提示");
            return false;
        }
        if(auto_money > remain_money){
            $.jBox.alert("预约金额大于可用预约额度！无法预约!","提示");
            return false;
        }
        $.jBox("get:__URL__/ajax_invest?money="+auto_money+"&deadline="+deadline, {title: "立即预约",buttons:{}});

    }
    function PostData() {
        var auto_money = parseInt($('#auto_money').val());
        var pin = $("#pin").val();				// 支付密码
        var deadline = $('#deadline').val();
        if(!pin){
            $.jBox.tip("请输入支付密码");
            return false;
        }
        $.ajax({
            url: "__URL__/autocheck",
            type: "post",
            dataType: "json",
            data: {"money":auto_money,'pin':pin,'deadline':deadline},
            success: function(d) {
                if (d.status == 1) {
                    investmoney = auto_money;
                    var content = '<div class="jbox-custom"><p>'+ d.message +'</p><div class="jbox-custom-button"><span onclick="$.jBox.close()">取消</span><span onclick="isinvest(true)">确定预约</span></div></div>';
                    $.jBox(content, {title:'会员预约提示',buttons:{}});
                }
                else if(d.status == 2)//
                {
                    var content = '<div class="jbox-custom"><p>'+ d.message +'</p><div class="jbox-custom-button"><span onclick="$.jBox.close()">取消</span><span onclick="ischarge(true)">去充值</span></div></div>';
                    $.jBox(content, {title:'会员投标提示',buttons:{}});
                }
                else if(d.status == 3)//
                {
                    $.jBox.tip(d.message);
                }else{
                    $.jBox.tip(d.message);
                }
            }
        });
    }
    function isinvest(d){
        if(d===true) document.forms.investForm.submit();
    }
    // 充值
    function ischarge(d){
        if(d===true) location.href='/member/charge#fragment-1';
    }
</script>