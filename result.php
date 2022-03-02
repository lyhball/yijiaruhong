<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head><!--/head-->
<body>

<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首页</a></li>
                <li><a href="portfolio.php">保险超市</a></li>
                <li class="active"><a href="shaixuan.php">产品筛选</a></li>
                <li><a href="shouhou.php">咨询及售后</a></li>
                <li><a href="222.php">个人中心</a></li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->

</header><!--/header-->
<section id="portfolio">
    <div class="container">
        <div class="center">
            <h2>产品筛选</h2>
            <p class="lead">分情况选择您的保险</p>
        </div>
        <div class="container"  id="searchDiv">
            <div class="keyword-search " style="text-align:center">

                <form action="result.php" method="post"> 搜索：<input id="key" name="key" type="text" style="width: 200px;" placeholder="请输入搜索内容" />
                    <a class="tbox"><input type="submit" value="搜索" title=""></a></form>
            </div>
        </div><br>



        <ul class="portfolio-filter text-center" style="display: none">
            <li><a class="btn btn-default active" href="#" data-filter="*">全年龄段</a></li>
        </ul><!--/#portfolio-filter-->

        <div class="row">
            <div class="portfolio-items">
                <?php
                include_once "conn.php";
                $names=$_SESSION['uid'];
                $key = trim($_POST['key']);

                $sql = "select * from insurance  where name like '%$key%'";

                $result = mysqli_query($conn,$sql);
                $dataCount = mysqli_num_rows($result);//返回指定数据库表中数据的行数
                if($dataCount==0)
                {
                    echo "<h1>抱歉没有您想要的保险</h1>";
                }

                for ($i = 0; $i < $dataCount; $i++) {
                    $result_arr = mysqli_fetch_assoc($result);//返回表中每条数据的具体内容
                    $id = $result_arr['id'];
                    $name = $result_arr['name'];
                    $price = $result_arr['price'];
                    $prc=" "."$price"."元起,";
                    $situ=$result_arr['situ'];
                    $type=$result_arr['type'];
                    $age = $result_arr['age'];
                    $src="images/"."$id".".jpg";

                    $ur="test2.php?act=$name";?>
                    <?php echo "<div class='portfolio-item $age col-xs-12 col-sm-4 col-md-3'><div class='recent-work-wrap'><img class='img-responsive' src='$src'><div class='overlay'><div class='recent-work-inner'><h3><a href='#'>$name</a></h3><p>$prc</p><p>适用人群：</p><p>$age</p><a class='preview' href=$ur><i class='fa fa-eye'></i> View</a></div></div></div></div>";
                }
                ?>
            </div>
        </div>
    </div>
</section><!--/#portfolio-item-->

<footer id="footer" >
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
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
</body>
</html>

