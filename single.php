<!DOCTYPE html>
<html style="height: 100%">
<head>
    <meta charset="utf-8">
    <script src="echarts/dist/echarts.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
</head>
<body style="height: 100%; margin: 0">
<div id="container" style="height: 100%"></div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.2.2/dist/echarts.min.js"></script>

<script type="text/javascript">

    var dom = document.getElementById("container");
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
            text: '热度展示榜',
            subtext: '所有产品的热度，规则为浏览+1,购买+10'
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
        dataZoom: [
            {
                type: 'inside'
            }
        ],
        series: [
            {
                name: 'Direct',
                type: 'bar',
                barWidth: '60%',
                data: nums
            }
        ]
    };
    myChart.setOption(option);

</script>
</body>
</html>
