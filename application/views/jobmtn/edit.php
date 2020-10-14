<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Job Maintenance</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Edit</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('JobMtn/save')?>" method="POST" id="JobMtn_form" class="form form-horizontal">
            <input type="hidden" name="ID" value="<?php echo $data['ID'];?>"/>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Record Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="RecordDate" id="RecordDate" readonly value="<?php echo $data['RecordDate'];?>">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Client Code:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" id="ClientCode1" name="ClientCode1" value="<?php echo $data['ClientCode1'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">JobNature:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select name="JobNature">
                         <?php foreach ($sys_param['JobNature'] as $value) {
                            $select = '';
                            if ($value == $data['JobNature']) {
                                $select = 'selected';
                            }
                            echo '<option value="'.$value.'" '.$select.'>'.$value.'</option>';
                        }?>
                     </select>
                </div> 
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">JobPeriodFrom:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobPeriodFrom" id="JobPeriodFrom" readonly value="<?php echo $data['JobPeriodFrom'];?>">
                </div>
                <label class="form-label col-xs-2 col-sm-2">JobPeriodTo:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobPeriodTo" id="JobPeriodTo" readonly value="<?php echo $data['JobPeriodTo'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">OfficialDeadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="OfficialDeadline" id="OfficialDeadline" readonly value="<?php echo $data['OfficialDeadline'];?>">
                </div>
                <label class="form-label col-xs-2 col-sm-2">JobNo:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobNo" id="JobNo" value="<?php echo $data['JobNo'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QuotationVia:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationVia" id="QuotationVia" value="<?php echo $data['QuotationVia'];?>">
                </div>
                <label class="form-label col-xs-2 col-sm-2">QuotationSentDate:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationSentDate" id="QuotationSentDate" readonly value="<?php echo $data['QuotationSentDate'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QuotationProposedFee:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationProposedFee" id="QuotationProposedFee" value="">
                </div>
                <label class="form-label col-xs-2 col-sm-2">QuotationConfirmedDate:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationConfirmedDate" id="QuotationConfirmedDate" readonly value="<?php echo $data['QuotationConfirmedDate'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QuotationAgreedFee:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationAgreedFee" id="QuotationAgreedFee" value="">
                </div>
                <label class="form-label col-xs-2 col-sm-2">JobCode:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobCode" id="JobCode" value="<?php echo $data['JobCode'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">AS Deadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="WorkingDeadline" id="WorkingDeadline" readonly value="<?php echo $data['WorkingDeadline'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">JobDeadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobDeadline" id="JobDeadline" readonly value="<?php echo $data['JobDeadline'];?>">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="create_btn" value="Save" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('JobMtn');?>">Cancel</a>
                </div>
            </div>
            <!-- <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <a class="btn btn-primary" href="#">Return</a>
                    <input type="button" id="" value="Delete" class="btn btn-primary radius">
                </div>
            </div> -->
        </form>
    </article>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap-datepicker.css')?>">
<script type="text/javascript" src="<?php echo base_url('/lib/bootstrap-datepicker/bootstrap-datepicker.js')?>"></script>
<script>
var uploadurl ="";
$(function () {

    $("#QuotationProposedFee").val(formatFee(<?php echo $data['QuotationProposedFee'];?>));
    $("#QuotationAgreedFee").val(formatFee(<?php echo $data['QuotationAgreedFee'];?>));

    function formatFee(value){
        return value.toLocaleString('en-US', {
            style: 'currency',
            currency: 'USD',
        });
    }

    $("#RecordDate,#JobPeriodFrom,#JobPeriodTo,#OfficialDeadline,#QuotationSentDate,#QuotationConfirmedDate,#WorkingDeadline,#JobDeadline").datetimepicker({
        todayBtn: 1,
        startView: 2,
        minView: 2,
        autoclose: 1,
        format: 'yyyy-mm-dd'
    });
    $("#create_btn").click(function () {
        let ClientCode1 = $.trim($("#ClientCode1").val());
        if (!ClientCode1) {
            alert("請填寫 ClientCode1");
            return false;
        }
        let JobPeriodTo = $.trim($("#JobPeriodTo").val());
        if (!JobPeriodTo) {
            alert("請填寫 JobPeriodTo");
            return false;
        }
        let OfficialDeadline = $.trim($("#OfficialDeadline").val());
        if (!OfficialDeadline) {
            alert("請填寫 OfficialDeadline");
            return false;
        }
        let JobNo = $.trim($("#JobNo").val());
        if (!JobNo) {
            alert("請填寫 JobNo");
            return false;
        }
        let QuotationAgreedFee = $.trim($("#QuotationAgreedFee").val());
        if (!QuotationAgreedFee) {
            alert("請填寫 QuotationAgreedFee");
            return false;
        }
        let WorkingDeadline = $.trim($("#WorkingDeadline").val());
        if (!WorkingDeadline) {
            alert("請填寫 WorkingDeadline");
            return false;
        }
        let JobDeadline = $.trim($("#JobDeadline").val());
        if (!JobDeadline) {
            alert("請填寫 JobDeadline");
            return false;
        }
        $("#JobMtn_form").submit();
    });
});
</script>
