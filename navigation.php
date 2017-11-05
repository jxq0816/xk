<!DOCTYPE html>
<html>
    <head>
        <title>navigation</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/xk/css/xk.css?random=1"/>
        <?php
            $name="jiangxingqi";
            $choice=1;
        ?>
    </head>
    <body>
        <div class="nav">
            <a class="right" href="#">退出</a>
            <span class="right"><?php echo $name.",您好"?></span>
            <a class='left <?php echo $choice==1 ? "current" : ""?>' href="teacher_p.php">浏览教师信息</a>
            <a class='left <?php echo $choice==2 ? "current" : ""?>' href="course_p.php">添加课程</a>
            <a class='left <?php echo $choice==3 ? "current" : ""?>' href="opencourse_p.php">维护开课信息</a>
            <div style="clear:both"></div>
        </div>
    </body>
</html>
