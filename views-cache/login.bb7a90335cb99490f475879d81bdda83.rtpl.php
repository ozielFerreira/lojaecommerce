<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title>Login | Admin</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <link rel="icon" type="image/png" sizes="32x32" href="/res/admin/login/img/favicon-32x32.png"/>

  <meta content="" name="description" />
  <meta content="" name="author" />
  
  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="/res/admin/login/css/jquery-ui.min.css" rel="stylesheet" />
  <link href="/res/admin/login/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link href="/res/admin/login/css/fontawesome-all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/res/admin/login/css/animate.min.css" rel="stylesheet" />
  <link href="/res/admin/login/css/style.min.css" rel="stylesheet" />
  <link href="/res/admin/login/css/style-responsive.min.css" rel="stylesheet" />
  <link href="/res/admin/login/css/default.css" rel="stylesheet" id="theme" />
  <!-- ================== END BASE CSS STYLE ================== -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="js/pace.min.js"></script>
  <!-- ================== END BASE JS ================== -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="pace-top">
  <!-- begin #page-loader -->
  <div id="page-loader" class="fade show"><span class="spinner"></span></div>
  <!-- end #page-loader -->
  
  <div class="login-cover">
      <div class="login-cover-image" style="background-image: url(/res/admin/login/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
      <div class="login-cover-bg"></div>
  </div>
  <!-- begin #page-container -->
  <div id="page-container" class="fade">
      <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <!-- <span class="logo"></span> --> <img src="/res/admin/login/login-bg/logo.png" alt="lojaecommerce" style="width: 55px; border-radius: 5%;box-shadow: 1px 3px 3px rgba(0, 0, 0, 0.77);"> <b>LojaEcom</b> Admin
                    <small>Painel administrador</small>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                    <!-- <span class="glyphicon glyphicon-lock" aria-hidden="true"></span> -->
                </div>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                <form action="/admin/login" method="post" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control form-control-md" name="login" placeholder="Digite seu usuário..." required autofocus style="border-radius: 20px;"/>
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control form-control-md" name="password" placeholder="Digite sua senha..." style="border-radius: 20px;"/>
                    </div>
                    <div class="checkbox checkbox-css m-b-20">
                        <!-- <input type="checkbox" id="remember_checkbox" /> 
                        <label for="remember_checkbox">
                          Remember Me
                        </label> -->
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-md" style="border-radius: 20px;">Entrar</button>
                    </div>
                    <!-- <div class="m-t-20">
                        
Ainda não é membro? Clique <a href="javascript:;">aqui</a> para registrar.
                    </div> -->
                </form>
                <hr>
                <div class="brand">
                    <a href="/admin/forgot" class="btn btn-link" style="float: left;">Esqueci a minha senha</a>
                    <a href="/admin/register" class="btn btn-link" float="rigth" style="float: right;">Cadastre-se</a>
                </div>
                <br>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
        
       <div class="">
        <ul class="login-bg-list clearfix">
            <li class="active"><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/login-bg-17.jpg" style="background-image: url(/res/admin/login/login-bg/login-bg-17.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/login-bg-16.jpg" style="background-image: url(/res/admin/login/login-bg/login-bg-16.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/login-bg-15.jpg" style="background-image: url(/res/admin/login/login-bg/login-bg-15.jpg)"></a></li>
            <li ><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/login-bg-14.jpg" style="background-image: url(/res/admin/login/login-bg/login-bg-14.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/login-bg-13.jpg" style="background-image: url(/res/admin/login/login-bg/login-bg-13.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/login-bg-12.jpg" style="background-image: url(/res/admin/login/login-bg/login-bg-12.jpg)"></a></li>

            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/temas-login-bg-18.jpg" style="background-image: url(/res/admin/login/login-bg/temas-login-bg-18.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/temas-login-bg-20.jpg" style="background-image: url(/res/admin/login/login-bg/temas-login-bg-20.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/temas-login-bg-21.jpg" style="background-image: url(/res/admin/login/login-bg/temas-login-bg-21.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/temas-login-bg-22.jpg" style="background-image: url(/res/admin/login/login-bg/temas-login-bg-22.jpg)"></a></li>
            <li><a href="javascript:;" data-click="change-bg" data-img="/res/admin/login/login-bg/temas-login-bg-23.jpg" style="background-image: url(/res/admin/login/login-bg/temas-login-bg-23.jpg)"></a></li>
        </ul>
      </div>

  </div>
  <!-- end page container -->
  
  <!-- ================== BEGIN BASE JS ================== -->
  <script src="/res/admin/login/js/jquery-3.2.1.min.js"></script>
  <script src="/res/admin/login/js/jquery-ui.min.js"></script>
  <script src="/res/admin/login/js/bootstrap.bundle.min.js"></script>
  <!--[if lt IE 9]>
    <script src="../assets/crossbrowserjs/html5shiv.js"></script>
    <script src="../assets/crossbrowserjs/respond.min.js"></script>
    <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
  <![endif]-->
  <script src="/res/admin/login/js/jquery.slimscroll.min.js"></script>
  <script src="/res/admin/login/js/js.cookie.js"></script>
  <script src="/res/admin/login/js/default.min.js"></script>
  <script src="/res/admin/login/js/apps.min.js"></script>
  <!-- ================== END BASE JS ================== -->
  
  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="/res/admin/login/js/login-v2.demo.min.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

  <script>
    $(document).ready(function() {
      App.init();
      LoginV2.init();

    });
  </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>