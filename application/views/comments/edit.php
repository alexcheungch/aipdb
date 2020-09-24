<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Comments</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Edit</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('Comments/save')?>" method="POST" id="edit_form" class="form form-horizontal">
        	<input type="hidden" name="id" value="<?php echo $data['id'];?>">
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">comment_resource_code:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_resource_code" id="comment_resource_code" class="input-text" readonly="readonly" value="<?php echo $data['comment_resource_code'];?>" >
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">comment_item_code:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_item_code" id="comment_item_code" class="input-text" readonly="readonly" value="<?php echo $data['comment_item_code'];?>" >
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">comment_marks_from:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_marks_from" id="comment_marks_from" class="input-text" value="<?php echo $data['comment_marks_from'];?>" >
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">comment_marks_to:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_marks_to" id="comment_marks_to" class="input-text" value="<?php echo $data['comment_marks_to'];?>" >
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">comment_title:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_title" id="comment_title" class="input-text"  value="<?php echo $data['comment_title'];?>" >
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">comment_body:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" name="comment_body" id="comment_body" class="input-text" value="<?php echo $data['comment_body'];?>" >
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="edit_btn" value="保存" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('Comments');?>">返回</a>
                </div>
            </div>
        </form>
    </article>
</div>

<script>
var uploadurl ="<?php echo base_url('ActivationCode/import')?>";
$(function () {
    $("#edit_btn").click(function () {
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
        $("#edit_form").submit();
    });
});
</script>