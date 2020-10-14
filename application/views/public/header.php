<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> 
            <a class="logo navbar-logo f-l mr-10 hidden-xs" href="ClientMtn"><img src="<?php echo base_url('images/logo1.png'); ?>" height="30"></a>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo $user_info['UserName'];?> <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
<!--                                    <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
                            <li><a href="#">切换账户</a></li>-->
                            <li><a href="javascript:void(0);" onClick="changePW()">Change password</a></li>
                            <li><a href="<?php echo base_url('index.php/index/logout'); ?>">Logout</a></li>
                        </ul>
                    </li>
<!--                            <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>-->
                </ul>
            </nav>
        </div>
    </div>

    <div class="modal fade" id="myModalChangePW" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Change password</h4>
            </div>
            <div class="modal-body clearfix">
                <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/index/changepw');?>" id="change_pw_form">
                    <div class="form-group col-sm-12">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old password">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New password">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Repeat new password">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_save_pw">Save</button>
            </div>
            </div>
        </div>
    </div>
</header>

<script>
    function changePW(){
        $("#myModalChangePW").modal("show");
    }
    $(function () {
        $("#btn_save_pw").click(function () {
            var old_pw = $.trim($("#old_password").val());
            var new_pw1 = $.trim($("#new_password1").val());
            var new_pw2 = $.trim($("#new_password2").val());
            if (!old_pw || !new_pw1 || !new_pw2) {
                alert("請填寫所有項");
                return;
            }
            if (new_pw1 != new_pw2) {
                alert("兩次輸入的新密碼不一致");
                return;
            }
            $("#change_pw_form").submit();
        });
    });
</script>