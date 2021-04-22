<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Client</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Edit</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('ClientMtn/save')?>" method="POST" id="ClientMtn_form" class="form form-horizontal">
            <input type="hidden" name="operate" value="edit">
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Code:</label>
                <div class="formControls col-xs-10 col-sm-10">
                    <input type="text" class="input-text" style=" display: inline-block; width: 150px;" id="ClientCode1" name="ClientCode1" readonly value="<?php echo $data['ClientCode1'];?>">
                    -
                    <input type="text" class="input-text" style="width: 150px;" id="ClientCode2" name="ClientCode2" value="<?php echo $data['ClientCode2'];?>">
                    / 
                    <select name="ClientCode3">
                        <?php foreach ($sys_param['ClientCode3'] as $value) {
                            $select = '';
                            if ($value == $data['ClientCode3']) {
                                $select = 'selected';
                            }
                            echo '<option value="'.$value.'" '.$select.'>'.$value.'</option>';
                        }?>
                    </select>
                 </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Name:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" id="ClientName" name="ClientName" value="<?php echo $data['ClientName'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Legal Entity:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select name="ClientLegalEntity">
                        <?php foreach ($sys_param['ClientLegalEntity'] as $value) {
                            $select = '';
                            if ($value == $data['ClientLegalEntity']) {
                                $select = 'selected';
                            }
                            echo '<option value="'.$value.'" '.$select.'>'.$value.'</option>';
                        }?>
                    </select>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Jurisdiction:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select name="ClientJurisdiction">
                        <?php foreach ($sys_param['ClientJurisdiction'] as $value) {
                            $select = '';
                            if ($value == $data['ClientJurisdiction']) {
                                $select = 'selected';
                            }
                            echo '<option value="'.$value.'" '.$select.'>'.$value.'</option>';
                        }?>
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Date of Incorporation:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text date" name="DateOfIncorp" id="DateOfIncorp" value="<?php echo $data['DateOfIncorp'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Normal Year End Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text date" name="NormalYearEndDate" id="NormalYearEndDate" 
                        value="<?php 
//                                $Date = date_parse_from_format('Y-m-d',$data['NormalYearEndDate']);
//                                $NormalYearEndDate = $Date['month'] .'-'. $Date['day'];
                                echo $data['NormalYearEndDate'];
                            ?>" 
                        readonly>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Non Tax Deadline | Nature:</label>
                <div class="formControls col-xs-3 col-sm-3" value="<?php echo $data['NonTaxDeadlineNature'];?>">
                    <select name="NonTaxDeadlineNature" id="NonTaxDeadlineNature">
                        <?php foreach ($sys_param['NonTaxDeadlineNature'] as $value) {
                            $select = '';
                            if ($value == $data['NonTaxDeadlineNature']) {
                                $select = 'selected';
                            }
                            echo '<option value="'.$value.'" '.$select.'>'.$value.'</option>';
                        }?>
                    </select>
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text date" 
                        value="<?php 
//                                $Date = date_parse_from_format('Y-m-d',$data['NonTaxDeadlineDate']);
//                                $NonTaxDeadlineDate = $Date['month'] .'-'. $Date['day'];
                                echo $data['NonTaxDeadlineDate'];
                            ?>" 
                        name="NonTaxDeadlineDate" id="NonTaxDeadlineDate" readonly>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Status | Last:</label>
                <div class="formControls col-xs-3 col-sm-3" value="<?php echo $data['LastClientStatus'];?>">
                    <select name="LastClientStatus" id="LastClientStatus">
                        <?php foreach ($sys_param['LastClientStatus'] as $value) {
                            $select = '';
                            if ($value == $data['LastClientStatus']) {
                                $select = 'selected';
                            }
                            echo '<option value="'.$value.'" '.$select.'>'.$value.'</option>';
                        }?>
                    </select>
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text date" name="LastClientStatusDate" id="LastClientStatusDate" readonly value="<?php echo $data['LastClientStatusDate'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">AC Manager:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select class="AC_Manager" id="AcMgr" name="AcMgr">
                    </select>
                </div>
            </div>
             <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="edit_btn" value="Save" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('ClientMtn');?>">Cancel</a>
                </div>
            </div>
        </form>
    </article>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap-datepicker.css')?>">
<script type="text/javascript" src="<?php echo base_url('/lib/bootstrap-datepicker/bootstrap-datepicker.js')?>"></script>
<script>
$(function () {
    var acMgr= <?php echo json_encode($acMgr); ?>; 
    var ACManagerHtml='';
    for(var i=0; i<acMgr.length; i++){
        ACManagerHtml+='<option>'+acMgr[i].AcMgr+'</option>';
    }
    $(".AC_Manager").html(ACManagerHtml);
    $(".AC_Manager").val("<?php echo $data['AcMgr']?>");
    $("#DateOfIncorp,#LastClientStatusDate").datetimepicker({
        todayBtn: 1,
        startView: 2,
        minView: 2,
        autoclose: 1,
        format: 'yyyy-mm-dd',
        autoclose: true,
        clearBtn: true
    });
    var datetimepicker2 = $("#NormalYearEndDate,#NonTaxDeadlineDate").datetimepicker({
        ttile: '',
        todayBtn: 1,
        startView: 2,
        maxView: 2,
        minView: 2,
        autoclose: 1,
        format: 'mm-dd',
        autoclose: true,
        clearBtn: true
    }).on('show', function(e) {
        setTimeout(function(){
            var month = $(".datetimepicker").eq(2).find('.switch').html().split(' ')[1]
            $(".datetimepicker").eq(2).find('.switch').html(month)
            
            var month = $(".datetimepicker").eq(3).find('.switch').html().split(' ')[1]
            $(".datetimepicker").eq(3).find('.switch').html(month)
        }, 1)
    });
    $(".datetimepicker").eq(2).find('.prev').click(function(){
        setTimeout(function(){
        var month = $(".datetimepicker").eq(2).find('.switch').html().split(' ')[1]
        $(".datetimepicker").eq(2).find('.switch').html(month)
        }, 1)
    });
    $(".datetimepicker").eq(2).find('.next').click(function(){
        setTimeout(function(){
        var month = $(".datetimepicker").eq(2).find('.switch').html().split(' ')[1]
        $(".datetimepicker").eq(2).find('.switch').html(month)
        }, 1)
    });
    $(".datetimepicker").eq(3).find('.prev').click(function(){
        setTimeout(function(){
        var month = $(".datetimepicker").eq(3).find('.switch').html().split(' ')[1]
        $(".datetimepicker").eq(3).find('.switch').html(month)
        }, 1)
    });
    $(".datetimepicker").eq(3).find('.next').click(function(){
        setTimeout(function(){
        var month = $(".datetimepicker").eq(3).find('.switch').html().split(' ')[1]
        $(".datetimepicker").eq(3).find('.switch').html(month)
        }, 1)
    });

    NonTaxDeadlineDate();
    $("#NonTaxDeadlineNature").change(function(){
        NonTaxDeadlineDate()
    });
    function NonTaxDeadlineDate(){
        var val = $("#NonTaxDeadlineNature").val();
        if(val == 'x'){
            $("#NonTaxDeadlineDate").val('')
            $("#NonTaxDeadlineDate").prop('disabled', true)
        }else{
            $("#NonTaxDeadlineDate").prop('disabled', false)
        }
    };

    LastClientStatus();
    $("#LastClientStatus").change(function(){
        LastClientStatus()
    });
    function LastClientStatus(){
        var val = $("#LastClientStatus").val();
        if(val == '-'){
            $("#LastClientStatusDate").val('')
            $("#LastClientStatusDate").prop('disabled', true)
        }else{
            $("#LastClientStatusDate").prop('disabled', false)
        }
    };

    $("#edit_btn").click(function () {
        let title_ch = $.trim($("#ClientName").val());
        if (!title_ch) {
            alert("請填寫 Client name");
            return false;
        }
        let ClientCode1 = $.trim($("#ClientCode1").val());
        if (!ClientCode1) {
            alert("請填寫 ClientCode1");
            return false;
        }
        // let ClientCode2 = $.trim($("#ClientCode2").val());
        // if (!ClientCode2) {
        //     alert("請填寫 ClientCode2");
        //     return false;
        // }
        let DateOfIncorp = $.trim($("#DateOfIncorp").val());
        if (!DateOfIncorp.split('-')[1] || DateOfIncorp.split('-')[0].length != 4) {
            alert("請填寫正確的 DateOfIncorp");
            return false;
        }
        let NormalYearEndDate = $.trim($("#NormalYearEndDate").val());
        if (!NormalYearEndDate) {
            alert("請填寫 NormalYearEndDate");
            return false;
        }
        // let NonTaxDeadlineDate = $.trim($("#NonTaxDeadlineDate").val());
        // if (!NonTaxDeadlineDate) {
        //     alert("請填寫 NonTaxDeadlineDate");
        //     return false;
        // }
        // let LastClientStatusDate = $.trim($("#LastClientStatusDate").val());
        // if (!LastClientStatusDate) {
        //     alert("請填寫 LastClientStatusDate");
        //     return false;
        // }
        $("#ClientMtn_form").submit();
    });
});

</script>
