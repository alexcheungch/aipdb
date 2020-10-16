<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Sysparam</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('sysparam/save')?>" method="POST" id="JobMtn_form" class="form form-horizontal">
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">ParamType:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="ParamType" id="ParamType">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">ParamValue:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="ParamValue" id="ParamValue">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="create_btn" value="Save" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('sysparam');?>">Cancel</a>
                </div>
            </div>
        </form>
    </article>
</div>
<script>
$(function () {
    $("#create_btn").click(function () {
        let ParamType = $.trim($("#ParamType").val());
        if (!ParamType) {
            alert("請填寫 ParamType");
            return false;
        }
        let ParamValue = $.trim($("#ParamValue").val());
        if (!ParamValue) {
            alert("請填寫 ParamValue");
            return false;
        }
        
        $("#JobMtn_form").submit();
    });
});
</script>
