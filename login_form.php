<form class="style1" method="POST">
    <div class="outer">
        <div class="title">请登录</div>
        <div>
            <p>
                <label for="i1" class="label">用户名</label>
                <input type="text" id="i1" name="user" maxlength="10" style="width: 130px" value=""/>
                <span class="errMsg">
                </span>
            </p>
            <p>
                <label for="i2" class="label">密　码</label>
                <input type="password" id="i2" name="pw" maxlength="10" style="width: 130px" value="<?php //echo $pw   ?>"/>
                <span class="errMsg">
                </span>
            </p>
            
            <p>
               
                <input type="radio" id="i31" name="role" value="学生"/>
                    <label id="i3" for="i31"/>学生</label>
                    <input type="radio" id="i32" name="role" value="教师">
                    <label for="i32">教师</label>
              
            </p>
            
            <p style="text-align: center;padding-top:10px">
                <input type="submit" class="big" name="submit" value="确认" />
            </p>
        </div>
    </div>
</form>


