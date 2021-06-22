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
        <div class="clearfix">
            <div class="pull-right"><button type="button" onclick="window.location.href='ClientMtn/create'">+ add</button></div>
            <button type="button" id="export_table">export xlsx</button><br /><br />
        </div>
        <table id="coderesource_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>Code1</td>
                    <td>Name </td>
                    <td>Legal Entity </td>
                    <td>Normal Year End Date </td>
                    <td>Non tax deadline nature </td>
                    <td>Client Status </td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
            <?php 
            if($ClientMtn_list && count($ClientMtn_list)>0){
            foreach ($ClientMtn_list as $ClientMtn) {
            ?>
                <tr>
                	<td><?php echo $ClientMtn['ClientCode1'];?>-<?php echo $ClientMtn['ClientCode2'];?>/<?php echo $ClientMtn['ClientCode3'];?></td>
                    <td><?php echo $ClientMtn['ClientName'];?></td>
                    <td><?php echo $ClientMtn['ClientLegalEntity'];?></td>
                    <td>
                        <?php 
//                            $Date = date_parse_from_format('Y-m-d',$ClientMtn['NormalYearEndDate']);
//                            $NormalYearEndDate = $Date['month'] .'-'. $Date['day'];
                            $NormalYearEndDate = explode('-', $ClientMtn['NormalYearEndDate']);
                            if (count($NormalYearEndDate) == 3) {
                                echo $NormalYearEndDate[1] .'-'. $NormalYearEndDate[2];
                            } else {
                                echo $ClientMtn['NormalYearEndDate'];
                            }
                        ?>
                    </td>
                    <td><?php echo $ClientMtn['NonTaxDeadlineNature'];?></td>
                    <td><?php echo $ClientMtn['LastClientStatus'];?></td>
                    <td>
                        <button class="btn btn-default edit_btn" type="button"  attrid="<?php echo $ClientMtn['ID'];?>">Edit</button>
                        <button class="btn btn-default delete_btn"   type="button"  attrid="<?php echo $ClientMtn['ID'];?>">Delete</button>
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
            location.href = "<?php echo base_url('ClientMtn/delete') ?>/"+id;
        }
    });
  	$('#coderesource_table tbody').on( 'click', ".edit_btn", function () {
        var id=$(this).attr('attrid');
        location.href = "<?php echo base_url('ClientMtn/edit') ?>/"+id;
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
