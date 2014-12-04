<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Trang chủ - Sản phẩm</title>
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
                            <h3 class="panel-title">Sản phẩm</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tapes" role="tab" data-toggle="tab">Băng keo</a></li>
                                <li><a href="#dais" role="tab" data-toggle="tab">Dây đai</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tapes">
                                    <div class="row"><br/></div>
                                    <div class="row">
                                        <?php
                                        $counterOfTapes = count($tapes);
                                        if ($counterOfTapes == 0) {
                                            echo 'Không có sản phẩm';
                                        } else {
                                            //print($counterOfTapes);
                                            $counter1 = 1;
                                            foreach ($tapes as $tape) { {
                                                    //echo '<div class="row">';
                                                    echo '<div class="col-sm-6 col-md-4">';
                                                    echo '<div class="thumbnail">';
                                                    echo '<img src="' . base_url() . 'public/images/products/' . $tape['ProductImage'] . '" alt="...">';
                                                    echo '<div class="caption">';
                                                    echo '<h3>' . $tape['ProductName'] . '</h3>';
                                                    echo '<p>' . $tape['ProductInfo'] . '</p>';
                                                    echo '<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    //echo '</div>';
                                                }
                                                //if ($counterOfTapes % 3 == 0) {
                                                //echo '<br/>';
                                                //}
                                                $counter1++;
                                            }
                                        }
                                        ?>   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="dais">
                                    <div class="row"><br/></div>
                                    <div class="row">
                                        <?php
                                        $counterOfDais = count($dais);
                                        if ($counterOfDais == 0) {
                                            echo 'Không có sản phẩm';
                                        } else {
                                            //print($counterOfTapes);
                                            $counter2 = 1;
                                            foreach ($dais as $dai) { {
                                                    //echo '<div class="row">';
                                                    echo '<div class="col-sm-6 col-md-4">';
                                                    echo '<div class="thumbnail">';
                                                    echo '<img src="' . base_url() . 'public/images/products/' . $dai['ProductImage'] . '" alt="...">';
                                                    echo '<div class="caption">';
                                                    echo '<h3>' . $dai['ProductName'] . '</h3>';
                                                    echo '<p>' . $dai['ProductInfo'] . '</p>';
                                                    echo '<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    echo '</div>';
                                                    //echo '</div>';
                                                }
                                                //if ($counterOfTapes % 3 == 0) {
                                                //echo '<br/>';
                                                //}
                                                $counter2++;
                                            }
                                        }
                                        ?>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
<?php $this->load->view('Shared/Footer'); ?>
    </body>
</html>

