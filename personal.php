<?php
session_start();
if(empty($_SESSION['uid'])){
    echo "<script>location.href='222.php';</script>";
}
include_once "conn.php";
$a=$_SESSION['uid'];
$sql = "SELECT * FROM info where name = '$a'";

//$sql = "insert into insurance (name,price,situ,type) values('$name','$price','$situ','$type')";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);//转成数组，且返回第一条数据,当不是一个对象时候退出
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta content="always" name="referrer" charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人主界面界面</title>

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
    <script src="js/jquery1.min.js"></script>
    <script src="echarts/dist/echarts.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.2.2/dist/echarts.min.js"></script>
    <!-- start menu -->

    <!-- CSS
    ============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

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
                    <li><a href="index.php">首页</a></li>
                    <li><a href="portfolio.php">保险超市</a></li>
                    <li><a href="shaixuan.php">产品筛选</a></li>
                    <li><a href="shouhou.php">咨询及售后</a></li>
                    <li class="active"><a href="222.php">个人中心</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->


<section id="content">
    <div class="container">
        <div class="row">
            <div class="tab-wrap">
                <div class="media">
                    <div class="parrent pull-left">
                        <ul class="nav nav-tabs nav-stacked">
                            <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">公告栏</a></li>
                            <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">订单</a></li>
                            <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">收藏夹</a></li>
                            <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">用户设置</a></li>
                            <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">默认地址设置</a></li>
                        </ul>
                    </div>

                    <div class="parrent media-body">
                        <div class="tab-content">
                            <div class="tab-pane fade" id="tab1">
                                <div class="media">
                                    <div class="media-body">
                                        <h2>公告栏</h2>

                                        <div class="welcome mb-20">
                                            <p>你好, <strong><?php echo $_SESSION['uid'] ?></strong> (<a href="logout.php" class="logout" >退出登录</a>)</p>
                                        </div>

                                        <p class="mb-0">个人中心可以查看你的历史订单和支付手段和地址信息，如有通知，会在此处告知</p>
                                        <p class="mb-0"><?php if(empty($row['boast'])){echo "";  }else{echo $row['boast'];} ?></p>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade active in" id="tab2">
                                <div class="media">
                                    <div class="media-body">
                                        <h2>历史订单</h2>
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>订单编号</th>
                                                <th>产品名称</th>
                                                <th>付款时间</th>
                                                <th>年份</th>
                                                <th>总计金额</th>
                                                <th>查看详情页</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                            include_once "conn.php";
                                            $names=$_SESSION['uid'];

                                            $sql = "select * from orders where username='$names'";

                                            $result = mysqli_query($conn,$sql);
                                            $dataCount = mysqli_num_rows($result);//返回指定数据库表中数据的行数

                                            for ($i = 0; $i < $dataCount; $i++) {
                                                $result_arr = mysqli_fetch_assoc($result);//返回表中每条数据的具体内容
                                                $id=$result_arr['id'];
                                                $name = $result_arr['name'];
                                                $time=$result_arr['time'];
                                                $year=$result_arr['year'];
                                                $price=$result_arr['price'];
                                                $pdn = $result_arr['pdn'];
                                                $ur="test2.php?act=$pdn";
                                                $shnchu="shanchu.php?e=$id";
                                                echo "<tr>"?>
                                                <?php echo "<td>$id</td><td>$pdn</td><td>$time</td><td>$year</td><td>$price</td><td><a href='$ur' class='btn'>查看详情</a></td><td><a href='$shnchu' class='btn'>删除</a></td></tr>";
                                            }
                                            ?>
<!--
<!--                                            <tr>-->
<!--                                                <td>3</td>-->
<!--                                                <td>XXX保险</td>-->
<!--                                                <td>2021-6-5</td>-->
<!--                                                <td>保险已生效</td>-->
<!--                                                <td>100元</td>-->
<!--                                                <td><a href="single.php" class="btn">查看详情</a></td>-->
<!--                                            </tr>-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab3">
                                <h2>收藏</h2></a>
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>产品名称</th>
                                        <th>查看详情页</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    include_once "conn.php";
                                    $names=$_SESSION['uid'];

                                    $sql2 = "select * from wish where name='$names'";

                                    $result2 = mysqli_query($conn,$sql2);

                                    $dataCount = mysqli_num_rows($result2);//返回指定数据库表中数据的行数

                                    for ($i = 0; $i < $dataCount; $i++) {
                                        $result_arr = mysqli_fetch_assoc($result2);//返回表中每条数据的具体内容
                                        $pdn = $result_arr['pdname'];

                                        $ur="test2.php?act=$pdn";
                                        echo "<tr>"?>
                                        <?php echo "<td>$pdn</td><td><a href='$ur' class='btn'>查看详情</a></td></tr>";
                                    }
                                    ?>
                                   </tbody>
                                </table>


                            </div>

                            <div class="tab-pane fade" id="tab4">

                                <div class="account-details-form">
                                    <form action="post2.php" method="post" >
                                        <div class="row">
                                            <h2>用户设置</h2>

                                            <h3>更改密码</h3>

                                            <div class=" col-lg-6 col-12 mb-30">
                                                <input name = "cpw" id="current-pwd" placeholder="目前的密码" type="password" required="required">
                                            </div><br>

                                            <div class="col-lg-6 col-12 mb-30">
                                                <input name = "cnpw" id="new-pwd" placeholder="新密码" type="password" required="required">
                                            </div><br>

                                            <div class="col-lg-6 col-12 mb-30">
                                                <input name = "ccnpw" id="confirm-pwd" placeholder="确认密码" type="password" required="required">
                                            </div><br><br>

                                            <div class="col-12">
                                                <button class="save-change-btn">保存更改</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab5">
                                <div class="myaccount-content">
                                    <h2>地址设置</h2>

                                    <address>
                                        <p><strong><?php if(empty($row['tname'])){echo "未填写真实姓名";  }else{echo $row['tname'];} ?></strong></p>
                                        <p><?php if(empty($row['address'])){echo "未填写地址";  }else{echo $row['address'];} ?></p>
                                        <p>联系电话：<?php if(empty($row['phone'])){echo "未填写联系方式";  }else{echo $row['phone'];} ?></p>
                                    </address>

                                    <a class="tbox" href="#" class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>编辑地址</a>
                                    <div class="modal fade" id="myModal1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="modal-title" align="center" id ="d1">修改个人信息</h4>
                                                    <br/>
                                                    <form class="form-horizontal" role="form" action="info.php" method="post">

                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-offset-2 col-sm-2 control-label">姓名</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" name="name" placeholder="请输您的姓名"  required="required" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-offset-2 col-sm-2 control-label"  >手机号码</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" name="phone" placeholder="请输您的手机号码" oninput = "value=value.replace(/[^\d]/g,'')" maxlength="11" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-offset-2 col-sm-2 control-label"  >身份证号</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" id="idcc" name="idc" placeholder="平台保障不会泄露您的个人信息" oninput = "value=value.replace(/[^\d]/g,'')" maxlength="18" required="required">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name" class="col-sm-offset-2 col-sm-2 control-label">地址</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" name="address" placeholder="请输您的地址"  required="required">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-offset-4 col-sm-5">
                                                                <button id="submitBtn" type="submit" class="btn btn-default btn-block btn-primary">确认购买</button>
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
                                </div>
                            </div>
                        </div> <!--/.tab-content-->
                    </div> <!--/.media-body-->
                </div> <!--/.media-->
            </div><!--/.tab-wrap-->

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#content-->




<script src="assets/js/vendor/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script type="text/javascript">
    $(function(){

        $(".tbox").click(function(){
            $('#myModal1').modal('show') //显示模态框
        })

    });
</script>
<script src="assets/js/main.js"></script>
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2021  一家如虹  王佳佳 陈彬如 李烨鸿 蔡君奕
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
