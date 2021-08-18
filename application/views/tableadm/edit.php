<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor"><?php echo $ThisTable;?></a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Edit</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('TableAdm/save')?>/<?php echo $ThisTable?>/" method="POST" id="TableAdm_form" class="form form-horizontal">            
            <?php
            $row = 0;           
            foreach ($data as $k => $v) {
                $row++;
            ?>            
                <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5"><?php echo $k?></label>
                <div class="formControls col-xs-5 col-sm-5">
                <?php if ($row == 1) { ?>
                    <input type="hidden" name="<?php echo $k;?>" value="<?php echo $v;?>">
                    <input disabled type="text" name="code" id="code" class="input-text" value="<?php echo $v;?>" placeholder="code">
                <?php } else { ?>
                    <input type="text" name="<?php echo $k?>" id="<?php echo $k?>" class="input-text" value="<?php echo $v?>">
                <?php } ?>
                </div>
                </div>
            <?php } ?>
             <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="edit_btn" value="保存" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('TableAdm/'.$ThisTable);?>">返回</a>
                </div>
            </div>
        </form>
    </article>
</div>

<script>
var uploadurl ="";
$(function () {
    $("#edit_btn").click(function () {
        let title_ch = $.trim($("#code").val());
        if (!title_ch) {
            alert("請填寫 Code");
            return false;
        }
        $("#TableAdm_form").submit();
    });
});
</script>