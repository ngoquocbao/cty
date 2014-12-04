<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Quản lí - Loại sản phẩm - Thêm loại mới</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->load->view('Shared/Header'); ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php $this->load->view('Shared/BodyTopMenu'); ?>
        <?php $this->load->view('Shared/BodyNoticeBar'); ?>
        <?php $this->load->view('Shared/BodySlider'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php $this->load->view('Shared/BodyLeftMenu'); ?>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Thêm loại sản phẩm mới</h3>
                        </div>
                        <div class="panel-body">
                            
                            <center><h2>THÊM LOẠI SẢN PHẨM MỚI</h2></center>
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
                                <center><strong>Chú ý!</strong> Mục có dấu (*) là phải nhập bắt buộc.</center>
                                <br/>                                
                            </div>
                            
                            <?php
                            $Attributes = array(
                                'class' => 'form-horizontal',
                                'id' => 'CreateNewCategory',
                                'role' => 'form'
                            );
                            $CategoryName = array(
                                'name' => 'CategoryName',
                                'id' => 'CategoryName',
                                'placeholder' => 'Nhập tên loại sản phẩm mới',
                                'class' => 'form-control'
                            );
                            $CategoryInfo = array(
                                'name' => 'CategoryInfo',
                                'id' => 'CategoryInfo',
                                'placeholder' => 'Nhập mô tả thông tin loại sản phẩm mới',
                                'class' => 'form-control'
                            );
                            $CategoryTag = array(
                                'name' => 'CategoryTag',
                                'id' => 'CategoryTag',
                                'placeholder' => 'Nhập thẻ đại diện cho loại sản phẩm mới (VD: Băng keo là tapes, dây đai là dais)',
                                'class' => 'form-control'
                            );
                            $CategoryImage = array(
                                'name' => 'CategoryImage',
                                'id' => 'CategoryImage',
                                'placeholder' => 'Chọn hình từ máy tính',
                                'class' => 'form-control'
                            );
                            $CreateButton = array(
                                'value' => 'Thêm loại sản phẩm mới',
                                'class' => 'btn btn-success'
                            );
                            $ResetButton = array(
                                'value' => 'Nhập lại',
                                'class' => 'btn btn-danger'
                            );
                            
                            echo form_open_multipart('quan-li/loai-san-pham/tao', $Attributes);

                            echo '<div class="form-group">';
                            echo '<label for="CategoryName" class="col-sm-3 control-label">Tên loại sản phẩm (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_input($CategoryName);
                            echo form_error('CategoryName', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group">';
                            echo '<label for="CategoryInfo" class="col-sm-3 control-label">Thông tin loại sản phẩm mới (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_textarea($CategoryInfo);
                            echo form_error('CategoryInfo', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                            echo '<label for="CategoryTag" class="col-sm-3 control-label">Thẻ cho sản phẩm (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_input($CategoryTag);
                            echo form_error('CategoryTag', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                            echo '<label for="CategoryInfo" class="col-sm-3 control-label">Chọn hình để tải lên (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_upload($CategoryImage);
                            echo form_error('CategoryImage', '<div class="error">', '</div>');
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
        <?php $this->load->view('Shared/Footer'); ?>
    </body>
</html>

