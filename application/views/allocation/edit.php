<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Allocation</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Edit</span>
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
                    <input type="text" class="input-text" id="daysLeft" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Quotation Amount:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <?php echo $jobMtn['QuotationProposedFee'];?>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">DN | No:</label>
                <div class="formControls col-xs-2 col-sm-2">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Amount:</label>
                <div class="formControls col-xs-2 col-sm-2" id="QuotationAgreedFee">
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
                    <input type="checkbox" name="Paid" value="1" <?php if ($data['Paid'] == 1) {echo 'checked';}?> id="Paid">
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
                    <input type="text" class="input-text" value="<?php if (($data['MSPctI'] != '') && ($data['MSPctI'] != '0')) {echo $data['MSPctI'];} else {echo '5'; } ?>" name="MSPctI" id="MSPctI">
                </div>
                <label class="form-label col-xs-2 col-sm-2">%:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" value="<?php if (($data['MSPctII'] != '') && ($data['MSPctII'] != '0')) {echo $data['MSPctII'];} else {echo '0'; } ?>" name="MSPctII" id="MSPctII">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Entitled Amount:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="MSEntitledAmount1" id="MSEntitledAmount1" value="<?php echo $data['MSEntitledAmount1'];?>" disabled>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Entitled Amount:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" name="MSEntitledAmount2" id="MSEntitledAmount2" value="<?php echo $data['MSEntitledAmount2'];?>" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text need_date" name="MSPaidDateI" value="<?php echo $data['MSPaidDateI'];?>" id="MSPaidDate_l">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Paid Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text need_date" name="MSPaidDateII" value="<?php echo $data['MSPaidDateII'];?>" id="MSPaidDate_r">
                </div>
            </div>
            <h3>Staff Incentive / Bonus Scheme</h3>
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
                                            <input type="text" class="input-text" value="<?php echo $data['SIBSS1AdjPct'];?>" name="SIBSS1AdjPct" id="SIBSS1AdjPct" hidden>
                                            <select class="select_staff" id="setp1_Adj_l">
                                                <!-- <option value="-2.5%">-2.5%</option>
                                                <option value="-2.0%">-2.0%</option>
                                                <option value="-1.5%">-1.5%</option>
                                                <option value="-1.0%">-1.0%</option>
                                                <option value="-0.5%">-0.5%</option>
                                                <option value="0.0%">0.0%</option>
                                                <option value="0.5%">0.5%</option>
                                                <option value="1.0%">1.0%</option>
                                                <option value="1.5%">1.5%</option>
                                                <option value="2.0%">2.0%</option>
                                                <option value="2.5%">2.5%</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" value="<?php echo $data['SIBSS1CSFtr'];?>" name="SIBSS1CSFtr" id="SIBSS1CSFtr" hidden>
                                            <select class="select_staff" id="step1_CSFactor_l">
                                                <!-- <option>0.9</option>
                                                <option>0.95</option>
                                                <option>1</option>
                                                <option>1.05</option>
                                                <option>1.1</option>
                                                <option>1.125</option> -->
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
                                            <input type="text" class="input-text need_date" name="SIBSS1PaidDate" value="<?php echo $data['SIBSS1PaidDate'];?>" id="step1_SIBSS1PaidDate_l" disabled>
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
                                            <input type="text" class="input-text" name="SIBSS2SetPct" value="<?php if (($data['SIBSS2SetPct'] != '') && ($data['SIBSS2SetPct'] != '0')) {echo $data['SIBSS2SetPct'].'%';} else {echo '11%'; } ?>" id="SIBSS2SetPct" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">| Adj:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" value="<?php echo $data['SIBSS2AdjPct'];?>" name="SIBSS2AdjPct" id="SIBSS2AdjPct" hidden>
                                            <select class="select_staff" id="setp1_Adj_r">
                                                <!-- <option value="-2.5%">-2.5%</option>
                                                <option value="-2.0%">-2.0%</option>
                                                <option value="-1.5%">-1.5%</option>
                                                <option value="-1.0%">-1.0%</option>
                                                <option value="-0.5%">-0.5%</option>
                                                <option value="0.0%">0.0%</option>
                                                <option value="0.5%">0.5%</option>
                                                <option value="1.0%">1.0%</option>
                                                <option value="1.5%">1.5%</option>
                                                <option value="2.0%">2.0%</option>
                                                <option value="2.5%">2.5%</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" value="<?php echo $data['SIBSS2CSFtr'];?>" name="SIBSS2CSFtr" id="SIBSS2CSFtr" hidden>
                                            <select class="select_staff" id="step1_CSFactor_r">
                                                <!-- <option>0.9</option>
                                                <option>0.95</option>
                                                <option>1</option>
                                                <option>1.05</option>
                                                <option>1.1</option>
                                                <option>1.125</option> -->
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
                                            <input type="text" class="input-text need_date" name="SIBSS2PaidDate" value="<?php echo $data['SIBSS2PaidDate'];?>" id="step1_SIBSS2PaidDate_r" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>                       
                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn_1" value="Save" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="form form-horizontal">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Step 3 %:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS3SetPct" value="<?php echo $data['SIBSS3SetPct'];?>" id="SIBSS3SetPct" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS3CSFtr" value="<?php echo $data['SIBSS3CSFtr'];?>" id="SIBSS3CSFtr" hidden>
                                            <select class="select_staff" id="step2_CSFactor_l">
                                                <!-- <option>0.9</option>
                                                <option>0.95</option>
                                                <option selected>1</option>
                                                <option>1.05</option>
                                                <option>1.1</option>
                                                <option>1.125</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Staff:</label>
                                        <div class="formControls col-xs-8">
                                            1
                                            <select class="select_staff" id="jobProg_3">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled %:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS3Staff1Pct" value="<?php if (($data['SIBSS3Staff1Pct'] == 0)) {echo $data['SIBSS3SetPct'];} else {echo $data['SIBSS3Staff1Pct'];} ?>" id="SIBSS3Staff1Pct">
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled Amount:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS3Staff1EntitledAmount" value="<?php echo $data['SIBSS3Staff1EntitledAmount'];?>" id="SIBSS3Staff1EntitledAmount" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Paid Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text need_date" name="SIBSS3Staff1PaidDate" value="<?php echo $data['SIBSS3Staff1PaidDate'];?>" id="step2_SIBSS3Staff1PaidDate_l" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">&nbsp;</label>
                                        <div class="formControls col-xs-8">&nbsp;</div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">&nbsp;</label>
                                        <div class="formControls col-xs-8">&nbsp;</div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Staff:</label>
                                        <div class="formControls col-xs-8">
                                            2
                                            <select class="select_staff" id="jobProg_4">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled %:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS3Staff2Pct" value="<?php echo $data['SIBSS3Staff2Pct'];?>" id="SIBSS3Staff2Pct" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled Amount:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS3Staff2EntitledAmount" value="<?php echo $data['SIBSS3Staff2EntitledAmount'];?>" id="SIBSS3Staff2EntitledAmount" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Paid Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text need_date" name="SIBSS3Staff2PaidDate" value="<?php echo $data['SIBSS3Staff2PaidDate'];?>" id="step2_SIBSS3Staff2PaidDate_r" disabled>
                                        </div>
                                    </div>
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
                                            <input type="text" class="input-text" name="SIBSS4SetPct" value="<?php if (($data['SIBSS4SetPct'] != '') && ($data['SIBSS4SetPct'] != '0')) {echo $data['SIBSS4SetPct'].'%';} else {echo '11%'; } ?>" id="SIBSS4SetPct" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">| Adj:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS4AdjPct" value="<?php echo $data['SIBSS4AdjPct'];?>" id="SIBSS4AdjPct" hidden>
                                            <select class="select_staff" id="setp3_Adj_l">
                                                <!-- <option value="-2.5%">-2.5%</option>
                                                <option value="-2.0%">-2.0%</option>
                                                <option value="-1.5%">-1.5%</option>
                                                <option value="-1.0%">-1.0%</option>
                                                <option value="-0.5%">-0.5%</option>
                                                <option value="0.0%">0.0%</option>
                                                <option value="0.5%">0.5%</option>
                                                <option value="1.0%">1.0%</option>
                                                <option value="1.5%">1.5%</option>
                                                <option value="2.0%">2.0%</option>
                                                <option value="2.5%">2.5%</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS4CSFtr" value="<?php echo $data['SIBSS4CSFtr'];?>" id="SIBSS4CSFtr" hidden>
                                            <select class="select_staff" id="step3_CSFactor_l">
                                                <!-- <option>0.9</option>
                                                <option>0.95</option>
                                                <option selected>1</option>
                                                <option>1.05</option>
                                                <option>1.1</option>
                                                <option>1.125</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled Amount:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS4EntitledAmount" id="SIBSS4EntitledAmount" value="" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Paid Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text need_date" name="SIBSS4PaidDate" value="<?php echo $data['SIBSS4PaidDate'];?>" id="step3_SIBSS4PaidDate_l" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form form-horizontal">
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Staff:</label>
                                        <div class="formControls col-xs-8">
                                            <select class="select_staff" id="jobProg_6">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled % | Set:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS5SetPct" value="<?php if (($data['SIBSS5SetPct'] != '') && ($data['SIBSS5SetPct'] != '0')) {echo $data['SIBSS5SetPct'].'%';} else {echo '11%'; } ?>" id="SIBSS5SetPct" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">| Adj:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS5AdjPct" value="<?php echo $data['SIBSS5AdjPct'];?>" id="SIBSS5AdjPct" hidden>
                                            <select class="select_staff" id="setp3_Adj_r">
                                                <!-- <option value="-2.5%">-2.5%</option>
                                                <option value="-2.0%">-2.0%</option>
                                                <option value="-1.5%">-1.5%</option>
                                                <option value="-1.0%">-1.0%</option>
                                                <option value="-0.5%">-0.5%</option>
                                                <option value="0.0%">0.0%</option>
                                                <option value="0.5%">0.5%</option>
                                                <option value="1.0%">1.0%</option>
                                                <option value="1.5%">1.5%</option>
                                                <option value="2.0%">2.0%</option>
                                                <option value="2.5%">2.5%</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">CS Factor:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS5CSFtr" value="<?php echo $data['SIBSS5CSFtr'];?>" id="SIBSS5CSFtr" hidden>
                                            <select class="select_staff" id="step3_CSFactor_r">
                                                <!-- <option>0.9</option>
                                                <option>0.95</option>
                                                <option selected>1</option>
                                                <option>1.05</option>
                                                <option>1.1</option>
                                                <option>1.125</option> -->
                                            </select>
                                        </div>
                                    </div>                                    
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Entitled Amount:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text" name="SIBSS5EntitledAmount" id="SIBSS5EntitledAmount" value="" disabled>
                                        </div>
                                    </div>
                                    <div class="row cl">
                                        <label class="form-label col-xs-4">Paid Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text need_date" name="SIBSS5PaidDate" value="<?php echo $data['SIBSS5PaidDate'];?>" id="step3_SIBSS5PaidDate_r" disabled>
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
            <input type="text" class="input-text" name="StaffPaid" id="StaffPaid" value="0" disabled hidden>
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
        officeHandledHtml+='<option>'+docLoc[i]+'</option>';
    }
    $(".office_handled").html(officeHandledHtml);

    var docTransferHtml='';
    for(var i=0; i<sentOutVia.length; i++){
        docTransferHtml+='<option>'+sentOutVia[i]+'</option>';
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
    <?php if ($jobProg['S5FSFChecklistSignoffBy']) {?>
    $("#jobProg_6").html(staffHtml);
    $("#jobProg_6").val("<?php echo $jobProg['S5FSFChecklistSignoffBy'];?>");
    <?php } else {?>
    $("#jobProg_6").attr("disabled", true);
    <?php }?>

    var ACManagerHtml='';
    for(var i=0; i<acMgr.length; i++){
        ACManagerHtml+='<option>'+acMgr[i].AcMgr+'</option>';
    }
    $(".AC_Manager").html(ACManagerHtml);
    var MSAcMgrII= '<?php echo $data['MSAcMgrII'];?>';
    $(".AC_Manager").val(MSAcMgrII);

    $('#rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});

    //top
    var todyDate=new Date();
    var daysLeft = DateDiff(getMyDate(todyDate),'<?php echo $jobMtn['WorkingDeadline'];?>')
    $("#daysLeft").val(daysLeft);
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

    //done
    var S1PD_l = $("#step1_SIBSS1PaidDate_l").val();
    var S1PD_r = $("#step1_SIBSS2PaidDate_r").val();
    var S2PD_l = $("#step2_SIBSS3Staff1PaidDate_l").val();
    var S2PD_r = $("#step2_SIBSS3Staff2PaidDate_r").val();
    var S3PD_l = $("#step3_SIBSS4PaidDate_l").val();
    var S3PD_r = $("#step3_SIBSS5PaidDate_r").val();
    if((S1PD_l || S1PD_r || S2PD_l || S2PD_r || S3PD_l || S3PD_r) && (S1PD_l != '0000-00-00' || S1PD_r != '0000-00-00' || S2PD_l != '0000-00-00' || S2PD_r != '0000-00-00' || S3PD_l != '0000-00-00' || S3PD_r != '0000-00-00')){
        $("#Done").attr('disabled',true);
    }

    $("#Done").change(function(){
        var flagDone = $(this).is(':checked');
        EntitledAmount_l(flagDone);
        EntitledAmount_r(flagDone);
        SIBSS3Staff1EntitledAmount(flagDone);
        SIBSS3Staff2EntitledAmount(flagDone);
        part3EA_l(flagDone);
        part3EA_r(flagDone);
    });

    //StaffPaid -> 0,1
    $("#step1_SIBSS1PaidDate_l,#step1_SIBSS2PaidDate_r,#step2_SIBSS3Staff1PaidDate_l,#step2_SIBSS3Staff2PaidDate_r,#step3_SIBSS4PaidDate_l,#step3_SIBSS5PaidDate_r").change(function(){
        var S1PD_l = $("#step1_SIBSS1PaidDate_l").val();
        var S1PD_r = $("#step1_SIBSS2PaidDate_r").val();
        var S2PD_l = $("#step2_SIBSS3Staff1PaidDate_l").val();
        var S2PD_r = $("#step2_SIBSS3Staff2PaidDate_r").val();
        var S3PD_l = $("#step3_SIBSS4PaidDate_l").val();
        var S3PD_r = $("#step3_SIBSS5PaidDate_r").val();
        if((S1PD_l || S1PD_r || S2PD_l || S2PD_r || S3PD_l || S3PD_r) && (S1PD_l != '0000-00-00' || S1PD_r != '0000-00-00' || S2PD_l != '0000-00-00' || S2PD_r != '0000-00-00' || S3PD_l != '0000-00-00' || S3PD_r != '0000-00-00')){
            $("#StaffPaid").val(1);
        }else{
            $("#StaffPaid").val(0);
        }
    });
    
    //Paid
    var MSPD_l = $("#MSPaidDate_l").val();
    var MSPD_r = $("#MSPaidDate_r").val();
    if(MSPD_l || MSPD_r){
        $("#Paid").attr('disabled',true);
    }

    $("#Paid").change(function(){
        var flagPaid = $(this).is(':checked');
        MSEntitledAmount_l(flagPaid);
        MSEntitledAmount_r(flagPaid);
    });

    $("#MSPctI,#MSPctII").change(function(){
        var flagPaid = $("#Paid").is(':checked');
        MSEntitledAmount_l(flagPaid);
        MSEntitledAmount_r(flagPaid);
    });

    var flagPaid = $("#Paid").is(':checked');
    MSEntitledAmount_l(flagPaid);
    MSEntitledAmount_r(flagPaid);
    function MSEntitledAmount_l(flagPaid){
        if(flagPaid){
            var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
            var MSPctI=$("#MSPctI").val()/100;
            $("#MSEntitledAmount1").val((QuotationAgreedFee * MSPctI).toFixed(2));

            $("#MSPaidDate_l").attr("disabled",false);
        }else{
            $("#MSEntitledAmount1").val(0);
            $("#MSPaidDate_l").attr("disabled",true);
            $("#MSPaidDate_l").val("<?php echo $data['MSPaidDateI'];?>");
        }
    }

    function MSEntitledAmount_r(flagPaid){
        if(flagPaid){
            var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
            var MSPctII=$("#MSPctII").val()/100;
            $("#MSEntitledAmount2").val((QuotationAgreedFee * MSPctII).toFixed(2));

            $("#MSPaidDate_r").attr("disabled",false);
        }else{
            $("#MSEntitledAmount2").val(0);
            $("#MSPaidDate_r").attr("disabled",true);
            $("#MSPaidDate_r").val("<?php echo $data['MSPaidDateII'];?>");
        }
    }

    //part all default
    var flagDone = $("#Done").is(':checked');
    var part1adj= <?php echo json_encode($part1adj); ?>; 
    var part2adj= <?php echo json_encode($part2adj); ?>; 
    var part3adj= <?php echo json_encode($part3adj); ?>; 
    var csfactor= <?php echo json_encode($csfactor); ?>;
    var html_setp1_Adj='';
    for(var i=0; i<part1adj.length; i++){
        html_setp1_Adj+='<option value="'+part1adj[i]+'">'+part1adj[i]+'</option>';
    }
    $("#setp1_Adj_l,#setp1_Adj_r").html(html_setp1_Adj);
    var html_setp3_Adj='';
    for(var i=0; i<part3adj.length; i++){
        html_setp3_Adj+='<option value="'+part3adj[i]+'">'+part3adj[i]+'</option>';
    }
    $("#setp3_Adj_l,#setp3_Adj_r").html(html_setp3_Adj);
    var html_csfactor='';
    for(var i=0; i<csfactor.length; i++){
        html_csfactor+='<option value="'+csfactor[i]+'">'+csfactor[i]+'</option>';
    }
    $("#step1_CSFactor_l,#step1_CSFactor_r,#step2_CSFactor_l,#step3_CSFactor_l,#step3_CSFactor_r").html(html_csfactor);

    //part1
    var part1_Adj_l= <?php echo $data["SIBSS1AdjPct"]?:0; ?>;
    var part1_CSFactor_l= <?php echo $data["SIBSS1CSFtr"]?:0; ?>;
    var part1_Adj_r= <?php echo $data["SIBSS2AdjPct"]?:0; ?>;
    var part1_CSFactor_r= <?php echo $data["SIBSS2CSFtr"]?:0; ?>;
    
    defualt_adj('setp1_Adj_l',part1_Adj_l);
    defualt_adj('setp1_Adj_r',part1_Adj_r);

    defualt_CSFactor('step1_CSFactor_l',part1_CSFactor_l);
    defualt_CSFactor('step1_CSFactor_r',part1_CSFactor_r);

    $("#setp1_Adj_l").change(function(){
        var value=$(this).val();
        adj_public('setp1_Adj_r',value);
    });
    $("#setp1_Adj_r").change(function(){
        var value=$(this).val();
        adj_public('setp1_Adj_l',value);
    });

    function adj_public(id,value){
        console.log(value);
        if(value == '-2.5%'){
            $("#"+id).val('2.5%');
        }else if(value == '-2.0%'){
            $("#"+id).val('2.0%');
        }else if(value == '-1.5%'){
            $("#"+id).val('1.5%');
        }else if(value == '-1.0%'){
            $("#"+id).val('1.0%');
        }else if(value == '-0.5%'){
            $("#"+id).val('0.5%');
        }else if(value == '0.0%'){
            $("#"+id).val('0.0%');
        }else if(value == '0.5%'){
            $("#"+id).val('-0.5%');
        }else if(value == '1.0%'){
            $("#"+id).val('-1.0%');
        }else if(value == '1.5%'){
            $("#"+id).val('-1.5%');
        }else if(value == '2.0%'){
            $("#"+id).val('-2.0%');
        }else if(value == '2.5%'){
            $("#"+id).val('-2.5%');
        }

        var flagDone = $("#Done").is(':checked');
        EntitledAmount_l(flagDone);
        EntitledAmount_r(flagDone);
    }
    $("#step1_CSFactor_l,#step1_CSFactor_r").change(function(){
        var flagDone = $("#Done").is(':checked');
        EntitledAmount_l(flagDone);
        EntitledAmount_r(flagDone);
    });

    function EntitledAmount_l(flagDone){        
        if(flagDone){
            var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
            var overallBonus=$("#overallBonus").val().split('%')[0]/100;
            var Entitled=$("#SIBSS1SetPct").val().split('%')[0]/100;
            var Adj=$("#setp1_Adj_l").val().split('%')[0]/100;
            $("#SIBSS1AdjPct").val(Number($("#setp1_Adj_l").val().split('%')[0]));
            var CSFactor=$("#step1_CSFactor_l").val();
            $("#SIBSS1CSFtr").val(CSFactor);
            var value=(QuotationAgreedFee * overallBonus * (Entitled + Adj) * CSFactor).toFixed(2);
            $("#step1_EntitledAmount_l").val(value);

            $("#step1_SIBSS1PaidDate_l").attr("disabled",false);
        }else{
            $("#step1_EntitledAmount_l").val(0);
            $("#step1_SIBSS1PaidDate_l").attr("disabled",true);
            $("#step1_SIBSS1PaidDate_l").val("<?php echo $data['SIBSS1PaidDate'];?>");
        }
    }

    function EntitledAmount_r(flagDone){ 
        if(flagDone){
            var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
            var overallBonus=$("#overallBonus").val().split('%')[0]/100;
            var Entitled=$("#SIBSS2SetPct").val().split('%')[0]/100;
            var Adj=$("#setp1_Adj_r").val().split('%')[0]/100;
            $("#SIBSS2AdjPct").val(Number($("#setp1_Adj_r").val().split('%')[0]));
            var CSFactor=$("#step1_CSFactor_r").val();
            $("#SIBSS2CSFtr").val(CSFactor);
            var value=(QuotationAgreedFee * overallBonus * (Entitled + Adj) * CSFactor).toFixed(2);
            $("#step1_EntitledAmount_r").val(value);

            $("#step1_SIBSS2PaidDate_r").attr("disabled",false);
        }else{
            $("#step1_EntitledAmount_r").val(0);
            $("#step1_SIBSS2PaidDate_r").attr("disabled",true);
            $("#step1_SIBSS2PaidDate_r").val("<?php echo $data['SIBSS2PaidDate'];?>");
        }
    }
    EntitledAmount_l(flagDone);
    EntitledAmount_r(flagDone);

    //part2    
    var part2_CSFactor_l= <?php echo $data["SIBSS3CSFtr"]?:0; ?>;
    defualt_CSFactor('step2_CSFactor_l',part2_CSFactor_l);
    $("#step2_CSFactor_l").change(function(){
        var value=$(this).val();
        $("#SIBSS3CSFtr").val(value);
    });

    $("#SIBSS3Staff1Pct").change(function(){
        var value=$(this).val();
        if(value <= Number($("#SIBSS3SetPct").val())){
            SIBSS3Staff2Pct();
        }else{
            $("#SIBSS3Staff1Pct").val($("#SIBSS3SetPct").val());
            SIBSS3Staff2Pct();
        }        
    });

    SIBSS3Staff2Pct();
    function SIBSS3Staff2Pct(){
        var SIBSS3Staff2Pct=$("#SIBSS3SetPct").val() - $("#SIBSS3Staff1Pct").val();
        $("#SIBSS3Staff2Pct").val(SIBSS3Staff2Pct);
        
        var flagDone = $("#Done").is(':checked');
        SIBSS3Staff1EntitledAmount(flagDone);
        SIBSS3Staff2EntitledAmount(flagDone);
    }

    SIBSS3Staff1EntitledAmount(flagDone);
    SIBSS3Staff2EntitledAmount(flagDone);
    function SIBSS3Staff1EntitledAmount(flagDone){
        if(flagDone){
            var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
            var overallBonus=$("#overallBonus").val().split('%')[0]/100;
            var SIBSSNSetPct = $("#SIBSS3SetPct").val()/100;
            var step2_CSFactor_l = $("#step2_CSFactor_l").val();
            var SIBSSNStaff1Pct = $("#SIBSS3Staff1Pct").val()/100;
            var value=(QuotationAgreedFee * overallBonus * SIBSSNSetPct * step2_CSFactor_l * SIBSSNStaff1Pct).toFixed(2);
            $("#SIBSS3Staff1EntitledAmount").val(value);
            
            $("#step2_SIBSS3Staff1PaidDate_l").attr("disabled",false);
        }else{
            $("#SIBSS3Staff1EntitledAmount").val(0);
            $("#step2_SIBSS3Staff1PaidDate_l").attr("disabled",true);
            $("#step2_SIBSS3Staff1PaidDate_l").val("<?php echo $data['SIBSS3Staff1PaidDate'];?>");
        }
    }
    
    function SIBSS3Staff2EntitledAmount(flagDone){
        if(flagDone){
            var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
            var overallBonus=$("#overallBonus").val().split('%')[0]/100;
            var SIBSSNSetPct = $("#SIBSS3SetPct").val()/100;
            var step2_CSFactor_l = $("#step2_CSFactor_l").val();
            var SIBSSNStaff1Pct = $("#SIBSS3Staff2Pct").val()/100;
            var value=(QuotationAgreedFee * overallBonus * SIBSSNSetPct * step2_CSFactor_l * SIBSSNStaff1Pct).toFixed(2);
            $("#SIBSS3Staff2EntitledAmount").val(value);
            
            $("#step2_SIBSS3Staff2PaidDate_r").attr("disabled",false);
        }else{            
            $("#SIBSS3Staff2EntitledAmount").val(0);
            $("#step2_SIBSS3Staff2PaidDate_r").attr("disabled",true);
            $("#step2_SIBSS3Staff2PaidDate_r").val("<?php echo $data['SIBSS3Staff2PaidDate'];?>");
        }
    }

    //part3
    var part3_Adj_l= <?php echo $data["SIBSS4AdjPct"]?:0; ?>;
    var part3_CSFactor_l= <?php echo $data["SIBSS4CSFtr"]?:0; ?>;
    var part3_Adj_r= <?php echo $data["SIBSS5AdjPct"]?:0; ?>;
    var part3_CSFactor_r= <?php echo $data["SIBSS5CSFtr"]?:0; ?>;

    defualt_adj('setp3_Adj_l',part3_Adj_l);
    defualt_adj('setp3_Adj_r',part3_Adj_r);
    
    defualt_CSFactor('step3_CSFactor_l',part3_CSFactor_l);
    defualt_CSFactor('step3_CSFactor_r',part3_CSFactor_r);

    $("#setp3_Adj_l").change(function(){
        var value=$(this).val();
        adj_public_part3('setp3_Adj_r',value);
    });
    $("#setp3_Adj_r").change(function(){
        var value=$(this).val();
        adj_public_part3('setp3_Adj_l',value);
    });
    
    function adj_public_part3(id,value){
        if(value == '-2.5%'){
            $("#"+id).val('2.5%');
        }else if(value == '-2.0%'){
            $("#"+id).val('2.0%');
        }else if(value == '-1.5%'){
            $("#"+id).val('1.5%');
        }else if(value == '-1.0%'){
            $("#"+id).val('1.0%');
        }else if(value == '-0.5%'){
            $("#"+id).val('0.5%');
        }else if(value == '0.0%'){
            $("#"+id).val('0.0%');
        }else if(value == '0.5%'){
            $("#"+id).val('-0.5%');
        }else if(value == '1.0%'){
            $("#"+id).val('-1.0%');
        }else if(value == '1.5%'){
            $("#"+id).val('-1.5%');
        }else if(value == '2.0%'){
            $("#"+id).val('-2.0%');
        }else if(value == '2.5%'){
            $("#"+id).val('-2.5%');
        }

        var flagDone = $("#Done").is(':checked');
        part3EA_l(flagDone);
        part3EA_r(flagDone);
    }
    
    $("#step3_CSFactor_l,#step3_CSFactor_r").change(function(){
        var flagDone = $("#Done").is(':checked');
        part3EA_l(flagDone);
        part3EA_r(flagDone);
    });
    
    function part3EA_l(flagDone){
        if(flagDone){
            var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
            var overallBonus=$("#overallBonus").val().split('%')[0]/100;
            var SIBSSNCSFtr = $("#step3_CSFactor_l").val();
            $("#SIBSS4CSFtr").val(SIBSSNCSFtr);
            var SIBSSNSetPct = $("#SIBSS4SetPct").val().split('%')[0]/100;
            var SIBSSNAdjPct = $("#setp3_Adj_l").val().split('%')[0]/100;
            $("#SIBSS4AdjPct").val(Number($("#setp3_Adj_l").val().split('%')[0]));
            var value = (QuotationAgreedFee * overallBonus * SIBSSNCSFtr * (SIBSSNSetPct + SIBSSNAdjPct)).toFixed(2);
            $("#SIBSS4EntitledAmount").val(value);
            
            $("#step3_SIBSS4PaidDate_l").attr("disabled",false);
        }else{
            $("#SIBSS4EntitledAmount").val(0);
            $("#step3_SIBSS4PaidDate_l").attr("disabled",true);
            $("#step3_SIBSS4PaidDate_l").val("<?php echo $data['SIBSS4PaidDate'];?>");
        }
    }
    function part3EA_r(flagDone){
        if(flagDone){
            var QuotationAgreedFee = <?php echo $jobMtn['QuotationAgreedFee'];?>;
            var overallBonus=$("#overallBonus").val().split('%')[0]/100;
            var SIBSSNCSFtr = $("#step3_CSFactor_r").val();
            $("#SIBSS5CSFtr").val(SIBSSNCSFtr);
            var SIBSSNSetPct = $("#SIBSS5SetPct").val().split('%')[0]/100;
            var SIBSSNAdjPct = $("#setp3_Adj_r").val().split('%')[0]/100;
            $("#SIBSS5AdjPct").val(Number($("#setp3_Adj_r").val().split('%')[0]));
            var value = (QuotationAgreedFee * overallBonus * SIBSSNCSFtr * (SIBSSNSetPct + SIBSSNAdjPct)).toFixed(2);
            $("#SIBSS5EntitledAmount").val(value);
            
            $("#step3_SIBSS5PaidDate_r").attr("disabled",false);
        }else{
            $("#SIBSS5EntitledAmount").val(0);
            $("#step3_SIBSS5PaidDate_r").attr("disabled",true);
            $("#step3_SIBSS5PaidDate_r").val("<?php echo $data['SIBSS5PaidDate'];?>");
        }
    }

    part3EA_l(flagDone);
    part3EA_r(flagDone);

    //public
    function defualt_adj(id,value){
        var result;
        if(value == '-2.5'){
            result='-2.5%';
        }else if(value == '-2'){
            result='-2.0%';
        }else if(value == '-1.5'){
            result='-1.5%';
        }else if(value == '-1'){
            result='-1.0%';
        }else if(value == '-0.5'){
            result='-0.5%';
        }else if(value == '0'){
            result='0.0%';
        }else if(value == '0.5'){
            result='+0.5%';
        }else if(value == '1'){
            result='1.0%';
        }else if(value == '1.5'){
            result='1.5%';
        }else if(value == '2'){
            result='2.0%';
        }else if(value == '2.5'){
            result='2.5%';
        }
        $("#"+id).val(result);
    }
    
    function defualt_CSFactor(id,value){
        var result;
        if(value == '0.9'){
            result='0.90';
        }else if(value == '0.95'){
            result='0.95';
        }else if(value == '1'){
            result='1.0';
        }else if(value == '1.05'){
            result='1.05';
        }else if(value == '1.1'){
            result='1.10';
        }else if(value == '1.125'){
            result='1.125';
        }
        $("#"+id).val(result);
    }
</script>
