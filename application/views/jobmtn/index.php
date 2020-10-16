<link href="<?php echo base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Job Maintenance</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">List</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <div class="clearfix">
            <div class="pull-right"><button type="button" onclick="window.location.href='JobMtn/create'">+ add</button><br><br></div>
        </div>
        <table id="coderesource_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>Job Code</td>
                    <td>Client name (limited to first 15 character)</td>
                    <td>Job Nature</td>
                    <td>Period From</td>
                    <td>Period To</td>
                    <td>AS deadline</td>
                    <td>Job Deadline</td>
                    <td>Days left</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody id="tableData">
            <!-- <?php 
            if($JobMtn_list && count($JobMtn_list)>0){
            foreach ($JobMtn_list as $JobMtn) {
            ?>
                <tr>
                	<td><?php echo $JobMtn['JobCode'];?></td>
                    <td><?php echo $JobMtn['ClientMtn'];?></td>
                    <td><?php echo $JobMtn['ClientName'];?></td>
                    <td><?php echo $JobMtn['JobPeriodFrom'];?></td>
                    <td><?php echo $JobMtn['JobPeriodTo'];?></td>
                    <td><?php echo $JobMtn['WorkingDeadline'];?></td>
                    <td><?php echo $JobMtn['JobDeadline'];?></td>
                    <td><?php echo $JobMtn['WorkingDeadline'];?></td>
                    <td>
                        <button class="btn btn-default edit_btn" type="button"  attrid="<?php echo $JobMtn['ID'];?>">Edit</button>
                        <button class="btn btn-default delete_btn"   type="button"  attrid="<?php echo $JobMtn['ID'];?>">Delete</button>
                        <button class="btn btn-default prog_btn"   type="button"  attrid="<?php echo $JobMtn['JobCode'];?>">Job Progress</button>
                        <button class="btn btn-default allocation_btn"   type="button"  attrid="<?php echo $JobMtn['JobCode'];?>">Allocation</button>
                    </td>
                </tr>
            <?php }}?> -->
            </tbody>
        </table>
    </article>
</div>
<script>
var uploadurl ="";
$(function () {
    var JobMtn_list = <?php echo json_encode($JobMtn_list); ?>;
    var clientList = <?php echo json_encode($clientList); ?>;
    var todyDate=new Date();    
    var html='';    
    for(var i=0; i<JobMtn_list.length; i++){
        var ClientName='';
        for(var j=0; j<clientList.length; j++){
            if(JobMtn_list[i].ClientCode1 == clientList[j].ClientCode1){
                ClientName=clientList[j].ClientName.substr(0,15);
            }
        }
        var daysLeft = DateDiff(getMyDate(todyDate),JobMtn_list[i].WorkingDeadline)
        html+='<tr>'+
            '<td>'+JobMtn_list[i].JobCode+'</td>'+
            '<td>'+ClientName+'</td>'+
            '<td>'+JobMtn_list[i].ClientName+'</td>'+
            '<td>'+JobMtn_list[i].JobPeriodFrom+'</td>'+
            '<td>'+JobMtn_list[i].JobPeriodTo+'</td>'+
            '<td>'+JobMtn_list[i].WorkingDeadline+'</td>'+
            '<td>'+JobMtn_list[i].JobDeadline+'</td>'+
            '<td>'+daysLeft+'</td>'+
            '<td>'+
                '<button class="btn btn-default edit_btn" type="button"  attrid="'+JobMtn_list[i].ID+'">Edit</button>'+
                '<button class="btn btn-default delete_btn"   type="button"  attrid="'+JobMtn_list[i].ID+'">Delete</button>'+
                '<button class="btn btn-default prog_btn"   type="button"  attrid="'+JobMtn_list[i].JobCode+'">Job Progress</button>'+
                '<button class="btn btn-default allocation_btn"   type="button"  attrid="'+JobMtn_list[i].JobCode+'">Allocation</button>'+
            '</td>'+
        '</tr>';
    }
    $("#tableData").html(html);    

    function DateDiff(sDate, eDate) {
    　　var date1 = new Date(sDate);
    　　var date2 = new Date(eDate);
    　　var date3=date2.getTime()-date1.getTime();
    　　var days=Math.floor(date3/(24*3600*1000));
    　　return days;
    }


    function getMyDate(str){
        var oDate = new Date(str),
            oYear = oDate.getFullYear(),
            oMonth = oDate.getMonth()+1,
            oDay = oDate.getDate(),
            oHour = oDate.getHours(),
            oMin = oDate.getMinutes(),
            oSen = oDate.getSeconds(),
            oTime = oYear +'-'+ getzf(oMonth) +'-'+ getzf(oDay);
        return oTime;
    };
    
    function getzf(num){
        if(parseInt(num) < 10){
            num = '0'+num;
        }
        return num;
    }

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
