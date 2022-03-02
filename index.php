<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport"
       content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>首页</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--新的 -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
    <script src="echarts/dist/echarts.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.2.2/dist/echarts.min.js"></script>

    <!--[endif]-->
</head><!--/head-->

<body class="homepage">

<header id="header">
    <nav class="navbar navbar-inverse" role="banner" style="background-color:white;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">首页</a></li>
                    <li><a href="portfolio.php">保险超市</a></li>
                    <li><a href="shaixuan.php">产品筛选</a></li>
                    <li><a href="shouhou.php">咨询及售后</a></li>
                    <li><a href="222.php">个人中心</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->

<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1" style="font-size: 40px">如虹保险——一个保险平台</h1>
                                <h2 class="animation animated-item-2">推荐您购买小魔仙全身变医疗保险</h2>
                                <a class="btn-slide animation animated-item-3" href="test2.php?act=小魔仙全身变医疗保险">查看更多</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">热门保险推荐</h1>
                                <h2 class="animation animated-item-2">仅399元</h2>
                                <a class="btn-slide animation animated-item-3" href="test2.php?act=黑暗之神医疗保险">查看更多</a>
                            </div>
                        </div>
                        <!--
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img2.png" class="img-responsive">
                            </div>
                        </div>
                         -->
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">热门保险推荐</h1>
                                <h2 class="animation animated-item-2"></h2>
                                <a class="btn-slide animation animated-item-3" href="test2.php?act=停意外保险">查看更多</a>
                            </div>
                        </div>
                        <!--
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img3.png" class="img-responsive">
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->
<section id="feature" >
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>公司主旨</h2>
            <p class="lead">帮助您规避风险和分散投资，减少您的忧虑和恐惧</p>
        </div>

        <div class="row">
            <div class="features">
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-bullhorn"></i>
                        <h2>诚信经营</h2>
                        <h3>中国人不骗中国人</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-comments"></i>
                        <h2>到账迅速</h2>
                        <h3>核实情况属实后立刻到账</h3>
                    </div>
                </div><!--/.col-md-4-->

                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="fa fa-cloud-download"></i>
                        <h2>容易使用</h2>
                        <h3>分类简单，易于查找和浏览</h3>
                    </div>
                </div><!--/.col-md-4-->
            </div><!--/.services-->
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#feature-->
<br>

<div id="containerw" class="container" style="height: 400%"></div>
<script type="text/javascript">

    var dom = document.getElementById("containerw");
    var myChart = echarts.init(dom);
    var app = {};

    var option;


    // 初始化两个数组，盛装从数据库中获取到的数据
    var places=[], nums=[];
    function TestAjax(){
        $.ajax({
            type: "post",
            async: false,     //异步执行
            url: "huatu.php",   //SQL数据库文件
            data: {},         //发送给数据库的数据
            dataType: "json", //json类型
            success: function(result) {
                if (result) {
                    for (var i = 0; i < result.length; i++) {
                        places.push(result[i].name);
                        nums.push(result[i].heat);
                    }
                }
            }
        })
        return places, nums;
    }
    //执行异步请求
    TestAjax();
    option = {
        title: {
            text: '热度指数'
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                data: places,
                axisTick: {
                    alignWithLabel: true
                }
            }
        ],
        yAxis: [
            {
                type: 'value'
            }
        ],
        series: [
            {
                name: '热度',
                type: 'bar',
                barWidth: '60%',
                data: nums
            }
        ]
    };
    myChart.setOption(option);
    // Enable data zoom when user click bar.
    const zoomSize = 6;
    myChart.on('click', function (params) {
        console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
        myChart.dispatchAction({
            type: 'dataZoom',
            startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
            endValue:
                dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
        });
    });

</script>

<div class="main">
    <div class="wrap">
        <div class="section group">

                <h2 class="head">热门产品</h2>
                <div class="top-box">
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=01车险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/1.jpg" alt=""/>
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">01车险</p>
                                        <div class="price1">
                                            <span class="actual">700.00起</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=巴啦啦医疗保险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/2.jpg" alt=""/>
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">巴啦啦医疗保险</p>
                                        <div class="price1">
                                            <span class="actual">4.00起</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=沙罗沙罗医疗保险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/3.jpg" alt=""/>
                                </div>
                                <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">沙罗沙罗医疗保险</p>
                                        <div class="price1">
                                            <span class="reducedfrom">660.00起</span>
                                            <span class="actual">256.00起</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="top-box1">
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=罗拉多医疗保险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/10.jpg" alt=""/>
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">罗拉多医疗保险</p>
                                        <div class="price1">
                                            <span class="actual">258.00起</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=他拉娜意外保险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/13.jpg" alt=""/>
                                </div>
                                <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">他拉娜意外保险</p>
                                        <div class="price1">
                                            <span class="reducedfrom">200.00</span>
                                            <span class="actual">153.00起</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=2021A意外保险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/16.jpg" alt=""/>
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">2021A意外保险</p>
                                        <div class="price1">
                                            <span class="actual">125.00起</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
                <h2 class="head">新品推荐</h2>
                <div class="top-box1">
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=01车险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/1.jpg" alt=""/>
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">01车险</p>
                                        <div class="price1">
                                            <span class="actual">700.00起</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=停意外保险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/14.jpg" alt=""/>
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">停意外保险</p>
                                        <div class="price1">
                                            <span class="actual">90.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="test2.php?act=2021B意外保险">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img src="images/17.jpg" alt=""/>
                                </div>
                                <div class="sale-box"><span class="on_sale title_shop">New</span></div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">2021B意外保险</p>
                                        <div class="price1">
                                            <span class="actual">158.00起</span>
                                        </div>
                                    </div>
                                    <div class="cart-right"> </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
    </div>
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


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>