<?php
session_start();
if(empty($_SESSION['uid'])){
//没有登陆的话.....
}else{
    echo "<script>location.href='personal.php';</script>";
}
?>
<!DOCTYPE html>
<html >
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
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<link rel="stylesheet" href="css/stylelogin.css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>


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
          <li><a href="shouhou.php">咨询及售后</a></li>
          <li class="active"><a href="222.php">个人中心</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="cotn_principal">
  <div class="cont_centrar">
    <div class="cont_login">
      <div class="cont_info_log_sign_up">
        <div class="col_md_login">
          <div class="cont_ba_opcitiy">
            <h2>登录</h2>
            <p>有账户可直接登录</p>
            <button class="btn_login" onClick="cambiar_login()">登录</button>
          </div>
        </div>
        <div class="col_md_sign_up">
          <div class="cont_ba_opcitiy">
            <h2>注册</h2>
            <p>没有账户请先进行注册</p>
            <button class="btn_sign_up" onClick="cambiar_sign_up()">注册</button>
          </div>
        </div>
      </div>
      <div class="cont_back_info">
        <div class="cont_img_back_grey"> <img src="po.jpg" alt="" /> </div>
      </div>
      <div class="cont_forms" >
        <div class="cont_img_back_"> <img src="po.jpg" alt="" /> </div>
        <div class="cont_form_login"> <a href="#" onClick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
          <h2>登录</h2>
           <form action="postlogin.php" method="post">
            <input name="username" type="text" placeholder="账号" style="text-align: left;padding: 15px 5px;margin-left: 10px;margin-top: 20px;width: 260px;border: none;color: #757575;"/>
            <input name="pw2" type="password" placeholder="密码" style="text-align: left;padding: 15px 5px;margin-left: 10px;margin-top: 20px;width: 260px;border: none;color: #757575;"/>
            <a  href="personal.php"><button class="btn_login" onClick="cambiar_login()">登录</button></a>
           </form>
        </div>
        <div class="cont_form_sign_up"> <a href="#" onClick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
          <h2>注册</h2>
          <form action="post.php" method="post">
            <input name="name" type="text" placeholder="用户名" style="text-align: left;padding: 15px 5px;margin-left: 10px;margin-top: 20px;width: 260px;border: none;color: #757575;"/>
            <input name="email" type="email" placeholder="邮箱" style="text-align: left;padding: 15px 5px;margin-left: 10px;margin-top: 20px;width: 260px;border: none;color: #757575;"/>
            <input name="pw" type="password" placeholder="密码" style="text-align: left;padding: 15px 5px;margin-left: 10px;margin-top: 20px;width: 260px;border: none;color: #757575;"/>
            <input name="cpw" type="password" placeholder="确认密码" style="text-align: left;padding: 15px 5px;margin-left: 10px;margin-top: 20px;width: 260px;border: none;color: #757575;"/>
            <button class="btn_sign_up" onClick="check()">注册</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer id="footer" class="midnight-blue">
  <div class="container">
    <div class="row">
        &copy; 2021  一家如虹  王佳佳 陈彬如 李烨鸿 蔡君奕
    </div>
  </div>
</footer><!--/#footer-->

<script src="js/index.js"></script>
<script>
  function check(){
    let username = document.getElementsByName('name')[0].value.trim();
    let pw = document.getElementsByName('pw')[0].value.trim();
    let cpw = document.getElementsByName('cpw')[0].value.trim();
    let email = document.getElementsByName('email')[0].value.trim();
    //用户验证
    let usernameReg = /^[a-zA-Z0-9]{2,10}$/;
    if(!usernameReg.test(username)){
      alert('用户名必填，且只能由大小写字符和数字组成，长度为2-10个字符');
      return false;
    }
    let pwreg = /^[a-zA-Z0-9_*]{6,20}$/;
    if(!pwreg.test(pw)){
      alert('密码必填，且只能为大小写字符和数字以及*、_，长度为6-20位');
      return false;
    }
    else{
      if(pw != cpw){
        alert('密码和确认密码必须相同');
        return false;
      }
    }
    let emailReg = /^[a-zA-ZZ0-9_\-]+@([a-zA-Z0-9]+\.)+(com|cn|net|org)$/;
    if(email.length > 0){
      if(!emailReg.test(email)){
        alert('邮箱格式不正确！');
        return false;
      }
    }

    return true;
  }
</script>

</body>
</html>

