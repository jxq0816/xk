<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>首页</title>
        <link rel="stylesheet" type="text/css" href="../css/xk.css?random=<?php rand()?>"/>
    </head>
    <body>
        <?php include("../header.php");?>
        <div class="center">
            <?php
               include("course_teacher.php");
            ?>
        </div>
    
        <?php include("../footer.php"); ?>
    </body>
</html>
