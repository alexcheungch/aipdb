<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">ASUser</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Edit</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('asuser/save')?>" method="POST" id="JobMtn_form" class="form form-horizontal">
            <input type="hidden" name="ID" value="<?php echo $data['ID'];?>"/>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UserName:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="UserName" id="UserName" value="<?php echo $data['UserName'];?>" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UserPW:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="password" class="input-text" name="UserPW" id="UserPW">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UMenu:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="UMenu" id="UMenu" value="<?php echo $data['UMenu'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">MMenu:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="MMenu" id="MMenu" value="<?php echo $data['MMenu'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QMenu:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QMenu" id="QMenu" value="<?php echo $data['QMenu'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UClient:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="UClient" id="UClient" value="<?php echo $data['UClient'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UJob:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="UJob" id="UJob" value="<?php echo $data['UJob'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UJobProg:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="UJobProg" id="UJobProg" value="<?php echo $data['UJobProg'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UAlloc:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="UAlloc" id="UAlloc" value="<?php echo $data['UAlloc'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QClient:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QClient" id="QClient" value="<?php echo $data['QClient'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QJob:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QJob" id="QJob" value="<?php echo $data['QJob'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QJobProg:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QJobProg" id="QJobProg" value="<?php echo $data['QJobProg'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QAlloc:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QAlloc" id="QAlloc" value="<?php echo $data['QAlloc'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UJobProgSuperUser:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="UJobProgSuperUser" id="UJobProgSuperUser" value="<?php echo $data['UJobProgSuperUser'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">UAllocSuperUser:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="UAllocSuperUser" id="UAllocSuperUser" value="<?php echo $data['UAllocSuperUser'];?>">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="create_btn" value="Save" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('asuser');?>">Cancel</a>
                </div>
            </div>
        </form>
    </article>
</div>
<script>
$(function () {
    $("#create_btn").click(function () {
        let UserName = $.trim($("#UserName").val());
        if (!UserName) {
            alert("請填寫 UserName");
            return false;
        }
        $("#JobMtn_form").submit();
    });
});
</script>
