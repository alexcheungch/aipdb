<link href="<?php echo base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Job Progress</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">List</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <button type="button" id="export_table">export xlsx</button><br /><br />
        <table id="coderesource_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>JobCode</td>
                    <td>S1</td>
                    <td></td>
                    <td>S2</td>
                    <td></td>
                    <td>S3</td>
                    <td></td>
                    <td>S4</td>
                    <td></td>
                    <td>S5</td>
                    <td></td>
                    <td>S6</td>
                    <td></td>
                    <td>SR</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
            <?php 
            if($JobProg_list && count($JobProg_list)>0){
            foreach ($JobProg_list as $JobProgMtn) {
            ?>
                <tr>
                    <td><?php echo $JobProgMtn['ID'];?></td>
                    <td><?php echo $JobProgMtn['JobCode'];?></td>
                    <td>
                        <?php if($JobProgMtn['S1DCok']==0):?>
                            <span class="step_info"></span>
                            <?php elseif($JobProgMtn['S1DCok']==1):?>
                            <span class="step_info success_info"></span>
                        <?php endif;?>
                    </td>
                    <td><?php echo $JobProgMtn['S1DCStaff'];?></td>
                    <td>
                        <?php if($JobProgMtn['S2DDok']==0):?>
                            <span class="step_info"></span>
                            <?php elseif($JobProgMtn['S2DDok']==1):?>
                            <span class="step_info success_info"></span>
                        <?php endif;?>
                    </td>
                    <td><?php echo $JobProgMtn['S2DDStaff'];?></td>
                    <td>
                        <?php if($JobProgMtn['S3ACok']==0):?>
                            <span class="step_info"></span>
                            <?php elseif($JobProgMtn['S3ACok']==1):?>
                            <span class="step_info success_info"></span>
                        <?php endif;?>
                    </td>
                    <td><?php echo $JobProgMtn['S3ACStaff1'];?></td>
                    <td>
                        <?php if($JobProgMtn['S4FSRok']==0):?>
                            <span class="step_info"></span>
                            <?php elseif($JobProgMtn['S4FSRok']==1):?>
                            <span class="step_info success_info"></span>
                        <?php endif;?>
                    </td>
                    <td><?php echo $JobProgMtn['S4FSRStaff'];?></td>
                    <td>
                        <?php if($JobProgMtn['S5FSFok']==0):?>
                            <span class="step_info"></span>
                            <?php elseif($JobProgMtn['S5FSFok']==1):?>
                            <span class="step_info success_info"></span>
                        <?php endif;?>
                    </td>
                    <td><?php echo $JobProgMtn['S5FSFDNIssuedBy'];?></td>
                    <td>
                        <?php if($JobProgMtn['S6DFok']==0):?>
                            <span class="step_info"></span>
                            <?php elseif($JobProgMtn['S6DFok']==1):?>
                            <span class="step_info success_info"></span>
                        <?php endif;?>
                    </td>
                    <td><?php echo $JobProgMtn['S6DFFiledStaff'];?></td>
                    <td>
                        <?php if($JobProgMtn['SRDRok']==0):?>
                            <span class="step_info"></span>
                            <?php elseif($JobProgMtn['SRDRok']==1):?>
                            <span class="step_info success_info"></span>
                        <?php endif;?>
                    </td>                   
                    <td>
                        <button class="btn btn-default edit_btn" type="button"  attrid="<?php echo $JobProgMtn['JobCode'];?>">Edit</button>
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
        "aaSorting": [[ 0, "desc" ]],
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 2 ] },
            { "bSortable": false, "aTargets": [ 3 ] },
            { "bSortable": false, "aTargets": [ 4 ] },
            { "bSortable": false, "aTargets": [ 4 ] },
            { "bSortable": false, "aTargets": [ 5 ] },
            { "bSortable": false, "aTargets": [ 6 ] },
            { "bSortable": false, "aTargets": [ 7 ] },
            { "bSortable": false, "aTargets": [ 8 ] },
            { "bSortable": false, "aTargets": [ 9 ] },
            { "bSortable": false, "aTargets": [ 10 ] },
            { "bSortable": false, "aTargets": [ 11 ] },
            { "bSortable": false, "aTargets": [ 12 ] },
            { "bSortable": false, "aTargets": [ 13 ] },
            { "bSortable": false, "aTargets": [ 14 ] },
            { "bSortable": false, "aTargets": [ 15 ] },
        ],
    });
    $('#coderesource_table tbody').on( 'click', ".edit_btn", function () {
        var id=$(this).attr('attrid');
        location.href = "<?php echo base_url('JobProg/edit') ?>/"+id;
    });

    function s2ab(s) {
        if(typeof ArrayBuffer !== 'undefined') {
            var buf = new ArrayBuffer(s.length);
            var view = new Uint8Array(buf);
            for (var i=0; i!=s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
                return buf;
        } else {
            var buf = new Array(s.length);
            for (var i=0; i!=s.length; ++i) buf[i] = s.charCodeAt(i) & 0xFF;
            return buf;
        }
    }

    function export_table_to_excel(id, type, fn) {
        var wb = XLSX.utils.table_to_book(document.getElementById(id), {sheet:"Sheet JS"});
        var wbout = XLSX.write(wb, {bookType:type, bookSST:true, type: 'binary'});
        var fname = fn || 'export_excel.' + type;
        try {
            saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), fname);
        } catch(e) { if(typeof console != 'undefined') console.log(e, wbout); }
        return wbout;
    }
    
    $("#export_table").click(function(){
        export_table_to_excel('coderesource_table','xlsx')
    });

});
</script>
