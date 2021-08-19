<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">ListAcMgr</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('index.php/tableAdm/save/'.$ThisTable)?>" method="POST" id="TableMtn_form" class="form form-horizontal">
             <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">AcMgr:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="AcMgr" id="AcMgr" class="input-text" value="" placeholder="AcMgr">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="create_btn" value="Save" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('TableAdm/listacmgr');?>">Cancel</a>
                </div>
            </div>
        </form>
    </article>
</div>

<script>
$(function () {
	$("#create_btn").click(function () {
        let AcMgr = $.trim($("#AcMgr").val());
        if (!AcMgr) {
            alert("請填寫 AcMgr");
            return false;
        }
        $("#TableMtn_form").submit();
    });
});
</script>