<!DOCTYPE html>
<html>
    <head>
        <title>navigation</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/xk/css/xk.css"/>
        <?php
        $isLogin = false;
        $lb = "同学";
        $name = "jiangxingqi";
        $choice = 1;
        ?>
    </head>
    <body>

        <?php
        if ($isLogin == false) {
            ?>
            <div class="nav">
                <a class='right <?php echo $choice == 2 ? "current" : "" ?>' href="registration.php">注册</a>
                <a class='right <?php echo $choice == 1 ? "current" : "" ?>' href="login.php">登录</a>
            </div>
            <div style="clear:both"></div>
            <?php
                include("welcome.php");
        } else {
            ?>
            <div class="nav">
                <a class='right' href="logoff.php">退出登录</a>
                <a class='right' href="enter.php">进入系统</a>
                <span class="right"><?php echo $name . $lb . ",您好" ?></span>
                <a class='left <?php echo $choice == 1 ? "current" : "" ?>' href="teacher_p.php">浏览课程信息</a>
                <a class='left <?php echo $choice == 2 ? "current" : "" ?>' href="course_p.php">选课</a>
                <a class='left <?php echo $choice == 3 ? "current" : "" ?>' href="opencourse_p.php">查看成绩</a>
            </div>
             <div style="clear:both"></div>
            <?php
        }
        ?>
       
    </body>
</html>
