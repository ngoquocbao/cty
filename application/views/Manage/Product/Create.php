<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Quản lí - Sản phẩm - Thêm sản phẩm mới</title>
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
                            <h3 class="panel-title">Thêm sản phẩm mới</h3>
                        </div>
                        <div class="panel-body">
                            
                            <center><h2>THÊM SẢN PHẨM MỚI</h2></center>
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
                                <center><strong>Chú ý!</strong> Mục có dấu (*) là phải nhập bắt buộc.</center>
                                <br/>                                
                            </div>
                            
                            <?php
                            $Attributes = array(
                                'class' => 'form-horizontal',
                                'id' => 'CreateNewProduct',
                                'role' => 'form'
                            );
                            $ProductName = array(
                                'name' => 'ProductName',
                                'id' => 'ProductName',
                                'placeholder' => 'Nhập tên sản phẩm mới',
                                'class' => 'form-control'
                            );
                            $ProductInfo = array(
                                'name' => 'ProductInfo',
                                'id' => 'ProductInfo',
                                'placeholder' => 'Nhập mô tả thông tin sản phẩm mới',
                                'class' => 'form-control'
                            );
                            $CategoryID = array(
                                'name' => 'CategoryID',
                                'id' => 'CategoryID',
                                'class' => 'form-control'
                            );
                            $ProductImage = array(
                                'name' => 'ProductImage',
                                'id' => 'ProductImage',
                                'placeholder' => 'Chọn hình từ máy tính',
                                'class' => 'form-control'
                            );
                            $CreateButton = array(
                                'value' => 'Thêm sản phẩm mới',
                                'class' => 'btn btn-success'
                            );
                            $ResetButton = array(
                                'value' => 'Nhập lại',
                                'class' => 'btn btn-danger'
                            );
                            
                            echo form_open_multipart('product/create', $Attributes);

                            echo '<div class="form-group">';
                            echo '<label for="ProductName" class="col-sm-3 control-label">Tên sản phẩm mới (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_input($ProductName);
                            echo form_error('ProductName', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group">';
                            echo '<label for="ProductInfo" class="col-sm-3 control-label">Thông tin sản phẩm mới (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_textarea($ProductInfo);
                            echo form_error('ProductInfo', '<div class="error">', '</div>');
                            echo '</div>';
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                            echo '<label for="CategoryID" class="col-sm-3 control-label">Chọn loại cho sản phẩm (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo '<select class="form-control" name="CategoryID">';
                            foreach($CategoryList as $Category) {
                                echo '<option value="'.$Category['CategoryID'].'">'.$Category['CategoryName'].'</option>';
                            }
                            echo '</select>';                           
                            echo '</div>';
                            echo '</div>';
                            
                            echo '<div class="form-group">';
                            echo '<label for="ProductInfo" class="col-sm-3 control-label">Chọn hình để tải lên (*)</label>';
                            echo '<div class="col-sm-9">';
                            echo form_upload($ProductImage);
                            echo form_error('ProductImage', '<div class="error">', '</div>');
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

