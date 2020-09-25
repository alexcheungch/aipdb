<link href="<?php echo base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor"><?php echo $ThisTable;?></a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">List</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <div class="text-right" style="margin-bottom: 20px;">
            <button type="button" onClick="javascript:window.location.href='<?php echo base_url('/TableAdm/createacmgr'); ?>'">+ Add</button>
        </div>
        <table id="coderesource_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>Code</td>
                    <td>Name </td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
            <?php           
            if($ListAcMgr && count($ListAcMgr)>0){
            foreach ($ListAcMgr as $Record) {
            ?>
                <tr>
                	<td><?php echo $Record['ID'];?></td>
                    <td><?php echo $Record['AcMgr'];?></td>
                    <td>
                        <button class="btn btn-default edit_btn" type="button"  attrid="<?php echo $Record['ID'];?>">編輯</button>
                        <button class="btn btn-default delete_btn"   type="button"  attrid="<?php echo $Record['ID'];?>">刪除</button>
                    </td>
                </tr>
            <?php }}?>
            </tbody>
        </table>
    </article>
</div>
<script>
var uploadurl ="";
$(function () {
    $('#coderesource_table').DataTable({
        order: [[ 0, "asc" ]],
    });
    $('#coderesource_table tbody').on( 'click', ".delete_btn", function () {
        if (confirm("確認要刪除嗎？")) {
            var id=$(this).attr('attrid');
            location.href = "<?php echo base_url('TableAdm/delete') ?>/<?php echo $ThisTable?>/"+id;
        }
    });
  	$('#coderesource_table tbody').on( 'click', ".edit_btn", function () {
        var id=$(this).attr('attrid');
        location.href = "<?php echo base_url('TableAdm/edit') ?>/<?php echo $ThisTable?>/"+id;
    });
});
</script>
