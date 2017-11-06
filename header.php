<style>
    .ah{width: 90%;background-color: #eeeeee;margin: 0 auto}
    .ah img{float: left;margin: 2px 50px 2px 2px;border-style: none;}
    .ah span{float:left;font-size: 28px;font-weight: 700;margin-top: 20px}
</style>
<div class="ah">
    <img src="/xk/image/logo.jpg"></img>
    <span style="color: rgb(178,200,187)">欢迎使用</span>
<!--    <span style="color: rgb(114,83,52)">.</span>-->
    <span style="color: rgb(69,137,148)">教学管理系统!</span>
    <div style="float:right">
    <?php
        date_default_timezone_set("PRC");
        $time1= time();
        $day=date("Y年m月d日",$time1);
        echo $day;
    ?>
    <br>
    <?php
        $weekarray=array("日","一","二","三","四","五","六"); //先定义一个数组
        echo "星期".$weekarray[date("w")];      
    ?>
    <br>
     <?php
       $tm=date("H:i:s",$time1);
       echo $tm;   
    ?>
    </div>
    <div class="clear"></div>
</div>
