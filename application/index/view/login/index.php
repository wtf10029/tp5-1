{extend name="base" /}
{block name="center-content"}
<div class="" style="position: relative;background-color: #EBEBEB">
    <div class="" style="background-image: url(/static/home/img/back.jpg);position: relative;left: -300px;">

        <div class="" style="display: block;">
            <div id="" style="width: 100%; height: 460px;">
                <div style="float: right;width: 386px;height: 340px;background-color: #ffffff;position:relative;left: 220px;top: 60px">
                    <div>
                        <p style="font-size: 20px;font-weight:700;margin-top: 30px;margin-left: 80px">账号登录</p>
                        <div style="width: 300px;height:250px;margin-left: 40px;margin-top: 30px;">

                            <form class="layui-form" action="/index/login" method="post">
                                <div class="layui-form-item ">
                                    <input type="text" name="username"  autocomplete="off" placeholder="请输入用户名/手机号" class="layui-input ">
                                </div>

                                <div class="layui-form-item ">
                                    <input type="password" name="password"  autocomplete="off" placeholder="请输入密码" class="layui-input ">
                                </div>
                                <span style="float: right;"><a href="/index/register">没有账号？去注册</a></span>
                                <br>
                                <br>
                                <div class="layui-form-item">
                                    <button class="layui-btn layui-btn-big" style="background-color:#B4A078;width: 300px ">登陆</button>
                                </div>

                                </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
{/block}
d
