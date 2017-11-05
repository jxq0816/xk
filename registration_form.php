<form class="style1" method="POST">
    <div class="outer">
        <div class="title">请注册</div>
        <div>
            <p>
                <label for="i1" class="label">用户名*</label>
                <input type="text" id="i1" name="user" maxlength="10" style="width: 130px" value=""/>
            </p>
            <p>
                <label for="i2" class="label">密码*&nbsp;&nbsp;</label>
                <input type="password" id="i2" name="pw" maxlength="12" style="width: 130px" value="<?php //echo $pw   ?>"/>
            </p>
            <p>
                <label for="i3" class="label">确认密码*&nbsp;&nbsp;</label>
                <input type="password" id="i3" name="pw2" maxlength="12" style="width: 130px" value="<?php //echo $pw   ?>"/>
            </p>
             <p>
                <span class="label">性　别</label>
          
                <input type="radio" id="i31" name="gender" value="男"/>
                <label for="i31"/>男</label>
                <input type="radio" id="i32" name="gender" value="女">
                <label for="i32">女</label>
            </p>
            <p>
                <label for="i5" class="label">出生日期</label>
                <input type="text" id="i5" name="birthday" maxlength="12" style="width: 130px" value="<?php //echo $pw   ?>"/>
            </p>
            <p>
                <label for="i6" class="label">Email*</label>
                <input type="text" id="i6" name="email" maxlength="12" style="width: 130px" value="<?php //echo $pw   ?>"/>
            </p>
            <p style="text-align: center;padding-top:10px">
                <input type="submit" class="big" name="submit" value="立即注册" />
            </p>
        </div>
    </div>
</form>


