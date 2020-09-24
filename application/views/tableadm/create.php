<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Client</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('ClientMtn/save')?>" method="POST" id="ClientMtn_form" class="form form-horizontal">
             <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Code1:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="clientcode1" id="clientcode1" class="input-text" value="" placeholder="公司簡寫">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Client name:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="clientname" id="clientname" class="input-text" value="" placeholder="公司名稱">
                </div>
            </div>
             <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Legal Entity:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="clientlegalentity" id="clientlegalentity" class="input-text" value="" placeholder="公司名稱">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Account Manager:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="acmgr" id="acmgr" class="input-text" value="" placeholder="">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('ClientMtn');?>">返回</a>
                </div>
            </div>
        </form>
    </article>
</div>

<script>
var uploadurl ="";
$(function () {
	$("#create_btn").click(function () {
        let title_ch = $.trim($("#clientname").val());
        if (!title_ch) {
            alert("請填寫 Client name");
            return false;
        }
        let title_en = $.trim($("#clientlegalentity").val());
        if (!title_en) {
            alert("請填寫Legal Entity");
            return false;
        }
        let resource_link = $.trim($("#acmgr").val());
        if (!resource_link) {
            alert("請填寫 Account manager");
            return false;
        }
        $("#ClientMtn_form").submit();
    });
});
</script>