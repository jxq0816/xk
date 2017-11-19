<!DOCTYPE html>
<html>
    <head>
        <title>navigation</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/xk/css/xk.css?random=<?php rand()?>"/>
        <?php
            $name="jiangxingqi";
            $choice=1;
        ?>
    </head>
    <body>
        <div class="nav">
           
            <a class='right' href="logoff.php">退出</a>
            <span class="right"><?php echo $name."老师,您好!"?></span>
           
            <a class='left <?php echo $choice==1 ? "current" : ""?>' href="score_view.php">课程列表</a>
            
            <a class='left <?php echo $choice==2 ? "current" : ""?>' href="elective.php">编辑课程信息</a>
            
            <a class='left <?php echo $choice==3 ? "current" : ""?>' href="course.php">录入成绩</a>
           
            <div style="clear:both"></div>
            
        </div>
    </body>
</html>
