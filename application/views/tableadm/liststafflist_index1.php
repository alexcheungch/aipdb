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
        <table id="coderesource_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>Code</td>
                    <td>Name </td>
                    <td>Operation</td>
                </tr>
            </thead>
            <tbody>
            <?php           
            if($ListStaffList_list && count($ListStaffList_list)>0){
            foreach ($ListStaffList_list as $Record) {
            ?>
                <tr>
                	<td><?php echo $Record['StaffCode'];?></td>
                    <td><?php echo $Record['StaffName'];?></td>
                    <td>
                        <button class="btn btn-default edit_btn" type="button"  attrid="<?php echo $Record['StaffCode'];?>">Edit</button>
                        <button class="btn btn-default delete_btn"   type="button"  attrid="<?php echo $Record['StaffCode'];?>">Delete</button>
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
