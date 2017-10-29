<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:65:"F:\www\thinkphp\public/../application/index\view\myorder\read.php";i:1506497600;s:57:"F:\www\thinkphp\public/../application/index\view\base.php";i:1507906367;}*/ ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico?r=gold" type="image/x-icon" />
    <meta property="qc:admins" content="365774662561636375" />
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/style/css/style-12909ab9ae.css" type="text/css" />
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/dist/index-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/style/css/page/index-6e488077c1.css">
    <link rel="stylesheet" type="text/css" href="/static/home/yanxuan.nosdn.127.nethxm/yanxuan-component/p/20170601/js/dist/yxComponent.all.min.css-v=1505963072142.css" >
    <!--[if lt IE 9]>
    <script src="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/ie-23e126e677.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="1;url=error/lowVersionBrowser.htm" tppabs="http://you.163.com/error/lowVersionBrowser" />
    <script>top.window.location.href='error/lowVersionBrowser.htm'/*tpa=http://you.163.com/error/lowVersionBrowser*/;</script>
    <![endif]-->
    <script src="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/vender-c1479496a3.js"></script>


<!--    列表页、内容页、购物车引入文件-->
    <link rel="stylesheet" href="/static/home/css/index-0f4fca60a4.page.css">
    <link rel="stylesheet" href="/static/home/css/list-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/list-0239afde78.css">
    <link rel="stylesheet" href="/static/home/css/list-10a91bd2e4.css">
<!--    <link rel="stylesheet" type="text/css" href="/static/home/css/yxComponent.all.min.css">-->
    <link rel="stylesheet" href="/static/home/css/cart-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/cart-7dce11bf5a.css">
    <link rel="stylesheet" href="/static/home/css/index-b49af0d5e0.page.css">
<!--列表页、内容页、购物车、引入文件结束-->

    <script src="/static/home/js/jquery.js"></script>
    <script src="/static/home/js/vue.js"></script>

    <link rel="stylesheet" href="/static/home/css/layer.css">
    <script src="/static/home/js/layer.js"></script>

    <link rel="stylesheet" href="/static/home/layui/css/layui.css">
    <script src="/static/home/layui/layui.js"></script>

<!--    选择付款方式-->
    <link rel="stylesheet" href="/static/home/css/toPay-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/toPay-7cbe21654f.css">
    <link rel="stylesheet" type="text/css" href="/static/home/css/yxComponent.all.min.css">
</head>
<body>
<!-- 头部 -->
<header class="g-hd" id="gTopbar">
    <div id="j-siteNav" class="m-siteNav">
        <div class="g-row">
            <a class="declare" href="javascript:;">生活的品质，源于您的选择</a>

            <div class="right">
<!--                判断用户是否登陆-->
                <?php if(session('user')): ?>
                    <div id="loginInfoWrap" style="float: left">
                        <div class="js-userCenter userCenter w-dropdown w-dropdown-text">
                            <a href="javascript:;" class="js-userCenterToggle toggle" data-jq-dropdown="#js-userCenterDropdown1">
                                <span class="text j-nickname"><?php echo session('user.username'); ?></span>
                                <i class="w-icon-arrow arrow-up-hollow"></i>
                            </a>
                            <div id="js-userCenterDropdown1" class="jq-dropdown jq-dropdown-relative jq-dropdown-anchor-right" style="display: none; left: -7px; top: 36px;">
                                <nav class="jq-dropdown-menu dropdownMenu">
                                    <a class="item couponLink" href="/myorder">我的订单</a>
                                    <a class="item" href="/index/login/logout">退出登录</a>
                                </nav>
                            </div>
                        </div>
                    </div>

                <?php else: ?>


<!--                    如果没有登陆就显示登陆注册-->
                <a class="login j-topLogin" href="/index/login" title="登录">登录</a>
                    <div class="split"></div>
                <a class="register j-topRegister" href="/index/register">注册</a>
                <?php endif ?>


<!--                <a class="attitude" href="/myorder">我的订单</a>-->
<!--                <div class="split"></div>-->

            </div>
        </div>
    </div>
    <div id="js-funcTabWrap">
        <div id="js-funcTab" class="m-funcTab">
            <div class="g-row">
<!--                <a class="tab-logo" href="/" title="" target="_top"></a>-->
            <a class="tab-logo" style="position: absolute;top: 50px;left: 455px;z-index: 2;background: url(/static/home/image/title.jpg) center;"></a>
               <!--  <a class="tab-logo-fixed" href="/" title="" target="_top"></a> -->
                <div class="tab-inner">
                    <div class="m-search">
<!--                        我的购物车-->
                        <a class="w-button-cart j-button-cart" href="/mycart/lists">
                            <i class="w-icon-cart cart-blackcart"></i>

                        </a>
                        <span id="span-cart-number"></span>
<!--                        搜索-->
                        <div class="m-searchInput" id="j-search">
                            <div class="w-button-search j-searchButton">
                                <i class="layui-icon header-search" style="color: #B1A074;font-size: 24px">&#xe615;</i>
                            </div>
                            <div class="j-showDefaultWord showDefaultWord">
                                中秋礼物买一送一
                            </div>
                            <input type="text" maxlength="100" class="w-searchInput j-searchInput" value="">
                            <div class="m-ppnl f-hide j-searchSuggest">
                                <div class="j-ssContent"></div>
                            </div>
                        </div>
                        <script>
                            $(function () {
                                var a = $('.w-searchInput').val();
                                if(a){
                                    $('.j-showDefaultWord').hide();
                                }
                                $("input.w-searchInput").focus(function(){
                                    $('.j-showDefaultWord').hide();
                                });

                                $('.layui-icon.header-search').click(function () {
//                                    alert(a);
                                    var a = $('.w-searchInput').val();
//                                    alert(a);
                                    if(a){
                                        location.href = '/lis/'+a;
                                    }
                                })
                            })
                       </script>

                    </div>
<!--                    导航-->
                    <ul class="tab-nav">
                        <?php
//                        p(request()->path());
                        if(substr(request()->path(),0,5)=='lists'){
                            $aum = ltrim(strrchr(request()->path(),'/'),'/');
                        }else{
                            $aum = '';
                        }
                        if(substr(request()->path(),0,7)=='content'){
                            $act = ltrim(strrchr(request()->path(),'/'),'/');
                            foreach($goo as $go){
                                if($go['id']==$act){
                                    $cid = $go['category_id'];
                                }
                            }
                        }else{
                            $cid = '';
                        }

                        ?>
                        <li class='nav-item first <?php if(!$aum && !$cid){?>active<?php } ?>'>
                            <a class="topLevel" title="首页" href="/">首页</a>
                        </li>

                        <?php foreach($category as $v):?>
                            <li class='j-nav-item nav-item <?php if($aum==$v['id'] || $v['id']==$cid){?>active<?php } ?>'>
                                <a class="topLevel" title="<?php echo $v['name']; ?>" href="/lists/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                    <script>
                        $(function () {
                            $('.j-nav-item').click(function () {
                                $(this).addClass('active');
                                $(this).siblings('li').removeClass('active');
                            })
                        })
                    </script>
                    <a class="w-cart j-cart" href="/mycart/lists">
                        <i class="w-icon-cart cart-blackcart"></i>
                        <i class="w-icon-normal icon-normal-badge j-cart-num j-cart-num2">0</i>
                    </a>
                    <div class="j-mini-cart m-mini-cart j-newMiniCart">
                        <div id="newMiniCart"></div>
                    </div>
                </div>
                <div class="notLogin">
                    <a class="login j-topLogin" href="/index/login" title="登录">登录</a>
                    <a class="register j-topRegister" href="">注册</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>

<!--中间部分-->


<div class="g-bd">
    <div class="g-row">
        <div class="g-sub">
            <div class="m-userinfo">
                <div class="w-avatar" id="j-sideAvatarWarp">
                    <img src="//yanxuan.nosdn.127.net/c3a03895c73694d922310c76e4915cdb.png?imageView&amp;quality=95"
                         alt="头像" width="100px" height="100px" id="j-sideAvatar">
                    <div class="modifyAvatar w-icon-normal icon-normal-camera"></div>
                    <div class="mask"></div>
                </div>
                <div class="w-nickname" title="<?php echo session('user.username') ?>"
                     id="j-sideNickname"><?php echo session('user.username') ?></div>
                <a class="w-levelname" href="#" target="_blank">
                    <div id="j-identityIcons"></div>
                    <span class="w-icon-member member-top-vip0" title="普通用户"></span>
                    <span class="levelname level-0">普通用户</span>
                </a>

            </div>
            <script>
                var membershipOn = false;
                membershipOn = true;
            </script>
            <div class="m-menu">
                <a href="/myorder" class="w-menu-item active ">订单管理</a>
                <!--                <a href="#" class="w-menu-item " target="_blank">地址管理</a>-->
            </div>
        </div>
        <div class="g-main">
            <div id="j-orderListContainer">
                <div class="m-orderList" data-reactid=".0">
                    <div class="m-filter" data-reactid=".0.0">
                        <ul id="j-orderFilter" class="w-tabs">
                            <li class="j-tabsItem item">
                                <a href="/myorder">全部订单</a>
                            </li>
                            <li class="j-tabsItem item active">
                                <a href="javascript:;">订单详情</a>
                            </li>
                            <!--                            <li class="j-tabsItem item">-->
                            <!--                                <a href="javascript:;">待付款&nbsp;-->
                            <!--                                    <span class="orderItemNum"></span>-->
                            <!--                                </a>-->
                            <!--                            </li>-->

                        </ul>

                    </div>
                    <span></span>
                    <div class="m-panels">
                        <div class="m-panel" id="j-allOrderPanel" style="display: block;">
                            <div>
                                <?php foreach ($lists as $k=>$v): ?>
                                    <table class="m-orderItem" cellpadding="0">
                                        <colgroup>
                                            <col class="w1">
                                            <col class="w2">
                                            <col class="w3">
                                        </colgroup>
                                        <tbody>
                                        <tr class="head">
                                            <th colspan="3">
                                            <span class="dealtime">
                                                <span>商品：</span>
                                                <span><?php echo $k+1; ?></span>
                                            </span>
                                                <span class="number">
                                                <span>名称：</span>
                                                <span><?php echo $goods[$v['id']][0]['name']; ?></span>
                                            </span>
                                            </th>
                                        </tr>
                                        <tr class="body">
                                            <td>
                                                <div>
                                                    <span></span>
                                                    <div class="packageItem">
                                                        <div class="good">
                                                            <a class="link" href="/content/<?php echo $goods[$v['id']][0]['id']; ?>"
                                                               target="_blank">
                                                                <img src="<?php echo $goods[$v['id']][0]['list_image']; ?>"
                                                                     width="100px"
                                                                     height="100px">
                                                            </a>

                                                            <div class="info">

                                                                <a class="f-fz14"
                                                                   href="/content/<?php echo $goods[$v['id']][0]['id']; ?>"
                                                                   target="_blank" title="">
                                                                    <?php echo $v['goods_attr']; ?>
                                                                </a>

                                                            </div>


                                                        </div>
                                                        <div class="express">
                                                            <div class="cell">
                                                                <div class="f-txt-assist">
                                                                    <span>数量</span>
                                                                    <span><?php echo $v['number']; ?></span>
                                                                </div>
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                        <div class="status">
                                                            <div class="cell">
                                                                <div class="w-link w-rebuyBtn">备注</div>
                                                                <span><?php echo $v['remark']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cost">

                                                    <p class="price">
                                                        <span>¥</span>
                                                        <span><?php echo $v['subtotal']; ?></span>
                                                    </p>
                                                    <p class="fee">
                                                        <span>小计</span>
                                                    </p>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="f-txtcenter">
                                                    <span></span>
                                                    <a class="w-link" href="/content/<?php echo $goods[$v['id']][0]['id']; ?>">查看商品</a>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                <?php endforeach; ?>
                                <div class="m-pager j-pager"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!--中间部分结束-->




<footer class="g-fttta">
    <div class="m-ft2">
        <div class="g-row">
            <ul class="m-siteEnsure">
                <li class="item">
                    <div class="inner"><i class="icon w-icon-foot foot-ft1"></i><p class="text">品质保证</p></div>
                </li>
                <li class="item">
                    <div class="inner"><i class="icon w-icon-foot foot-ft2"></i><p class="text">赠送运费险</p></div>
                </li>
                <li class="item">
                    <div class="inner"><i class="layui-icon" style="position:relative;right: 155px;top:3px;font-size: 60px; color: #ffffff;">&#xe610;</i><p class="text">无忧退换货</p></div>
                </li>
            </ul>
            <hr>
            <div class="m-siteInfo">
                <nav class="nav">
                    <a class="text" href="/">首页</a>
                    <?php foreach ($category as $c):?>
                    <b class="split">|</b>
                    <a class="text" href="/lists/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a>
                    <?php endforeach;?>
                </nav>
                <p class="copyright">
                  Shop by Sun  © 1997-2017 &nbsp; 陇ICP备15000343号-1
                </p>

            </div>
        </div>
    </div>
</footer>

</body>
</html>
