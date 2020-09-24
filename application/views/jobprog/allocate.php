<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Job Prog</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Allocate</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('JobMtn/save')?>" method="POST" id="JobMtn_form" class="form form-horizontal">
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Job ID:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Client Name:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Job Nature:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Period | From:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">| To:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">AS Deadline:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Job Deadline:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Days Left:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Quotatin Amount:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">DN | No:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Amount:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Received Date:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
            </div>
            <h3>Marketing Scheme</h3>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">AC Manager 1:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">AC Manager 2:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select class="AC_Manager">
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">%:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" value="6%">
                </div>
                <label class="form-label col-xs-2 col-sm-2">%:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" value="4%">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Entitled Amount:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Entitled Amount:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <h3>Staff Incentive / Bonus Schem</h3>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Overall Bonus%:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" value="30%">
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                    <a class="btn btn-primary" href="<?php echo base_url('JobMtn');?>">返回</a>
                </div>
            </div>
        </form>
        <br />
        <br />
        
        <div id="rootwizard">
            <div class="cm-step">
                <ul>
                    <li><a href="#tab1" data-toggle="tab">Step1</a></li>
                    <li><a href="#tab2" data-toggle="tab">Step2</a></li>
                    <li><a href="#tab3" data-toggle="tab">Step3</a></li>
                    <li><a href="#tab4" data-toggle="tab">Step4</a></li>
                    <li><a href="#tab5" data-toggle="tab">Step5</a></li>
                    <li><a href="#tab6" data-toggle="tab">Step6</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane" id="tab1">
                    <div class="form form-horizontal">
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Entitled % | Set:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">| Adj:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">CS Factor:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2"></label>
                            <div class="formControls col-xs-10 col-sm-10">                                
                                <label>
                                    <input type="checkbox"> S1 ok
                                </label>
                            </div>
                        </div>
                    </div>   
                    <div class="row cl">
                        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                            <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                            <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">返回</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab2">
                    <div class="form form-horizontal">
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Entitled % | Set:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">| Adj:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">CS Factor:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2"></label>
                            <div class="formControls col-xs-10 col-sm-10">                                
                                <label>
                                    <input type="checkbox"> S2 ok
                                </label>
                            </div>
                        </div>
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">返回</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab3">
                    <div class="form form-horizontal">
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Step 3 %:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">CS Factor:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                1
                                <select class="select_staff">
                                </select>
                            </div>
                            <div class="formControls col-xs-3 col-sm-3">
                                2
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Entitled %:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Entitled Amount:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2"></label>
                            <div class="formControls col-xs-10 col-sm-10">                                
                                <label>
                                    <input type="checkbox"> S3 ok
                                </label>
                            </div>
                        </div>
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">返回</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab4">
                    <div class="form form-horizontal">
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Entitled % | Set:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">| Adj:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">CS Factor:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2"></label>
                            <div class="formControls col-xs-10 col-sm-10">                                
                                <label>
                                    <input type="checkbox"> S4 ok
                                </label>
                            </div>
                        </div>
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">返回</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab5">
                    <div class="form form-horizontal">
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Entitled % | Set:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">| Adj:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">CS Factor:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2"></label>
                            <div class="formControls col-xs-10 col-sm-10">                                
                                <label>
                                    <input type="checkbox"> S5 ok
                                </label>
                            </div>
                        </div>
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">返回</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab6">
                    <div class="form form-horizontal">
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Packed Up:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <textarea class="input-textarea" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2"></label>
                            <div class="formControls col-xs-10 col-sm-10">                                
                                <label>
                                    <input type="checkbox"> S6 ok
                                </label>
                            </div>
                        </div>
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn" value="保存" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">返回</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>

<script>
var staffList = <?php echo json_encode($staffList); ?>;
var docLoc    = <?php echo json_encode($docLoc); ?>;
var acMgr     = <?php echo json_encode($acMgr); ?>;
var sentOutVia= <?php echo json_encode($sentOutVia); ?>;
var clientList= <?php echo json_encode($clientList); ?>; 
var uploadurl ="";
$(function () {
	$("#create_btn").click(function () {
        let title_ch = $.trim($("#clientname").val());
        if (!title_ch) {
            alert("請填寫 Client name");
            return false;
        }
        let title_en = $.trim($("#clientlegalentity").val());
        if (!title_en) {
            alert("請填寫Legal Entity");
            return false;
        }
        let resource_link = $.trim($("#acmgr").val());
        if (!resource_link) {
            alert("請填寫 Account manager");
            return false;
        }
        $("#JobMtn_form").submit();        
    });
});

var clientCode=[];
for(var i=0; i<clientList.length; i++){
    clientCode.push({value: clientList[i].clientcode1, data: clientList[i].clientname, clientcode2: clientList[i].clientcode2, clientcode3: clientList[i].clientcode3, NormalYearEndDate: clientList[i].NormalYearEndDate, NonTaxDeadlineDate: clientList[i].NonTaxDeadlineDate});
}

$('#autocomplete_clientCode1').autocomplete({
    lookup: clientCode,
    onSelect: function (suggestion) {
        $("#client_Code2").val(suggestion.clientcode2);
        $("#client_code3").val(suggestion.clientcode3);
        $("#client_name").val(suggestion.data);
        $("#NormalYearEndDate").val(suggestion.NormalYearEndDate);
        $("#NonTaxDeadlineDate").val(suggestion.NonTaxDeadlineDate);
    }
});

$('#autocomplete_clientCode1').bind('input propertychange', function(){
    var value = $(this).val();
    if(!value){
        $("#client_Code2").val('');
        $("#client_code3").val('');
        $("#client_name").val('');
        $("#NormalYearEndDate").val('');
        $("#NonTaxDeadlineDate").val('');
    }
});

var officeHandledHtml='';
for(var i=0; i<docLoc.length; i++){
    officeHandledHtml+='<option>'+docLoc[i].DocLoc+'</option>';
}
$(".office_handled").html(officeHandledHtml);

var docTransferHtml='';
for(var i=0; i<sentOutVia.length; i++){
    docTransferHtml+='<option>'+sentOutVia[i].SentOutMeans+'</option>';
}
$(".doc_transfer").html(docTransferHtml);

var staffHtml='';
for(var i=0; i<staffList.length; i++){
     staffHtml+='<option value='+staffList[i].StaffCode+'>'+staffList[i].StaffCode+' | '+ (staffList[i].StaffName == null ? '': staffList[i].StaffName) +'</option>';
}
$(".select_staff").html(staffHtml);

var ACManagerHtml='';
for(var i=0; i<acMgr.length; i++){
    ACManagerHtml+='<option>'+acMgr[i].AcMgr+'</option>';
}
$(".AC_Manager").html(ACManagerHtml);

$('#rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
</script>