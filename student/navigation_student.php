<!DOCTYPE html>
<html>
    <head>
        <title>navigation</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/xk/css/xk.css"/>
        <?php
            $name="jiangxingqi";
            $choice=1;
        ?>
    </head>
    <body>
        <div class="nav">
           
            <a class='right' href="../index.php">退出</a>
            <span class="right"><?php echo $name."同学,您好!"?></span>
           
           
            <a class='left <?php echo $choice==1 ? "current" : ""?>' href="course.php">浏览课程信息</a>
            <a class='left <?php echo $choice==2 ? "current" : ""?>' href="elective.php">选课</a>
            <a class='left <?php echo $choice==3 ? "current" : ""?>' href="score_view.php">查看成绩</a>
            
            <div style="clear:both"></div>
            
        </div>
    </body>
</html>
