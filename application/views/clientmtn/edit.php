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
                    <input type="text" class="input-text" style=" display: inline-block; width: 150px;" id="ClientCode1" readonly value="<?php echo $data['ClientCode1'];?>">
                    -
                    <input type="text" class="input-text" style="width: 150px;" id="ClientCode2" value="<?php echo $data['ClientCode2'];?>">
                    - 
                    <input type="text" class="input-text" style="width: 150px;" id="ClientCode3" value="<?php echo $data['ClientCode3'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Name:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" id="ClientName" value="<?php echo $data['ClientName'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Legal Entity:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select id="ClientLegalEntity" class="client_LegalEntity">
                    </select>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Jurisdiction:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select id="ClientJurisdiction" class="client_Jurisdiction">
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Date of Incorporation:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text date" id="DateOfIncorp" value="<?php echo $data['DateOfIncorp'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Normal Year End Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text date" id="NormalYearEndDate" value="<?php echo $data['NormalYearEndDate'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Non Tax Deadline | Nature:</label>
                <div class="formControls col-xs-3 col-sm-3" value="<?php echo $data['NonTaxDeadlineNature'];?>">
                    <select class="non_TaxDeadlineNature">
                    </select>
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text date" value="<?php echo $data['NonTaxDeadlineDate'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Status | Last:</label>
                <div class="formControls col-xs-3 col-sm-3" value="<?php echo $data['LastClientStatus'];?>">
                    <select id="LastClientStatus" class="last_ClientStatus">
                    </select>
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text date" id="LastClientStatusDate" value="<?php echo $data['LastClientStatusDate'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">AC Manager:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select class="AC_Manager" id="AcMgr">
                    </select>
                </div>
            </div>
             <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="edit_btn" value="保存" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('ClientMtn');?>">返回</a>
                </div>
            </div>
        </form>
    </article>
</div>

<script>
var acMgr= <?php echo json_encode($acMgr); ?>; 
var clientLegalEntity= <?php echo $clientLegalEntity; ?>; 
var clientJurisdiction = <?php echo $clientJurisdiction; ?>;
var nonTaxDeadlineNature = <?php echo $nonTaxDeadlineNature; ?>;
var lastClientStatus = <?php echo $lastClientStatus; ?>;
var uploadurl ="";
$(function () {
    $("#edit_btn").click(function () {
        let title_ch = $.trim($("#clientname").val());
        if (!title_ch) {
            alert("請填寫 Company Name");
            return false;
        }
        let title_en = $.trim($("#clientlegalentity").val());
        if (!title_en) {
            alert("請填寫 Legal Entity");
            return false;
        }
        let resource_link = $.trim($("#acmgr").val());
        if (!resource_link) {
            alert("請填寫 Account Manager");
            return false;
        }
        $("#ClientMtn_form").submit();
    });
});

var ACManagerHtml='';
for(var i=0; i<acMgr.length; i++){
    ACManagerHtml+='<option>'+acMgr[i].AcMgr+'</option>';
}
$(".AC_Manager").html(ACManagerHtml);
$("#AcMgr").val("<?php echo $data['AcMgr'];?>");

var clientLegalEntityHtml='';
for(var i=0; i<clientLegalEntity.length; i++){
    clientLegalEntityHtml+='<option>'+clientLegalEntity[i]+'</option>';
}
$(".client_LegalEntity").html(clientLegalEntityHtml);
$("#ClientLegalEntity").val("<?php echo $data['ClientLegalEntity'];?>");

var clientJurisdictionHtml='';
for(var i=0; i<clientJurisdiction.length; i++){
    clientJurisdictionHtml+='<option>'+clientJurisdiction[i]+'</option>';
}
$(".client_Jurisdiction").html(clientJurisdictionHtml);
$("#ClientJurisdiction").val("<?php echo $data['ClientJurisdiction'];?>");

var nonTaxDeadlineNatureHtml='';
for(var i=0; i<nonTaxDeadlineNature.length; i++){
    nonTaxDeadlineNatureHtml+='<option>'+nonTaxDeadlineNature[i]+'</option>';
}
$(".non_TaxDeadlineNature").html(nonTaxDeadlineNatureHtml);
$("#NonTaxDeadlineNature").val("<?php echo $data['NonTaxDeadlineNature'];?>");

var lastClientStatusHtml='';
for(var i=0; i<lastClientStatus.length; i++){
    lastClientStatusHtml+='<option>'+lastClientStatus[i]+'</option>';
}
$(".last_ClientStatus").html(lastClientStatusHtml);
$("#LastClientStatus").val("<?php echo $data['LastClientStatus'];?>");

</script>