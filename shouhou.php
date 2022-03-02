<?php
session_start();
include_once "conn.php";

$b=$_SESSION['uid'];
$sql2 = "SELECT * FROM info where name = '$b'";

$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result2);//转成数组，且返回第一条数据,当不是一个对象时候退出

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta content="always" name="referrer"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>咨询及售后</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <script src="js/jquery1.min.js"></script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function()
        {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    <!-- start details -->
    <script src="js/slides.min.jquery.js"></script>

    <!-- start zoom -->

</head>
<body>

<header id="header">
    <nav class="navbar navbar-inverse" role="banner" style="background-color:white;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li ><a href="index.php">首页</a></li>
                    <li><a href="portfolio.php">保险超市</a></li>
                    <li><a href="shaixuan.php">产品筛选</a></li>
                    <li class="active"><a href="shouhou.php">咨询及售后</a></li>
                    <li><a href="222.php">个人中心</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->

<div style="background: url(images/beijing1.png) no-repeat ;background-size: cover">
    <div class="wrap">
        <div class="desc1 span_3_of_3">
            <h3 class="m_3">理赔说明</h3>
            <p class="m_text">
                您可通过快递方式发起理赔申请，理赔申请材料受理地点：<br>
                xxxxxxxxxxxxxxxxxxx<br>
                邮编：xxxxx<br>
                电话：xxxxxxxxx<br>
            </p>
            <h3 class="m_3">咨询方式</h3>
            <p class="m_text">
                QQ：xxxxx<br>
                电话：xxxxxxxxx<br>
            </p>
            <h3 class="m_3" ><a href="test.php" style="color: #1f1f20">保险资讯</a></h3>
            </p>
        </div>

        <form id="form1" class="form" action="shou.php" method="post">
            <div class='info' id='formHeader'><h2>售后服务</h2>
            </div>
            <ul id='fields' class='fields'>
                <li id='567ff3200cf2896cb19a8d68' class='' TYP='dropdown' def='0'>
                    <label class='desc'>产品类型</label>
                    <div class='content'>
                        <span class='dropdown-warp m'>
                            <select class='input fld ' name='F1_dropdown'>
                                <option selected='selected'></option>
                                <option value='医疗保险'>医疗保险</option>
                                <option value='意外保险'>意外保险</option>
                                <option value='养老保险'>养老保险</option>
                                <option value='车险'>车险</option>
                            </select>
                        </span>
                    </div>
                </li>
                <li id='567ff1ee0cf2896cb19a8cc8' class=' one' TYP='radio' def='0' >
                    <label class='desc'>售后类型</label>
                    <div class='content pretty-box' name="shout">
                        <span>
                            <input class='fld' id='r567ff1ee0cf2896cb19a8cc9' type='radio' name='F2_radio' value='保险理赔' checked='checked' />
                                <span class='itemtspan'>保险理赔</span>
                            <input class='fld' id='r567ff1ee0cf2896cb19a8cca' type='radio' name='F2_radio' value='退保' />
                                <span class='itemtspan'>退保</span>
                            <input class='fld' id='r567ff1ee0cf2896cb19a8ccb' type='radio' name='F2_radio' value='更改订单信息' />
                                <span class='itemtspan'>更改订单信息</span>

                    </div>
                </li>
                <label class='desc'>订单号</label>
                <li id='xx' class='content' >
                    <input type='text' fmt='mobile' class='phone input fld phone-input' name='Fyyy' required="required"/>
                </li>

                <li id='567ff1ee0cf2896cb19a8cce' class='' TYP='textarea'><label class='desc'>售后详细描述(保险情况)</label>
                    <div class='content'><textarea name='F3' class='input fld s' required="required"></textarea></div>
                </li>
                <label class='desc'>保险提交材料方式</label>
                <li id='567ff1ee0cf2896cb19a8ccf' class=' one' TYP='radio'>
                    <div class='content pretty-box'>
                        <input class='fld' id='r567ff1ee0cf2896cb19a8cd0' type='radio' name='F4_radio' value='上门取件' />
                        <span class='itemtspan'>上门取件</span>
                        <input class='fld' id='r567ff1ee0cf2896cb19a8cd1' type='radio' name='F4_radio' value='快递理赔' />
                        <span class='itemtspan'>快递理赔</span>
                        <input type='radio' class='fld other' id='r567ff1ee0cf2896cb19a8cc8' name='F4_radio' value='其它' />
                        <span class='itemtspan'>其它</span>
                        <input type='text' class='fld input m other' name='F4_radio'/></span>
                    </div>
                </li>
                <li>
                    <label class='desc'>投保人姓名</label>
                    <div class='content'>
                        <input type='text' maxLength='32' class='input fld s' name='F9' required="required" value="<?php if(empty($row2['tname'])){echo "";  }else{echo $row2['tname'];} ?>"/>
                    </div>
                </li>
                <li>
                    <label class='desc'>手机</label>
                    <div class='content'>
                        <input type='text' id= '444' maxLength='11' fmt='mobile' class='phone input fld phone-input' name='F10' required="required" value="<?php if(empty($row2['phone'])){echo "";  }else{echo $row2['phone'];} ?>"/>
                    </div>
                </li>
                <li>
                    <label class='desc'>身份证号</label>
                    <div class='content'>
                        <input id='333' type='text' maxLength='18' fmt='mobile' class='phone input fld phone-input' name='F11' required="required" value="<?php if(empty($row2['idc'])){echo "";  }else{echo $row2['idc'];} ?>"/>
                    </div>
                </li>
                <li>
                    <label class='desc'>家庭住址</label>
                    <div class='content'>
                        <input type='text' class='phone input fld phone-input' name='F12' required="required" value="<?php if(empty($row2['address'])){echo "";  }else{echo $row2['address'];} ?>"/>
                    </div>
                </li>
                <br>
               <li class='pc-submit'>
                    <input id='btnSubmit' type='submit' class='btn-submit'  value='提交' onclick="valide()">
                </li>
            </ul>
        </form>
    </div>
    <div class="container">
        <div class="accordion">
            <h2>专家咨询</h2>
            <div class="panel-group" id="accordion1">
                <div class="panel panel-default">
                    <div class="panel-heading active">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                专家1
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                        </h3>
                    </div>

                    <div id="collapseOne1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="media accordion-inner">
                                <div class="media-body">
                                    <h4>姓名：小陈</h4>
                                    <p>擅长医疗保险方面的投资理赔咨询</p>
                                    <p>qq：xxxxxxxx</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                专家2
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseTwo1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h4>姓名：小李</h4>
                            <p>擅长社会保险和养老保险的投资理赔，毕业后在天津财政税收科研所和天津会计事务所，从事了十年的财税科研和社会审计工作。</p>
                            <p>qq：xxxxxxxx</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                专家3
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseThree1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h4>姓名：小王</h4>
                            <p>擅长意外保险方面的投资理赔咨询，担任中国一家如虹公司经理</p>
                            <p>qq：xxxxxxxx</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                专家4
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                        </h3>
                    </div>
                    <div id="collapseFour1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h4>姓名：小蔡</h4>
                            <p>擅长医疗保险方面的投资理赔咨询，中国顶级金融资格认证-国家高级理财规划师CFHP证书持有人、 美国圆桌会议MDRT会员、国际品质大奖IQA会员、世界500强中国平安综合金融客户经理俱乐部会员、培训讲师。</p>
                            <p>qq：xxxxxxxx</p>
                        </div>
                    </div>
                </div>
            </div><!--/#accordion1-->
        </div>
    </div>
    <br>
</div>

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2021  一家如虹  王佳佳 陈彬如 李烨鸿 蔡君奕
            </div>
        </div>
    </div>
</footer><!--/#footer-->
<script type="text/javascript">

    function valide() {
        var num = document.getElementById('333');
        var phonec = document.getElementById('444');

        if (num.value.length != 18) {
            alert('输入正确的身份证号码');
            num.focus();
            return false;
        }
        if (phonec.value.length != 11) {
            alert('输入正确的手机号码');
            num.focus();
            return false;
        }

    }
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
