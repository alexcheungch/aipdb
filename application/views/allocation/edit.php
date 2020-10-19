<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Allocation</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('Allocation/save')?>" method="POST" id="Allocation_form" class="form form-horizontal">
            <input type="hidden" name="JobCode" value="<?php echo $jobcode;?>">
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Job ID:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <?php echo $jobMtn['JobCode'];?>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Client Name:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <?php echo $clientMtn['ClientName'];?>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Job Nature:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <?php echo $jobMtn['JobNature'];?>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Period | From:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <?php echo $jobMtn['JobPeriodFrom'];?>
                </div>
                <label class="form-label col-xs-2 col-sm-2">| To:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <?php echo $jobMtn['JobPeriodTo'];?>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">AS Deadline:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <?php echo $jobMtn['WorkingDeadline'];?>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Job Deadline:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <?php echo $jobMtn['JobDeadline'];?>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Days Left:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Quotation Amount:</label>
                <div class="formControls col-xs-3 col-sm-3" id="QuotationAgreedFee">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">DN | No:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Amount:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text" id="countAmount">
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Received Date:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text need_date" name="DNRecvDate" value="<?php echo $data['DNRecvDate'];?>" readonly>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Done:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="checkbox" name="Done" id="Done" value="1" <?php if ($data['Done'] == 1) {echo 'checked';}?>>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Paid:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="checkbox" name="Paid" value="1" <?php if ($data['Paid'] == 1) {echo 'checked';}?>>
                </div>
            </div>
            <h3>Marketing Scheme</h3>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">AC Manager 1:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <?php echo $clientMtn['AcMgr'];?>
                </div>
                <label class="form-label col-xs-2 col-sm-2">AC Manager 2:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select class="AC_Manager" name="MSAcMgrII">
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">%:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" value="<?php if (($data['MSPctI'] != '') && ($data['MSPctI'] != '0')) {echo $data['MSPctI'].'%';} else {echo '5%'; } ?>" name="MSPctI" id="MSPctI">
                </div>
                <label class="form-label col-xs-2 col-sm-2">%:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" value="<?php if (($data['MSPctII'] != '') && ($data['MSPctII'] != '0')) {echo $data['MSPctII'].'%';} else {echo '0%'; } ?>" name="MSPctII" id="MSPctII">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Entitled Amount:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="MSEntitledAmount1" id="MSEntitledAmount1" value="<?php echo $data['MSEntitledAmount1'];?>">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Entitled Amount:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="MSEntitledAmount2" id="MSEntitledAmount2" value="<?php echo $data['MSEntitledAmount2'];?>">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text need_date" name="MSPaidDateI" value="<?php echo $data['MSPaidDateI'];?>" readonly>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text need_date" name="MSPaidDateII" value="<?php echo $data['MSPaidDateII'];?>" readonly>
                </div>
            </div>
            <h3>Staff Incentive / Bonus Schem</h3>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Overall Bonus%:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" id="overallBonus" value="<?php if (($data['SIBSOverallPct'] != '') && ($data['SIBSOverallPct'] != '0')) {echo $data['SIBSOverallPct'].'%';} else {echo '30%'; } ?>" name="SIBSOverallPct">
                </div>
            </div>
        
            <br />
            <br />

            <div id="rootwizard">
                <div class="cm-step">
                    <ul>
                        <li><a href="#tab1" data-toggle="tab">Part 1</a></li>
                        <li><a href="#tab2" data-toggle="tab">Part 2</a></li>
                        <li><a href="#tab3" data-toggle="tab">Part 3</a></li>
                        <li><a href="#tab4" data-toggle="tab">Remarks</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane" id="tab1">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form form-horizontal">
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Staff:</label>
                                        <div class="formControls col-xs-8">
                                            <select class="select_staff" id="jobProg_1">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled % | Set:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" value="<?php if (($data['SIBSS1SetPct'] != '') && ($data['SIBSS1SetPct'] != '0')) {echo $data['SIBSS1SetPct'].'%';} else {echo '11%'; } ?>" name="SIBSS1SetPct" id="SIBSS1SetPct" disabled>                                    
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">| Adj:</label>
                                        <div class="formControls col-xs-8">
                                            <!-- <input type="text" class="input-text" value="<?php if (($data['SIBSS1AdjPct'] != '') && ($data['SIBSS1AdjPct'] != '0')) {echo $data['SIBSS1AdjPct'].'%';} else {echo '-1%'; } ?>" name="SIBSS1AdjPct" id="SIBSS1AdjPct">                   -->
                                            <select class="select_staff" id="setp1_Adj_l">
                                                <option value="-2.5%">-2.5%</option>
                                                <option value="-2%">-2%</option>
                                                <option value="-1.5%">-1.5%</option>
                                                <option value="-1%">-1%</option>
                                                <option value="-0.5%">-0.5%</option>
                                                <option value="0%" selected>0%</option>
                                                <option value="+0.5%">+0.5%</option>
                                                <option value="+1%">+1%</option>
                                                <option value="+1.5%">+1.5%</option>
                                                <option value="+2%">+2%</option>
                                                <option value="+2.5%">+2.5%</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <!-- <input type="text" class="input-text" value="<?php if (($data['SIBSS1CSFtr'] != '') && ($data['SIBSS1CSFtr'] != '0')) {echo $data['SIBSS1CSFtr'];} else {echo '1'; } ?>" name="SIBSS1CSFtr" id="SIBSS1CSFtr">                   -->
                                            <select class="select_staff" id="step1_CSFactor_l">
                                                <option>0.9</option>
                                                <option>0.95</option>
                                                <option selected>1</option>
                                                <option>1.05</option>
                                                <option>1.1</option>
                                                <option>1.125</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled Amount</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS1EntitledAmount" value="<?php echo $data['SIBSS1EntitledAmount'];?>" id="step1_EntitledAmount_l" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Paid Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text need_date" name="SIBSS1PaidDate" value="<?php echo $data['SIBSS1PaidDate'];?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form form-horizontal">
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Staff:</label>
                                        <div class="formControls col-xs-8">
                                            <select class="select_staff" id="jobProg_2">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled % | Set:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS2EntitledAmount" value="<?php echo $data['SIBSS2EntitledAmount'];?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">| Adj:</label>
                                        <div class="formControls col-xs-8">
                                            <!-- <input type="text" class="input-text" name="SIBSS2AdjPct" value="<?php echo $data['SIBSS2AdjPct'];?>"> -->
                                            <select class="select_staff" id="setp1_Adj_r">
                                                <option value="-2.5%">-2.5%</option>
                                                <option value="-2%">-2%</option>
                                                <option value="-1.5%">-1.5%</option>
                                                <option value="-1%">-1%</option>
                                                <option value="-0.5%">-0.5%</option>
                                                <option value="0%" selected>0%</option>
                                                <option value="+0.5%">+0.5%</option>
                                                <option value="+1%">+1%</option>
                                                <option value="+1.5%">+1.5%</option>
                                                <option value="+2%">+2%</option>
                                                <option value="+2.5%">+2.5%</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <!-- <input type="text" class="input-text" name="SIBSS2CSFtr" value="<?php echo $data['SIBSS2CSFtr'];?>"> -->
                                            <select class="select_staff" id="step1_CSFactor_r">
                                                <option>0.9</option>
                                                <option>0.95</option>
                                                <option selected>1</option>
                                                <option>1.05</option>
                                                <option>1.1</option>
                                                <option>1.125</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled Amount</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS1EntitledAmount" value="<?php echo $data['SIBSS1EntitledAmount'];?>" id="step1_EntitledAmount_r" disabled>
                                        </div>
                                    </div> 
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Paid Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text need_date" name="SIBSS2PaidDate" value="<?php echo $data['SIBSS2PaidDate'];?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>                       
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn" value="Save" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="form form-horizontal">
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Step 3 %:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text" name="SIBSS3SetPct" value="<?php echo $data['SIBSS3SetPct'];?>">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">CS Factor:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text" name="SIBSS3CSFtr" value="<?php echo $data['SIBSS3CSFtr'];?>">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    1
                                    <select class="select_staff" id="jobProg_3">
                                    </select>
                                </div>
                                <div class="formControls col-xs-3 col-sm-3">
                                    2
                                    <select class="select_staff" id="jobProg_4">
                                    </select>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Entitled %:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text" name="SIBSS3Staff1Pct" value="<?php echo $data['SIBSS3Staff1Pct'];?>" disabled>
                                </div>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text" name="SIBSS3Staff2Pct" value="<?php echo $data['SIBSS3Staff2Pct'];?>" disabled>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Entitled Amount:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text" name="SIBSS3Staff1EntitledAmount" value="<?php echo $data['SIBSS3Staff1EntitledAmount'];?>">
                                </div>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text" name="SIBSS3Staff2EntitledAmount" value="<?php echo $data['SIBSS3Staff2EntitledAmount'];?>">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="SIBSS3Staff1PaidDate" value="<?php echo $data['SIBSS3Staff1PaidDate'];?>" readonly>
                                </div>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="SIBSS3Staff2PaidDate" value="<?php echo $data['SIBSS3Staff2PaidDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                    <input type="button" id="create_btn_3" value="Save" class="btn btn-primary radius"/>
                                    <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form form-horizontal">
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Staff:</label>
                                        <div class="formControls col-xs-8">
                                            <select class="select_staff" id="jobProg_5">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled % | Set:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS4EntitledAmount" value="<?php echo $data['SIBSS4EntitledAmount'];?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">| Adj:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS4AdjPct" value="<?php echo $data['SIBSS4AdjPct'];?>">
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS4CSFtr" value="<?php echo $data['SIBSS4CSFtr'];?>">
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Paid Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text need_date" name="SIBSS4PaidDate" value="<?php echo $data['SIBSS4PaidDate'];?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form form-horizontal">
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Staff:</label>
                                        <div class="formControls col-xs-8">
                                            <select class="select_staff">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled % | Set:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS5EntitledAmount" value="<?php echo $data['SIBSS5EntitledAmount'];?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">| Adj:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS5AdjPct" value="<?php echo $data['SIBSS5AdjPct'];?>">
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS5CSFtr" value="<?php echo $data['SIBSS5CSFtr'];?>">
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Paid Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text need_date" name="SIBSS5PaidDate" value="<?php echo $data['SIBSS5PaidDate'];?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn_5" value="Save" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab4">
                        <div class="form form-horizontal">
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Packed Up:</label>
                                <div class="formControls col-xs-10 col-sm-10">
                                    <textarea class="input-textarea" rows="6" name="MSSIBSRemarks"><?php echo $data['MSSIBSRemarks'];?></textarea>
                                </div>
                            </div>
                            <div class="row cl">
                                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                    <input type="button" id="create_btn_6" value="Save" class="btn btn-primary radius"/>
                                    <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </article>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap-datepicker.css')?>">
<script type="text/javascript" src="<?php echo base_url('/lib/bootstrap-datepicker/bootstrap-datepicker.js')?>"></script>
<script>
var staffList = <?php echo json_encode($staffList); ?>;
var docLoc    = <?php echo json_encode($docLoc); ?>;
var acMgr     = <?php echo json_encode($acMgr); ?>;
var sentOutVia= <?php echo json_encode($sentOutVia); ?>;
var clientList= <?php echo json_encode($clientList); ?>; 
var uploadurl ="";
$(function () {    
    $("#QuotationAgreedFee").html(formatFee(<?php echo $jobMtn['QuotationAgreedFee'];?>));
    function formatFee(value){
        if (value) {
        return value.toLocaleString('en-US', {
            style: 'currency',
            currency: 'USD',
        });
        } else { return ' ';};
    }

    $(".need_date").datetimepicker({
        todayBtn: 1,
        startView: 2,
        minView: 2,
        autoclose: 1,
        format: 'yyyy-mm-dd'
    });
    $("input[id^='create_btn_']").click(function () {
        $("#Allocation_form").submit();        
    });
    $("#MSPctI,#MSPctII").keyup(function () {
        var is_done_checked = $("#Done").is(':checked');
        if (is_done_checked) {
            var num = this.value.replace(/%/, "");
            if (num) {
                var amount = $("#countAmount").val();
                amount = amount.replace(/HK\$/, "").replace(/,/, "");
                var MSEntitledAmount = (amount * num / 100).toFixed(2);
                if (this.id == "MSPctI") {
                    $("#MSEntitledAmount1").val(MSEntitledAmount);
                } else {
                    $("#MSEntitledAmount2").val(MSEntitledAmount);
                }
            }
        }
    });
    $("#Done").click(function () {
        if (!this.checked) {
            $("#MSEntitledAmount1").val("");
            $("#MSEntitledAmount2").val("");
        } else {
            $("#MSPctI,#MSPctII").trigger("keyup");
        }
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
<?php if ($jobProg['S1DCStaff']) {?>
$("#jobProg_1").html(staffHtml);
$("#jobProg_1").val("<?php echo $jobProg['S1DCStaff'];?>");
<?php } else {?>
$("#jobProg_1").attr("disabled", true);
<?php }?>
<?php if ($jobProg['S2DDStaff']) {?>
$("#jobProg_2").html(staffHtml);
$("#jobProg_2").val("<?php echo $jobProg['S2DDStaff'];?>");
<?php } else {?>
$("#jobProg_2").attr("disabled", true);
<?php }?>
<?php if ($jobProg['S3ACStaff1']) {?>
$("#jobProg_3").html(staffHtml);
$("#jobProg_3").val("<?php echo $jobProg['S3ACStaff1'];?>");
<?php } else {?>
$("#jobProg_3").attr("disabled", true);
<?php }?>
<?php if ($jobProg['S3ACStaff2']) {?>
$("#jobProg_4").html(staffHtml);
$("#jobProg_4").val("<?php echo $jobProg['S3ACStaff2'];?>");
<?php } else {?>
$("#jobProg_4").attr("disabled", true);
<?php }?>
<?php if ($jobProg['S4FSRStaff']) {?>
$("#jobProg_5").html(staffHtml);
$("#jobProg_5").val("<?php echo $jobProg['S4FSRStaff'];?>");
<?php } else {?>
$("#jobProg_5").attr("disabled", true);
<?php }?>

var ACManagerHtml='';
for(var i=0; i<acMgr.length; i++){
    ACManagerHtml+='<option>'+acMgr[i].AcMgr+'</option>';
}
$(".AC_Manager").html(ACManagerHtml);

$('#rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});

$("#setp1_Adj_l").change(function(){
    var value=$(this).val();
    adj_public('setp1_Adj_r',value);
});
$("#setp1_Adj_r").change(function(){
    var value=$(this).val();
    adj_public('setp1_Adj_l',value);
});
function adj_public(id,value){
    if(value == '-2.5%'){
        $("#"+id).val('+2.5%');
    }else if(value == '-2%'){
        $("#"+id).val('+2%');
    }else if(value == '-1.5%'){
        $("#"+id).val('+1.5%');
    }else if(value == '-1%'){
        $("#"+id).val('+1%');
    }else if(value == '-0.5%'){
        $("#"+id).val('+0.5%');
    }else if(value == '0%'){
        $("#"+id).val('0%');
    }else if(value == '+0.5%'){
        $("#"+id).val('-0.5%');
    }else if(value == '+1%'){
        $("#"+id).val('-1%');
    }else if(value == '+1.5%'){
        $("#"+id).val('-1.5%');
    }else if(value == '+2%'){
        $("#"+id).val('-2%');
    }else if(value == '+2.5%'){
        $("#"+id).val('-2.5%');
    }

    EntitledAmount_l();
    EntitledAmount_r();
}
$("#step1_CSFactor_l,#step1_CSFactor_r").change(function(){
    EntitledAmount_l();
    EntitledAmount_r();
});

function EntitledAmount_l(){
    var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
    var Entitled=$("#SIBSS1SetPct").val().split('%')[0]/100;
    var Adj=$("#setp1_Adj_l").val().split('%')[0]/100;
    var CSFactor=$("#step1_CSFactor_l").val();
    var value=(QuotationAgreedFee * (Entitled - Adj) * CSFactor).toFixed(2);
    $("#step1_EntitledAmount_l").val(value);
}

function EntitledAmount_r(){
    var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
    var Entitled=$("#SIBSS1SetPct").val().split('%')[0]/100;
    var Adj=$("#setp1_Adj_r").val().split('%')[0]/100;
    var CSFactor=$("#step1_CSFactor_r").val();
    var value=(QuotationAgreedFee * (Entitled - Adj) * CSFactor).toFixed(2);
    $("#step1_EntitledAmount_r").val(value);
}
</script>
