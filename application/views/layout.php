<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="icon" href="data:image/ico;base64,aWNv">
        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php echo base_url('lib/html5.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('lib/respond.min.js') ?>"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/h-ui/css/H-ui.min.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/h-ui.admin/css/H-ui.admin.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('lib/Hui-iconfont/1.0.8/iconfont.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/h-ui.admin/skin/default/skin.css') ?>" id="skin" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/h-ui.admin/css/style.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery.autocomplete.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-datepicker.css') ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/custom.css') ?>"/>
        <style>
            #loading_background{display:block;width:100%;height:1080px;opacity:0.4;position:absolute;top:0;left:0;z-index:2000;background-color:grey;}
            #loading_bar { 
                border: solid 2px #86A5AD;
                background: white;
                display: block;
                width: 160px;
                height: 30px;
                position: fixed;
                top: 40%;
                left: 50%;
                margin-left: -74px;
                margin-top: -14px;
                padding: 5px 10px 10px 20px;
                text-align: left;
                font-weight: bold;
                z-index: 2001;
            }
        </style>
        <!--[if IE 6]>
        <script type="text/javascript" src="<?php echo base_url('lib/DD_belatedPNG_0.0.8a-min.js') ?>" ></script>
        <script>DD_belatedPNG.fix('*');</script><![endif]-->
        <script type="text/javascript" src="<?php echo base_url('lib/jquery/1.9.1/jquery.min.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('lib/layer/2.4/layer.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/jquery.validation/1.14.0/jquery.validate.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/jquery.validation/1.14.0/validate-methods.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/jquery.validation/1.14.0/messages_zh.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/jquery.autocomplete/jquery.mockjax.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/jquery.autocomplete/jquery.autocomplete.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/jquery.bootstrap.wizard/jquery.bootstrap.wizard.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/bootstrap-datepicker/bootstrap-datepicker.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/export/FileSaver.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('lib/export/xlsx.full.min.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('static/h-ui/js/H-ui.js') ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('static/h-ui.admin/js/H-ui.admin.page.js') ?>"></script> 
        <title>AS DEPT PROGRESS RECORD</title>
    </head>
    <body>
        <?php
        if (!isset($header_page)) {
            $header_page = 'public/header';
        }
        $this->load->view($header_page);
        
        if (!isset($sidebar_page)) {
            $sidebar_page = 'public/sidebar';
        }
        $this->load->view($sidebar_page);
        ?>
        <div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
		<input type="file" class="btn btn-danger" onchange="importdate(this)" name="IMPort" id="IMPort" value="" style="display: none;"/>
        <section class="Hui-article-box">
            <?php $this->load->view($content); ?>
        </section>
        <?php $this->load->view('public/footer'); ?>
    </body>
</html>