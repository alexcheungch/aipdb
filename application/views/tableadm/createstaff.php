<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Staff List</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('index.php/tableAdm/save/ListStaffList')?>" method="POST" id="TableMtn_form" class="form form-horizontal">
             <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Staff Code:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="StaffCode" id="StaffCode" class="input-text" value="" placeholder="StaffCode">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Staff Name:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="StaffName" id="StaffName" class="input-text" value="" placeholder="StaffName">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('TableAdm');?>">返回</a>
                </div>
            </div>
        </form>
    </article>
</div>

<script>
$(function () {
	$("#create_btn").click(function () {
        let scode = $.trim($("#StaffCode").val());
        if (!scode) {
            alert("請填寫 Staff code");
            return false;
        }
        let sname = $.trim($("#StaffName").val());
        if (!sname) {
            alert("請填寫 Staff name");
            return false;
        }
        $("#TableMtn_form").submit();
    });
});
</script>