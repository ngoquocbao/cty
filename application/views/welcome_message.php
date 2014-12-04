<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>THODAICO LTD.,</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.bxslider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

        <script src="<?php echo base_url(); ?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">THODAICO</a>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Mật khẩu" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Đăng nhập</button>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
        <div class="container">
            <div class="alert alert-warning" role="alert">Hôm nay là <?php echo date('d/m/Y');?></div>
        </div>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <center class="visible-lg">
                    <ul class="bxslider">
                        <li><img src="<?php echo base_url(); ?>assets/img/slider/me_trees.jpg" /></li>
                        <li><img src="<?php echo base_url(); ?>assets/img/slider/houses.jpg" /></li>
                    </ul>
                </center>
                <h1>Trang đang được xây dựng</h1>
                <p>Công ty ThoDaiCo đang trong giai đoạn xây dựng hệ thống website, mời bạn quay lại sau .</p>
                <p><a class="btn btn-primary btn-lg" role="button">Đọc thêm &raquo;</a></p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <p href="#" class="list-group-item active">
                            Menu
                        </p>
                        <a href="#" class="list-group-item">Trang chủ</a>
                        <a href="#" class="list-group-item">Giới thiệu</a>
                        <a href="#" class="list-group-item">Sản phẩm - Dịch vụ</a>
                        <a href="#" class="list-group-item">Liên hệ</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tiêu đề trang</h3>
                        </div>
                        <div class="panel-body">
                            Nội dung chính
                            <?php echo time();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Tiêu đề trang</h3>
                </div>
                <div class="panel-body">
                    CÔNG TY TNHH TM-DV ĐAICO - 2014
                </div>
            </div>
        </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.js"><\/script>')</script>

        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.bxslider.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = '//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X');
            ga('send', 'pageview');
        </script>
    </body>
</html>
