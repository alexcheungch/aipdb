<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Comments</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('Comments/save')?>" method="POST" id="create_form" class="form form-horizontal">
            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">comment resource code:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_resource_code" id="comment_resource_code" class="input-text" value="" placeholder="Resource Code">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label  col-xs-3 col-sm-3">comment item code:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_item_code" id="comment_item_code" class="input-text" value="" placeholder="Item Code">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label  col-xs-3 col-sm-3">comment marks from:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_marks_from" id="comment_marks_from" class="input-text" value="" placeholder="e.g. 0">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label  col-xs-3 col-sm-3">comment marks to:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_marks_to" id="comment_marks_to" class="input-text" value=""placeholder="e.g. 100" >
                </div>
            </div>
            <div class="row cl">
                <label class="form-label  col-xs-3 col-sm-3">comment title:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_title" id="comment_title" class="input-text" value="" >
                </div>
            </div>
            <div class="row cl">
                <label class="form-label  col-xs-3 col-sm-3">comment body:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_body" id="comment_body" class="input-text" value="" >
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('Comments');?>">返回</a>
                </div>
            </div>
        </form>
    </article>
</div>
<script>
var uploadurl ="<?php echo base_url('Comments/import')?>";
$(function () {
	$("#create_btn").click(function () {
        let comment_resource_code = $.trim($("#comment_resource_code").val());
        if (!comment_resource_code) {
            alert("請填寫 comment_resource_code");
            return false;
        }
        let comment_item_code = $.trim($("#comment_item_code").val());
        if (!comment_item_code) {
            alert("請填寫 comment_item_code");
            return false;
        }
         let comment_marks_from = $.trim($("#comment_marks_from").val());
        if (!comment_marks_from) {
            alert("請填寫 comment_marks_from");
            return false;
        }
         let comment_marks_to = $.trim($("#comment_marks_to").val());
        if (!comment_marks_to) {
            alert("請填寫 comment_marks_to");
            return false;
        }
        if (parseInt(comment_marks_from)>parseInt(comment_marks_to)) {  
            alert("comment_marks_from 必須小於comment_marks_to");
            return false;
        }
        $("#create_form").submit();
    });
});
</script>