<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>联盟vip中心--<?php echo ($set["webname"]); ?></title>
        <meta name="keywords" content="<?php echo ($set["keywords"]); ?>"/>
        <meta name="description" content="<?php echo ($set["description"]); ?>"/>
        <link rel="stylesheet" type="text/css" href="__ROOT__/statics/home/css/style.css" />
        <script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script>
    </head>
    <body>
    <div id="header">
	<div class="head">
		<div class="logo fl">
			<h1><a href="http://<?php echo ($set["weburl"]); ?>" title="<?php echo ($set["webname"]); ?>"><img src="/upload/image/20141006/20141006180132_75618.png" alt="lougou.png"/></a></h1>
		</div>
		<div class="nav fl">
		  <ul>
		<li><a href="/">联盟首页</a></li>
	    <li><a href="<?php echo u('user/index');?>" >会员中心</a></li>
			<li><a href="/user_union.html" >联盟分销</a></li>
            <li><a href="/index_contact_id_15.html">了解互联网</a></li>
			<li><a href="<?php echo u('guestbook/show');?>" >VIP留言</a></li>
			<li><a href="<?php echo u('index/contact', array('id'=>1));?>" >关于我们</a></li>
			<li><a href="http://www.pinminwang.com"target="_blank">返回贫民网</a></li>
		  </ul>
		  <div class="clear"></div>
		</div>
		<div class="tel fr">
			<img src="/statics/home/images/telpic.png">
			<a href="/user_index.html" class="dlp"></a>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
    <div class="W usermain clear mt10">
        <div class="uleft fl">
            <div class="usernav">
                <dl>
                    ﻿<dt><span class="t">VIP中心</span></dt>
<dd><a href="<?php echo u('user/index');?>">会员首页</a></dd>

<dd><a href="/user_clist_cid_18.html">普通会员</a></dd>
<dd><a href="<?php echo u('user/vipindex', array('vip'=>2));?>">中级（VIP）</a></dd>
<dd><a href="<?php echo u('user/vipindex', array('vip'=>3));?>">高级（VIP）</a></dd>
<dd><a href="<?php echo u('user/rule');?>">VIP开通</a></dd>
<dd><a href="<?php echo u('user/account');?>">个人资料</a></dd>
<dd><a href="<?php echo u('user/pay');?>">账户充值</a></dd>
<dd><a href="<?php echo u('user/apply');?>">提取佣金</a></dd>
<dd><a href="<?php echo u('user/union');?>">VIP推广</a></dd>
<dd><a href="<?php echo u('user/tguser');?>">推广用户</a></dd>
<dd><a href="<?php echo u('user/pwd');?>">修改密码</a></dd>
<dd><a href="<?php echo u('user/out');?>">退出登录</a></dd>
                </dl>
            </div>
        </div>
        <div class="uright fr">
            <div class="userbox">
                <div class="tit">
                    <span class="t">基本信息</span>
                </div>
                <div class="con userinfo">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="face" rowspan="2">
                                <?php if($user_info['face'] == ''): ?><img src="__ROOT__/statics/home/images/noavatar_middle.gif"  width="100"  height="100" />
                                <?php else: ?>
                                <img src="<?php echo ($user_info["face"]); ?>"  width="100"  height="100" /><?php endif; ?>
                                <br/>
								<a href="<?php echo u('user/face');?>">修改头像</a>
                            </td>
                            <td class="uname" colspan="3">
                        <dd style="color:#990000;font-size:14px;">您好，<b><?php if($user_info['realname'] != ''): echo ($user_info["realname"]); else: echo (session('username')); endif; ?></b>&nbsp;&nbsp;欢迎您回来！ &nbsp;&nbsp;</dd>
                        </td>
                        </tr>
                        <tr>
                            <td class="info" width="200px">
                        <dd style="font-size:14px;">会员等级：<font color="#990000"><?php if($user_info['vip'] == 1): ?>普通（vip）
                                    <?php elseif($user_info['vip'] == 2): ?>推广（VIP）
                                            <?php else: ?> 联盟（VIP）<?php endif; ?></font></dd>
                        <dd>可提现金额：<span class="money"><?php echo ($user_info["money"]); ?>元</span></dd>
                        </td>
                        <td class="info" width="200px">
                        <dd>账户余额：<span class="money"><?php echo ($user_info["money"]); ?>元</span></dd><dd>推荐的用户：<span class="money"><a href="<?php echo u('user/union');?>"><?php echo ($count); ?></a></span></dd>

                        </td>
                        <td class="info" width="200px">

           <dd>注册时间：<?php echo (date('Y-m-d H:i:s',$user_info["regtime"])); ?></dd>
                        <dd>推广IP：<?php echo ($ipcount); ?></dd>
                        </td>
                        <td></td>
                        </tr>
                    </table>
					<?php if($set["noticestr"] != ''): ?><div class="notice" style="padding:5px 0;margin-top:5px; font-size:14px; color:#FF0000; font-weight:bold;"><?php echo ($set["noticestr"]); ?></div><?php endif; ?>
                    <div class="notice" style="padding:5px 0;margin-top:3px;"><font color=red>上贫民网，寻找你的一切     最新动态（活动内容）</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/index_contact_id_4.html" target="_blank" style="color:#0000FF;"> </a></div>
                    <div class="myarticle clear mt10">
                        <dl>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><dd><span class="pubdate">(<?php echo ($val["add_time"]); ?>)</span><b>最新动态（活动内容）</b> <a href="<?php echo u('user/show', array('id'=>$val['id']));?>"><?php echo ($val["title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>   
                            
                        </dl>

                    </div>
                    <div class="pageno"><?php echo ($page); ?>  </div>
                </div>

            </div>
        </div>
    </div>
<!--script language="javascript">
var exitsplashmessage = '不要错过机会哦。" to see this now!\n\n***************************************';
var exitsplashpage = 'http://wischina.cn/?affid=9605';
</script-->
<script language="javascript" src="http://gsniper2.com/exitsplash.php?tc=3399cc&uh=none&ad=none&sh=no&hv=no&bh=22&fs=12&lf=Arial&at="></script> 
  
    ﻿<div class="foot_linksbg">
<div class="foot_links">
<div class="links">
<h3>PinMin</h3>
<div class="links_con">
<a href="#" target="_blank" title="贫民网站加盟">贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="贫民网站加盟">贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="南京贫民网站加盟">贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="长沙贫民网站加盟">长沙贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="邯郸贫民网站加盟">邯郸贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="长春贫民网站加盟">长春贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="深圳贫民网站加盟">深圳贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="成都贫民网站加盟">成都贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="上海贫民网站加盟">上海贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="贫民网站加盟">贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="深圳贫民网站加盟">深圳贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="北京贫民网站加盟">北京贫民网站加盟</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" target="_blank" title="微博推广">微博推广</a>
</div>
</div>
<div class="keyword">
<h3>HeZuo</h3>
<div class="links_con">
<a href="http://bbs.pinminwang.com" target="_blank"">贫民社区村</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="http://bbs.pinminwang.com/plugin.php?id=ssyyyshiting_dzx:music&mode=music" target="_blank"">贫民音乐插件</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="http://bbs.pinminwang.com" target="_blank"">贫民搜吧</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="http://www.pinminwang.com" target="_blank"">贫民信息网</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="http://bbs.pinminwang.com/misc.php?mod=mobile" target="_blank"">社区手机版</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="http://bbs.pinminwang.com/plugin.php?id=hadsky_jmail:hadsky_jmail" target="_blank"">在线群发</a>&nbsp;&nbsp;|&nbsp;&nbsp;
</div>
</div>
<div class="address">
<p><a href="www.pinminwang.com" title="">贫民网团队</a></p>
<p>办公室：北环花园路魏河花园</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;河南省郑州市北环花园路刘庄魏河花园1号楼3单元1121室</p>
</div>
<div class="link_btn">
<ul >
<li><a href="http://shang.qq.com/open_webaio.html?sigt=a14b63050c08f43b9e0bda70c4069347c5e2d9de595a3f117ae7696bced7f5ab098f805e0ddb2238a1149567bdb17b12&sigu=5da7b35e3b819ac9df27b7a14453a060087a3927eed65b9f8e0cccdaaca2542fa7639cf1adab9c4b&tuin=11192139" target="_blank"title="" class="link_qq"></a></li>
<li><a href="#" title="" class="link_sina"></a></li>
<li class="link_weixin_li"><a href="http://98.pinminwang.com" title="" class="link_weixin"></a>
<div class="link_weixin_ewm">
<img src="template/kym_myshow/style/images/ewm.jpg" width="129" height="129" alt="">
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="foot clear">
	<div class="copyright">
		<p>
		Copyright © 2014 <?php echo ($set["weburl"]); ?> 版权所有 <?php echo ($set["icp"]); ?>
 QQ：<?php echo ($set["qq"]); ?> E-mail：<?php echo ($set["email"]); ?> 地址：<?php echo ($set["address"]); ?>
工作时间 周一/周日 早上9点/晚11点
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256541302'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1256541302%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=4&amp;fs=4&amp;bgcolor=Green"></script>
            
		</p>
	</div>
</div>
<script language="javascript">
function tixian(id){
	var vip = <?php echo $user_info['vip'];?>;
	if(vip==1){alert("请升级VIP会员后再通知管理员提现！");return;}
    $.get("<?php echo u('user/tixian');?>", { id: id}, function(jsondata){
		alert('已经通知管理员，请等待管理员处理!');
	}); 
}
</script>
</body>
</html>