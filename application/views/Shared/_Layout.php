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
        <?php $this->load->view('Shared/BodySlider'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <?php $this->load->view('Shared/BodyLeftMenu'); ?>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><?php echo $TitleBodyContent; ?></h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $BodyContent; ?>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <?php $this->load->view('Shared/Footer'); ?>
    </body>
</html>

