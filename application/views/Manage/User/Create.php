<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>THODAICO LTD., - Manage - User - Create</title>
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
            <div class="alert alert-warning" role="alert">Hôm nay là <?php echo date('d/m/Y'); ?></div>
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
                            <center><h2>TẠO NGƯỜI DÙNG MỚI</h2></center>
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
                                <center><strong>Chú ý!</strong> Mục có dấu (*) là phải nhập bắt buộc. Nhấn và đọc các hướng dẫn dưới đây:</center>
                                <br/>
                                <center>
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        Tên người dùng
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    Là nhóm kí tự bằng chữ và số không bao gồm kí tự đặc biệt, gồm từ 6 kí tự trở lên.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        Mật khẩu
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Có thể dùng bất kì kí tự gì ngoại trừ khoảng trắng, từ 6 kí tự trở lên.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        Email
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    Điền đúng email và đúng định dạng một email, để tiện cho việc tìm lại mật khẩu sau này.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                            <?php
                            $Attributes = array(
                                'class' => 'form-horizontal',
                                'id' => 'CreateNewUser',
                                'role' => 'form'
                            );
                            $UserName = array(
                                'name' => 'UserName',
                                'id' => 'UserName',
                                'placeholder' => 'Nhập tên người dùng',
                                'class' => 'form-control'
                            );
                            $Password = array(
                                'name' => 'Password',
                                'id' => 'Password',
                                'placeholder' => 'Nhập mật khẩu',
                                'class' => 'form-control'
                            );
                            $RetypePassword = array(
                                'name' => 'RetypePassword',
                                'id' => 'RetypePassword',
                                'placeholder' => 'Nhập lại mật khẩu',
                                'class' => 'form-control'
                            );
                            $Email = array(
                                'name' => 'Email',
                                'id' => 'Email',
                                'class' => 'form-control',
                                'placeholder' => 'Nhập email',
                                'type' => 'email'
                            );
                            $CreateButton = array(
                                'value' => 'Tạo người dùng',
                                'class' => 'btn btn-success'
                            );
                            $ResetButton = array(
                                'value' => 'Nhập lại',
                                'class' => 'btn btn-danger'
                            );
                            //echo validation_errors();
                            echo form_open('User/Create', $Attributes);

                            echo '<div class="form-group">';
                            echo '<label for="UserName" class="col-sm-3 control-label">Tên người dùng (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_input($UserName);
                            echo form_error('UserName', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group">';
                            echo '<label for="Password" class="col-sm-3 control-label">Mật khẩu (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_password($Password);
                            echo form_error('Password', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';


                            echo '<div class="form-group">';
                            echo '<label for="RetypePassword" class="col-sm-3 control-label">Mật khẩu (nhập lại) (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_password($RetypePassword);
                            echo form_error('RetypePassword', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group">';
                            echo '<label for="Email" class="col-sm-3 control-label">Email (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_input($Email);
                            echo form_error('Email', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';



                            echo '<div class="form-group"><div class="col-sm-offset-3 col-sm-9">';
                            echo form_submit($CreateButton);
                            echo ' ';
                            echo form_reset($ResetButton);
                            echo '</div></div>';

                            echo form_close();
                            ?>
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