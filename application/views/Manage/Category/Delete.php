<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php
        if (count($category) == 0) {
            $title = "Không tồn tại loại sản phẩm này";
        } else {
            $title = $category[0]['CategoryName'] . ' (MS: ' . $title = $category[0]['CategoryID'] . ')';
        }
        ?>
        <title>Quản lí - Loại sản phẩm - Xóa - <?php echo $title; ?> </title>
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">CHI TIẾT LOẠI SẢN PHẨM</h3>
                        </div>
                        <div class="panel-body">
                            <center><h3>CHI TIẾT LOẠI SẢN PHẨM</h3></center>                            
                            <?php
                            if (count($category) == 0) {
                                echo 'Không tồn tại loại sản phẩm này';
                            } else {
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
                                $DeleteButton = array(
                                    'value' => 'Xác nhận xóa',
                                    'class' => 'btn btn-danger'
                                );
                                $ResetButton = array(
                                    'value' => 'Nhập lại',
                                    'class' => 'btn btn-danger',
                                    'id' => 'resetButton'
                                );
                                echo form_open_multipart('quan-li/loai-san-pham/xoa/' . $category[0]['CategoryID'], $Attributes);
                                ?>
                                <center>
                                    <div class="alert alert-info" role="alert"><h3><span class="label label-info"><?php echo $title; ?></span></h3></div>
                                </center>
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-5" for="CategoryName">ID</label>
                                        <div class="col-md-7">
                                            <input name="CategoryID" type="text" disabled="disabled" value="<?php echo $category[0]['CategoryID']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-5">Tên</label>
                                        <div class="col-md-7">
                                            <input name="CategoryName" type="text"value="<?php echo $category[0]['CategoryName']; ?>" class="form-control">
                                            <?php echo form_error('CategoryName', '<div class="error">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-5">Thẻ</label>
                                        <div class="col-md-7">
                                            <input name="CategoryTag" type="text" value="<?php echo $category[0]['CategoryTag']; ?>" class="form-control">
                                            <?php echo form_error('CategoryTag', '<div class="error">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-5">Thông tin</label>
                                        <div class="col-md-7">
                                            <textarea name="CategoryInfo"  class="form-control"><?php echo $category[0]['CategoryInfo']; ?></textarea>
                                            <?php echo form_error('CategoryInfo', '<div class="error">', '</div>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-5 col-md-7">
                                            <?php echo form_submit($DeleteButton); ?>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-5 col-md-7">
                                            <a href="<?php echo base_url(); ?>quan-li/loai-san-pham/">Trở lại danh sách Loại sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                echo form_close();
                            }
                            ?>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <?php $this->load->view('Shared/Footer'); ?>
    </body>
</html>

