<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1,user-scalable=0" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>School Admin</title>
        <link href="<?php echo base_url('css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    </head>
    <body style="text-align: center; margin-top: 50px;">
        <div class="container login_box">
            <div class="row" >
                <h2 style='margin-left:50px;'>賬戶登入</h2>
                <?php
                if (isset($massage) && $massage != '') {
                    echo "<h3 style='color:red; margin-left:50px;'>" . $massage . "</h3>";
                }
                ?>
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                    <form class="form-horizontal" method="post" id="loginform" action="<?php echo base_url('index.php/index/dologin') ?>">
                        <div class="form-group">
                            <label for="admin_loginname" class="col-sm-3 control-label">賬戶名稱</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="admin_loginname" name="admin_loginname" placeholder="賬戶名稱">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="admin_loginpw" class="col-sm-3 control-label">密碼</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="admin_loginpw" name="admin_loginpw" placeholder="密碼">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="admin_loginpw" class="col-sm-3 control-label">驗證碼</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="captcha_word" name="captcha_word" placeholder="驗證碼">
                            </div>
                            <div class="col-sm-3">
                                <?php echo $captcha['image'];?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" id="loginbtn" class="btn btn-default btn-response active">登入</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url('js/jquery-1.9.1.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js') ?>"></script>
        <script>
        $(function () {
            $("#loginbtn").click(function () {
                let loginname = $.trim($("#admin_loginname").val());
                if (!loginname) {
                    alert("請輸入賬戶名稱");
                    return false;
                }
                let loginpw = $.trim($("#admin_loginpw").val());
                if (!loginpw) {
                    alert("請輸入密碼");
                    return false;
                }
                let captcha_word = $.trim($("#captcha_word").val());
                if (!captcha_word) {
                    alert("請輸入驗證碼");
                    return false;
                }
                $("#loginform").submit();
            });
            
            $("#captcha_id").click(function () {
                $.get("<?php echo base_url('index.php/index/change_captcha')?>", function (result) {
                    var data = $.parseJSON(result);
                    $("#captcha_id").attr("src", data.img_url+data.file);
                });
            });
        });
        </script>
    </body>
</html>
