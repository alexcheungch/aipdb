<link href="<?php echo base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Client</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">List</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <table id="coderesource_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>RecordDate</td>
                    <td>ClientCode1</td>
                    <td>JobNature</td>
                    <td>操作</td>
                </tr>
            </thead>
            <tbody>
            <?php 
            if($JobMtn_list && count($JobMtn_list)>0){
            foreach ($JobMtn_list as $JobMtn) {
            ?>
                <tr>
                	<td><?php echo $JobMtn['RecordDate'];?></td>
                    <td><?php echo $JobMtn['ClientCode1'];?></td>
                    <td><?php echo $JobMtn['JobNature'];?></td>
                    <td>
                        <button class="btn btn-default edit_btn" type="button"  attrid="<?php echo $JobMtn['ID'];?>">編輯</button>
                        <button class="btn btn-default delete_btn"   type="button"  attrid="<?php echo $JobMtn['ID'];?>">刪除</button>
                        <button class="btn btn-default prog_btn"   type="button"  attrid="<?php echo $JobMtn['JobCode'];?>">工作進程</button>
                        <button class="btn btn-default allocation_btn"   type="button"  attrid="<?php echo $JobMtn['JobCode'];?>">Allocation</button>
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
        if (confirm("刪除此條記錄會連同刪除關聯的JobProg和Allocation，確認要刪除嗎？")) {
            var id=$(this).attr('attrid');
            location.href = "<?php echo base_url('JobMtn/delete') ?>/"+id;
        }
    });
    $('#coderesource_table tbody').on( 'click', ".edit_btn", function () {
        var id=$(this).attr('attrid');
        location.href = "<?php echo base_url('JobMtn/edit') ?>/"+id;
    });
    $('#coderesource_table tbody').on( 'click', ".prog_btn", function () {
        var jobcode=$(this).attr('attrid');
        location.href = "<?php echo base_url('JobProg/edit') ?>/"+jobcode;
    });
    $('#coderesource_table tbody').on( 'click', ".allocation_btn", function () {
        var jobcode=$(this).attr('attrid');
        location.href = "<?php echo base_url('Allocation/edit') ?>/"+jobcode;
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
