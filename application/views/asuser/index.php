<link href="<?php echo base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">ASUser</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">List</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <div class="text-left" style="margin-bottom: 20px;">
            <button class="btn btn-default" type="button" onClick="javascript:window.location.href='<?php echo base_url('asuser/create'); ?>'">Add ASUser</button>
        </div>
        <table id="asuser_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>UserName</td>
                    <td>UMenu</td>
                    <td>MMenu</td>
                    <td>QMenu</td>
                    <td>UClient</td>
                    <td>UJob</td>
                    <td>UJobProg</td>
                    <td>UAlloc</td>
                    <td>QClient</td>
                    <td>QJob</td>
                    <td>QJobProg</td>
                    <td>QAlloc</td>
                    <td>UJobProgSuperUser</td>
                    <td>UAllocSuperUser</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($asuser_list as $asuser) {?>
                    <tr>
                        <td><?php echo $asuser['UserName']; ?></td>
                        <td><?php echo $asuser['UMenu']; ?></td>
                        <td><?php echo $asuser['MMenu']; ?></td>
                        <td><?php echo $asuser['QMenu']; ?></td>
                        <td><?php echo $asuser['UClient']; ?></td>
                        <td><?php echo $asuser['UJob']; ?></td>
                        <td><?php echo $asuser['UJobProg']; ?></td>
                        <td><?php echo $asuser['UAlloc']; ?></td>
                        <td><?php echo $asuser['QClient']; ?></td>
                        <td><?php echo $asuser['QJob']; ?></td>
                        <td><?php echo $asuser['QJobProg']; ?></td>
                        <td><?php echo $asuser['QAlloc']; ?></td>
                        <td><?php echo $asuser['UJobProgSuperUser']; ?></td>
                        <td><?php echo $asuser['UAllocSuperUser']; ?></td>
                        <td>
                            <button class="btn btn-default edit_btn" type="button"  attrid="<?php echo $asuser['ID']; ?>">Edit</button>
                            <button class="btn btn-default delete_btn"   type="button"  attrid="<?php echo $asuser['ID']; ?>">Delete</button>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </article>
</div>
<script>
    $(function () {
        $('#asuser_table').DataTable({
            order: [[0, "asc"]]
        });
        $('#asuser_table tbody').on('click', ".delete_btn", function () {
            if (confirm("確認要刪除嗎？")) {
                var id = $(this).attr('attrid');
                location.href = "<?php echo base_url('asuser/delete') ?>/" + id;
            }
        });
        $('#asuser_table tbody').on('click', ".edit_btn", function () {
            var id = $(this).attr('attrid');
            location.href = "<?php echo base_url('asuser/edit') ?>/" + id;
        });
    });
</script>
