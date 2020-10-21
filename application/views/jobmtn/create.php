<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Job Maintenance</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('JobMtn/save')?>" method="POST" id="JobMtn_form" class="form form-horizontal">
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Record Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="RecordDate" id="RecordDate" readonly>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Client Code:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" id="ClientCode1" name="ClientCode1">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">JobNature:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select name="JobNature">
                     <?php foreach ($sys_param['JobNature'] as $value) {
		           echo '<option value ="'.$value.'">'.$value.'</option>';
	             }?>
                     </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">JobPeriodFrom:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobPeriodFrom" id="JobPeriodFrom" readonly>
                </div>
                <label class="form-label col-xs-2 col-sm-2">JobPeriodTo:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobPeriodTo" id="JobPeriodTo" readonly>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">OfficialDeadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="OfficialDeadline" id="OfficialDeadline" value="2020-10-31" readonly>
                </div>
                <label class="form-label col-xs-2 col-sm-2">JobNo:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobNo" id="JobNo">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QuotationVia:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationVia" id="QuotationVia">
                </div>
                <label class="form-label col-xs-2 col-sm-2">QuotationSentDate:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationSentDate" id="QuotationSentDate" readonly>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QuotationProposedFee:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationProposedFeeVal" id="QuotationProposedFeeVal">
                    <input type="text" class="input-text" name="QuotationProposedFee" id="QuotationProposedFee" hidden>
                </div>
                <label class="form-label col-xs-2 col-sm-2">QuotationConfirmedDate:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationConfirmedDate" id="QuotationConfirmedDate" readonly>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">QuotationAgreedFee:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="QuotationAgreedFeeVal" id="QuotationAgreedFeeVal">
                    <input type="text" class="input-text" name="QuotationAgreedFee" id="QuotationAgreedFee" hidden>
                </div>
                <label class="form-label col-xs-2 col-sm-2">JobCode:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobCode" id="JobCode">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">AS Deadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="WorkingDeadline" id="WorkingDeadline" readonly>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">JobDeadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="JobDeadline" id="JobDeadline" readonly>
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
    var clientList= <?php echo json_encode($clientList); ?>;  

    var clientCode=[];
    for(var i=0; i<clientList.length; i++){
        clientCode.push(clientList[i].ClientCode1);
    }
    $('#ClientCode1').autocomplete({
        lookup: clientCode,
        onSelect: function (suggestion) {
            // console.log('You selected: ' + suggestion.value + ', ' + suggestion.data);
        }
    });

    $("#QuotationProposedFeeVal").focus(function(){
        $("#QuotationProposedFee").val('');
        $(this).val('');
    })
    $("#QuotationAgreedFeeVal").focus(function(){
        $("#QuotationAgreedFee").val('');
        $(this).val('');
    })
    $("#QuotationProposedFeeVal").change(function(){
        $("#QuotationProposedFee").val($(this).val());
        $(this).val(formatFee(Number($(this).val())));
    });

    $("#QuotationAgreedFeeVal").change(function(){
        $("#QuotationAgreedFee").val($(this).val());
        $(this).val(formatFee(Number($(this).val())));
    });
    function formatFee(value){
        if (value) {
        return value.toLocaleString('en-US', {
            style: 'currency',
            currency: 'USD',
        });
        } else { return ' ';};
    }

    $("#RecordDate,#JobPeriodFrom,#JobPeriodTo,#QuotationSentDate,#QuotationConfirmedDate,#JobDeadline").datetimepicker({
        todayBtn: 1,
        startView: 2,
        minView: 2,
        autoclose: 1,
        format: 'yyyy-mm-dd'
    });

    $("#OfficialDeadline").datetimepicker({
        todayBtn: 1,
        startView: 2,
        minView: 2,
        autoclose: 1,
        format: 'yyyy-mm-dd'
    }).on('change',function(e){
        var OfficialDeadline=$("#OfficialDeadline").val();
        var date = new Date(OfficialDeadline.replace(/-/g, '/'));
        var newDate=addDate(date,-59);
        $("#WorkingDeadline").val(newDate);
    });

    var OfficialDeadline=$("#OfficialDeadline").val();
    var date = new Date(OfficialDeadline.replace(/-/g, '/'));
    var newDate=addDate(date,-59);
    $("#WorkingDeadline").val(newDate);
    $("#WorkingDeadline").datetimepicker({
        todayBtn: 1,
        startView: 2,
        minView: 2,
        autoclose: 1,
        format: 'yyyy-mm-dd'
    }).on('change',function(e){
        var WorkingDeadline=$("#WorkingDeadline").val();
        var date = new Date(WorkingDeadline.replace(/-/g, '/'));
        var newDate=addDate(date,59);
        $("#OfficialDeadline").val(newDate);
    });

    function addDate(date, days) {
        if (days == undefined || days == '') {
            days = 1;
        }
        var date = new Date(date);
        date.setDate(date.getDate() + days);
        var month = date.getMonth() + 1;
        var day = date.getDate();
        return date.getFullYear() + '-' + getFormatDate(month) + '-' + getFormatDate(day);
    }

    function getFormatDate(arg) {
        if (arg == undefined || arg == '') {
            return '';
        }

        var re = arg + '';
        if (re.length < 2) {
            re = '0' + re;
        }

        return re;
    }

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

$.ajax({
	type:'GET',
	url:"http://138.197.209.229/aipdb/index.php/clientMtn/getClientbyCode1/H",
	dataType:'json',
	cache: false,
	async: false,
	success : function(data){
		console.log(data);
	},
	error:function(jqXHR){
		console.log(jqXHR);
	}
});

var countries = [
    { value: 'HS Technology', data: 'HS' },
];

$('#autocomplete_clientCode').autocomplete({
    lookup: countries,
    onSelect: function (suggestion) {
        console.log('You selected: ' + suggestion.value + ', ' + suggestion.data);
    }
});
</script>
