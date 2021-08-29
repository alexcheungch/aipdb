<link href="<?php echo base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Sysparam</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">List</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <div class="text-left" style="margin-bottom: 20px;">
            <button class="btn btn-default" type="button" onClick="javascript:window.location.href='<?php echo base_url('sysparam/create'); ?>'">Add Param</button>
        </div>
        <table id="sysparam_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Param Type</td>
                    <td>Param Value</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sysparam_list as $sysparam) {?>
                    <tr>
                        <td><?php echo $sysparam['ID']; ?></td>
                        <td><?php echo $sysparam['ParamType']; ?></td>
                        <td><?php echo $sysparam['ParamValue']; ?></td>
                        <td>
                            <button class="btn btn-default edit_btn" type="button"  attrid="<?php echo $sysparam['ID']; ?>">Edit</button>
                            <!--<button class="btn btn-default delete_btn"   type="button"  attrid="<?php echo $sysparam['ID']; ?>">Delete</button>-->
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </article>
</div>
<script>
    $(function () {
        $('#sysparam_table').DataTable({
            order: [[0, "asc"]]
        });
        $('#sysparam_table tbody').on('click', ".delete_btn", function () {
            if (confirm("確認要刪除嗎？")) {
                var id = $(this).attr('attrid');
                location.href = "<?php echo base_url('sysparam/delete') ?>/" + id;
            }
        });
        $('#sysparam_table tbody').on('click', ".edit_btn", function () {
            var id = $(this).attr('attrid');
            location.href = "<?php echo base_url('sysparam/edit') ?>/" + id;
        });
    });
</script>
