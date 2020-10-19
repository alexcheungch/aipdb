<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Allocation</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Default Value</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('allocation/savedefault')?>" method="POST" id="JobMtn_form" class="form form-horizontal">
            <?php foreach ($field_list as $field) {?>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2"><?php echo $field['FieldName'];?>:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="<?php echo $field['FieldName'];?>" id="<?php echo $field['FieldName'];?>" value="<?php echo $field['FieldValue'];?>">
                </div>
            </div>
            <?php }?>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="submit" id="create_btn" value="Save" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('allocation');?>">Cancel</a>
                </div>
            </div>
        </form>
    </article>
</div>
