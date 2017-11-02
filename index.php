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
        <link rel="stylesheet" type="text/css" href="/xk/css/xk.css"/>
    </head>
    <body>
        <?php include("header_admin.php");?>
        <form class="style1" method="POST">
            <div class="outer">
                <div class="title">管理员登录</div>
                <div>
                    <p>
                        <label for="i1" class="label">用户名</label>
                        <input type="text" id="i1" name="user" maxlength="4" style="width: 60px" value="<?php // echo $user ?>"/>
                        <span class="errMsg">
                            <?php 
                                //echo $userErr 
                            ?>
                        </span>
                    </p>
                    <p>
                        <label for="i2" class="label">密码</label>
                        <input type="password" id="i2" name="pw" maxlength="12" style="width: 130px" value="<?php //echo $pw ?>"/>
                        <span class="errMsg">
                            <?php 
                                //echo $pwErr 
                            ?>
                        </span>
                    </p>
                    <p style="text-align: center;padding-top:10px">
                        <input type="submit" class="big" name="submit" value="确认" />
                    </p>
                </div>
            </div>
        </form>
        <div style="width: 90%;min-height: 150px;margin: 0 auto;padding: 5px;">
            <?php
                echo "管理员登录表单";
            ?>
        </div>
    
        <?php
        include("footer_admin.php");
       ?>
    </body>
</html>
