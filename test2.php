<?php
session_start();
include_once "conn.php";
$a=$_GET['act'];

$sql = "SELECT * FROM insurance where name = '$a'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);//转成数组，且返回第一条数据,当不是一个对象时候退出
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$_SESSION['price']=$row['price'];

$b=$_SESSION['uid'];
$sql2 = "SELECT * FROM info where name = '$b'";

$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result2);//转成数组，且返回第一条数据,当不是一个对象时候退出

$sql3 = "UPDATE insurance set heat=heat+1 where name = '$a'";
$result3 = mysqli_query($conn,$sql3);

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>保险产品界面</title>
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
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function()
        {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    <!-- start details -->
    <script src="js/slides.min.jquery.js"></script>

    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!--日历-->

</head>
<body >
<header id="header">
    <nav class="navbar navbar-inverse" role="banner" style="background-color:white;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">首页</a></li>
                    <li><a href="portfolio.php">保险超市</a></li>
                    <li><a href="shaixuan.php">产品筛选</a></li>
                    <li><a href="shouhou.php">咨询及售后</a></li>
                    <li><a href="222.php">个人中心</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4 class="modal-title" align="center" id ="d1"><?php echo $row['name']; echo '订单'; ?></h4>
                <br/>
                <h5 class="modal-title" align="center" id="ss">请重新选择年份</h5>
                <br/>
                <form class="form-horizontal" role="form" action="ding.php" method="post">
                    <div style="display: none">
                        <input id="flag2" name= 'flag' value="0" >
                    </div>
                    <div style="display: none">
                        <input id="year2" name= 'year2' value="2" >
                    </div>
                    <div style="display: none">
                        <input id="jia" name= 'price' value="1" >
                    </div>
                    <div style="display: none">
                        <input id="pdn" name= 'pdn' value="1" >
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-offset-2 col-sm-2 control-label">姓名</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" placeholder="请输您的姓名"  required="required" value="<?php if(empty($row2['tname'])){echo "";  }else{echo $row2['tname'];} ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-offset-2 col-sm-2 control-label"  >手机号码</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="phonecc" name="phone" placeholder="请输您的手机号码" oninput = "value=value.replace(/[^\d]/g,'')" maxlength="11" required="required" value="<?php if(empty($row2['phone'])){echo "";  }else{echo $row2['phone'];} ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-offset-2 col-sm-2 control-label"  >身份证号</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="idcc" name="idc" placeholder="平台保障不会泄露您的个人信息" oninput = "value=value.replace(/[^\d]/g,'')" maxlength="18" required="required" value="<?php if(empty($row2['idc'])){echo "";  }else{echo $row2['idc'];} ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-offset-2 col-sm-2 control-label">地址</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="address" placeholder="请输您的地址"  required="required" value="<?php if(empty($row2['address'])){echo "";  }else{echo $row2['address'];} ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-5">
                            <button id="submitBtn" type="submit" class="btn btn-default btn-block btn-primary" onclick="valide()">确认购买</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
        <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    $(function(){

        $(".tbox").click(function(){
            $('#myModal').modal('show') //显示模态框
        })

    });
</script>

<div class="mens">
    <div class="main">
        <div class="wrap">
            <div class="grid images_3_of_2">
                <div id="container">
                    <div id="products_example">
                        <?php
                            $a=(string)$row['id'];
                            echo "<img src='images/"."$a".".jpg'/>";
                        ?>

                    </div>
                </div>
            </div>
            <div class="desc1 span_3_of_2">
                <h1 id='pdnn' style="color: #1f1f20">
                    <?php echo  $row['name']; ?>
                </h1>
                <br>
                <p class="m_5" id="jiage"><?php echo $row['price']; echo '元起'; ?>         <a href="shouhou.php">点击询问详情</a></p>
                <input type="number" id="cc"  name= 'year' onBlur="if (parseInt(this.value)<=0) alert('不是正整数');" onchange="change()"
                       onkeyup="carNum($(this))" required="required"><span>年</span>
                <div class="btn_form">
                    <a class="tbox"><input type="button" value="立即购买" title=""></a>
                    <?php
                    include_once "conn.php";
                    $nam = $_GET['act'];
                    $name2=$_SESSION['uid'];

                    $sql = "SELECT * FROM wish where pdname = '$nam' and name='$name2'";
                    $result = mysqli_query($conn,$sql);
                    $num = mysqli_num_rows($result);

                    if($num<1)
                    {
                        $state="收藏";
                    }
                    else $state="取消收藏";

                    echo "<a href='sc.php?ac=$nam&st=$state'><input id= 'myinput' type='button' style=' text-align:center ' value='$state' onclick='change2()' /></a>";
                    ?>

                </div>
                <p class="m_text2">
                <h3>产品理赔</h3>
                <li><?php echo $row['situ'] ?></li>
                <h3>保险范围</h3>
                <li>保险类型：<?php echo $row['type'] ?></li>
                <li>承保年龄：<?php echo $row['age'] ?></li>
                <li>销售区域：<?php echo $row['area'] ?></li>
                </p>
            </div>
            <div class="clear"></div>
            <div class="toogle">
                <h3 class="m_3">理赔方式</h3>
                <p class="m_text">
                    您可通过快递方式发起理赔申请，理赔申请材料受理地点：<br>
                    xxxxxxxxxxxxxxxxxxx<br>
                    邮编：xxxxx<br>
                    电话：xxxxxxxxx<br>

                </p>
            </div>
            <div class="toogle">
                <h3 class="m_3">投保说明</h3>
                <p class="m_text">XXXXXXXXXXXXXX</p>
            </div>
        </div>
    </div>

</div>


<section id="content">
    <div class="container">
        <div class="row">
            <div class="tab-wrap">
                <div class="media">
                    <div class="parrent pull-left">
                        <ul class="nav nav-tabs nav-stacked">
                            <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">保险责任</a></li>
                            <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">有效保险金额</a></li>
                            <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">保险法相关</a></li>
                            <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">常见问题</a></li>
                            <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">更多详情</a></li>
                        </ul>
                    </div>

                    <div class="parrent media-body">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="tab1">
                                <div class="media">

                                    <div class="media-body">
                                        <h2>保险责任</h2>
                                        被保险人未满18周岁的，按以下两项中金额较大者给付身故保险金或全残保险金，合同终止:
                                        <li>身故或全残时，按合同约定已支付的保险费;</li>
                                        <li>身故或全残时，保险单的现金价值。</li>
                                        被保险人年满18周岁的，按以下三项中金额较大者给付身故保险金或全残保险金，合同终止:
                                        <li>身故或确定全残时，按合同约定已支付的保险费×约定给付的比例(61周岁前，160%;61周岁（含)后，120%)</li>
                                        <li>身故或确定全残时，保险单的现金价值</li>
                                        <li>身故或确定全残时，有效保险金额。</li>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade active in" id="tab2">
                                <div class="media">
                                    <div class="media-body">
                                        <h2>有效保险金额</h2>
                                        <p>有效保险金额:投保时的有效保险金额等于基本保险金额。每满1个保单年度，有效保险金额按约定的额度增加一次，增加额度为前一个保险年度有效保险金额的3%。
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab3">
                                <h2>保险法</h2>
                                <p><li>《保险法》第二十三条:任何单位和个人不得非法干预保险人履行赔偿或者给付保险金的义务，也不得限制被保险人或者受益人取得保险金的权利。</li>
                                <li>《保险法》第九十二条:经营有人寿保险业务的保险公司被依法撤
                                    销或者被依法宣告破产的......由国务院保险监督管理机构指定经营有人寿保险业务的保险公司接受转让，转让或者由国务院保险监督管理机构指定接受转让前款规定的人寿保险合同及责任准备金的应
                                    当维护被保险人、受益人的合法权益。
                                </li>
                                <li>《中华人民共和国税法》第四条第五款规定:保险赔款免纳个人所得税。</li>
                                <li>《保险法》第八十九条:经营有人寿保险业务的保险公司，除因分立、合并或者被依法撤销外，不得解散。</li>
                                </p>
                            </div>

                            <div class="tab-pane fade" id="tab4">
                                <p>
                                <li>Q: 我投保后保单何时生效？</li>
                                <li>A: 如您在投保时指定生效日期，则自您指定之日零时起开始承担保险责任。如您在购买保险时未指定生效日期，则自您成功购买保险的次日零时开始生效，自生效日零时起开始承担保险责任。
                                </li>
                                <li>Q: 哪些医院可以报销意外医疗费用？</li>
                                <li>A: 根据合同规定，在中国境内二级以上（含二级）公立医院的普通部进行诊疗的，我司对于被保险人发生的合理且必要的医疗费用给予报销。
                                </li>
                                <li>Q: 哪些运动项目属于保障范围</li>
                                <li>A: 我司将根据您投保时自主选择的运动项目，承担该运动项目过程中的保险责任。您可以选择一种或多种运动项目，投保成功后，您可在保险单特别约定栏查询相关可保运动项目。
                                </li>
                                <li>Q: 运动意外医疗保险金可多次赔付吗？</li>
                                <li>A: 可以，在本保险保障期限内，运动意外医疗保险金可以多次赔付，累计赔付金额以运动意外医疗保险金为限。
                                </li>
                                <li>Q: 购买这个产品能否提供发票</li>
                                <li>A: 可以拨打保险服务热线10108686索取发票</li></p>
                            </div>

                            <div class="tab-pane fade" id="tab5">
                                <p></p>
                            </div>
                        </div> <!--/.tab-content-->
                    </div> <!--/.media-body-->
                </div> <!--/.media-->
            </div><!--/.tab-wrap-->

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#content-->


<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            &copy; 2021  一家如虹  王佳佳 陈彬如 李烨鸿 蔡君奕
        </div>
    </div>
</footer><!--/#footer-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">


    flag=1;
    numList=0;
    function valide() {
        var num = document.getElementById('idcc');
        var phonec = document.getElementById('phonecc');
        if(document.getElementById('ss').textContent=="请重新选择年份" ||document.getElementById('ss').textContent=="订单价格为0元")
        {
            alert('请重新选择年份');
            flag2.value=0;
            return false;
        }
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
        flag2.value=1;

    }
    function change() {

        if(flag) {
            var year = document.getElementById("jiage").innerHTML;
            var reg = /[1-9][0-9]*/g;
            numList = year.match(reg);
            flag = 0;
        }
        a=cc.value*numList;

        if(a<=0)
        {
            a=0;
            document.getElementById("cc").textContent=toString(0);
        }
        document.getElementById("pdn").value= document.getElementById("pdnn").textContent;
        document.getElementById("jiage").textContent = a.toString() + "元";
        document.getElementById("ss").textContent="订单价格为"+a.toString()+"元";
        document.getElementById("year2").value = cc.value;
        document.getElementById("jia").value = a.toString();
    }

</script>
</body>
</html>
