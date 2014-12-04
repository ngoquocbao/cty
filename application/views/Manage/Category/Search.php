<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title; ?></title>
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
                            <h3 class="panel-title"><?php echo $TitleBodyContent; ?></h3>
                        </div>
                        <div class="panel-body">
                            <center><h3>QUẢN LÍ LOẠI SẢN PHẨM</h3></center>


                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <a href="<?php echo base_url(); ?>quan-li/loai-san-pham/tao" class="btn btn-primary" role="button">Tạo loại sản phẩm mới</a>  
                                </div>
                                <div class="col-md-8">
                                    <?php
                                    $Attributes = array(
                                        'class' => 'form-horizontal',
                                        'id' => 'SearchCategory',
                                        'role' => 'form'
                                    );
                                    $CategoryToSearch = array(
                                        'name' => 'CategoryToSearch',
                                        'id' => 'CategoryToSearch',
                                        'placeholder' => 'Nhập từ khóa để tìm',
                                        'class' => 'form-control'
                                    );

                                    $SearchButton = array(
                                        'value' => 'Tìm',
                                        'class' => 'btn btn-success'
                                    );

                                    echo form_open_multipart('quan-li/loai-san-pham/tim', $Attributes);
                                    echo '<div class="form-group col-md-11">';
                                    echo '<label for="CategoryToSearch" class="col-sm-3 control-label">Từ khóa tìm kiếm</label>';
                                    echo '<div class="col-sm-9">';
                                    echo form_input($CategoryToSearch);
                                    echo form_error('CategoryToSearch', '<div class="error">', '</div>');
                                    echo '</div>';
                                    echo '</div>';

                                    echo '<div class="form-group col-md-1"><div class="col-sm-offset-3 col-sm-9">';
                                    echo form_submit($SearchButton);
                                    echo ' ';

                                    echo form_close();
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table sorterTable" id="sorterTable">
                                    <thead>
                                    <th>STT</th>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>Hình</th>
                                    <th>Người tạo</th>
                                    <th>Người sửa</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày sửa</th>
                                    <th>Thao tác</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $counter = 1;
                                        if (count($ListOfCategory) == 0) {
                                            echo '<tr>';
                                            echo '<td>';
                                            echo 'Không có kết quả trùng khớp';
                                            echo '</td>';
                                            echo '<tr>';
                                        } else {
                                            foreach ($ListOfCategory as $category) {
                                                echo '<tr>';

                                                echo '<td>';
                                                echo $counter;
                                                echo '</td>';
                                                echo '<td>';
                                                echo $category['CategoryID'];
                                                echo '</td>';
                                                echo '<td><a href="' . base_url() . 'quan-li/loai-san-pham/chi-tiet/' . $category['CategoryID'] . '">';
                                                echo $category['CategoryName'];
                                                echo '</a></td>';
                                                echo '<td>';
                                                echo '<div class="btn-group">';
                                                echo '<button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">';
                                                echo 'Xem <span class="caret"></span>';
                                                echo '</button>';
                                                echo '<ul class="dropdown-menu" role="menu">';
                                                echo '<li>';
                                                echo $category['CategoryInfo'];
                                                echo '</li>';
                                                echo '</ul>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<div class="btn-group">';
                                                echo '<button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">';
                                                echo 'Xem <span class="caret"></span>';
                                                echo '</button>';
                                                echo '<ul class="dropdown-menu" role="menu">';
                                                echo '<li>';
                                                echo '<img src="' . base_url() . 'public/images/category/Category.png">';
                                                echo '</li>';
                                                echo '</ul>';
                                                echo '</div>';
                                                echo '</td>';
                                                echo '<td>';
                                                echo $category['CreatedBy'];
                                                echo '</td>';
                                                echo '<td>';
                                                echo $category['ModifiedBy'];
                                                echo '</td>';
                                                echo '<td>';
                                                echo date('d/m/Y H:i:s', $category['CreatedDate']);
                                                echo '</td>';
                                                echo '<td>';
                                                echo date('d/m/Y H:i:s', $category['ModifiedDate']);
                                                echo '</td>';

                                                echo '<td>';
                                                echo '<div class="btn-group">';
                                                echo '<button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">';
                                                echo 'Chọn <span class="caret"></span>';
                                                echo '</button>';
                                                echo '<ul class="dropdown-menu" role="menu">';
                                                echo '<li><a href="' . base_url() . 'quan-li/loai-san-pham/chi-tiet/' . $category['CategoryID'] . '">Xem</a></li>';
                                                echo '<li><a href="' . base_url() . 'quan-li/loai-san-pham/xoa/' . $category['CategoryID'] . '">Xóa</a></li>';
                                                echo '<li><a href="' . base_url() . 'quan-li/loai-san-pham/sua/' . $category['CategoryID'] . '">Sửa</a></li>';
                                                echo '</ul>';
                                                echo '</div>';
                                                echo '</td>';

                                                echo '</tr>';
                                                $counter++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
        <?php $this->load->view('Shared/Footer'); ?>
    </body>
</html>

