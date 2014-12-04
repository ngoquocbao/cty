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
                            <center><h3>QUẢN LÍ SẢN PHẨM</h3></center>
                            <a href="<?php echo base_url();?>product/create" class="btn btn-primary" role="button">Thêm sản phẩm mới</a>
                            <div class="table-responsive">
                                <table class="table sorterTable" id="sorterTable">
                                    <thead>
                                    <th>STT</th>
                                    <th>ID</th>
                                    <th>CatID</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>Hình</th>
                                    <th>Người tạo</th>
                                    <th>Người sửa</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày sửa</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $counter = 1;
                                        if (count($ListOfProduct) == 0) {
                                            echo '<tr>';
                                            echo '<td>';
                                            echo 'Chưa có nội dung';
                                            echo '</td>';
                                            echo '<tr>';
                                        } else {
                                            foreach ($ListOfProduct as $product) {
                                                echo '<tr>';

                                                echo '<td>';
                                                echo $counter;
                                                echo '</td>';
                                                echo '<td>';
                                                echo $product['ProductID'];
                                                echo '</td>';
                                                echo '<td>';
                                                echo $product['CategoryID'];
                                                echo '</td>';
                                                echo '<td><a href="' . base_url() . 'category/item/' . $product['ProductID'] . '">';
                                                echo $product['ProductName'];
                                                echo '</a></td>';                                                
                                                echo '<td>';
                                                echo $product['ProductInfo'];
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<img src="' . base_url() . 'public/images/products/Product.png">';
                                                echo '</td>';
                                                echo '<td>';
                                                echo $product['CreatedBy'];
                                                echo '</td>';
                                                echo '<td>';
                                                echo $product['ModifiedBy'];
                                                echo '</td>';
                                                echo '<td>';
                                                echo date('d/m/Y H:i:s', $product['CreatedDate']);
                                                echo '</td>';
                                                echo '<td>';
                                                echo date('d/m/Y H:i:s', $product['ModifiedDate']);
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

