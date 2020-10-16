<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Job Prog</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Update</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">Record ID:</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['ID'];?>
            </div>
            <label class="form-label col-xs-2 col-sm-2">Date:</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['RecordDate'];?>
            </div>

        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">Client Code:</label>
                <div class="formControls col-xs-10 col-sm-10">
                    <?php echo $data['ClientCode1'];?>
                    /
                    <?php echo $data['ClientCode2'];?>
                    / 
                    <?php echo $data['ClientCode3'];?>
                </div>
        </div>
        <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Name</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <?php echo $data['ClientName'];?>
                </div>
        </div>
        <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Normal Year End Date</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <?php echo $data['NormalYearEndDate'];?>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Non Tax Deadline Date</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <?php echo $data['NonTaxDeadlineDate'];?>
                </div>          
        </div>
        <br />

        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">Job Nature</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['JobNature'];?>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">Period From:</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['JobPeriodFrom'];?>
            </div>
            <label class="form-label col-xs-2 col-sm-2">To:</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['JobPeriodTo'];?>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">Official Deadline</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['OfficialDeadline'];?>
            </div>
            <label class="form-label col-xs-2 col-sm-2">[-60 days] = AS Deadline:</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['WorkingDeadline'];?>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">Job Deadline</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['JobDeadline'];?>
            </div>

            <label class="form-label col-xs-2 col-sm-2">Job No</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['JobNo'];?>
            </div>
        </div>            
        <br />

        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">Quotation | Via</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['QuotationVia'];?>
            </div>
        </div>
        <div class="row cl">
             <label class="form-label col-xs-2 col-sm-2">| Sent Date</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['QuotationSentDate'];?>
            </div>
           <label class="form-label col-xs-2 col-sm-2">| Proposed Fee</label>
            <div class="formControls col-xs-3 col-sm-3">
                <div id="QuotationProposedFee"></div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">| Confirmed Date</label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['QuotationConfirmedDate'];?>
            </div>
            <label class="form-label col-xs-2 col-sm-2">| Agreed Fee</label>
            <div class="formControls col-xs-3 col-sm-3">
                <div id="QuotationAgreedFee"></div>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-2 col-sm-2">Job Code Assigned : </label>
            <div class="formControls col-xs-3 col-sm-3">
                <?php echo $data['JobCode'];?>
            </div>
        </div>

        <br />
        <br />
        <form action="<?php echo base_url('JobProg/save')?>" method="POST" id="JobProg_form" class="form form-horizontal">
            <input type="hidden" name="JobCode" value="<?php echo $jobcode;?>">
            <div id="rootwizard">
                <div class="cm-step">
                    <ul>
                        <li><a href="#tab1" data-toggle="tab">S1>Doc collection</a></li>
                        <li><a href="#tab2" data-toggle="tab">S2>Doc despatch</a></li>
                        <li><a href="#tab3" data-toggle="tab">S3>Accounting work</a></li>
                        <li><a href="#tab4" data-toggle="tab">S4>FS review</a></li>
                        <li><a href="#tab5" data-toggle="tab">S5>FS finalisation</a></li>
                        <li><a href="#tab6" data-toggle="tab">S6>Doc finalisation</a></li>
                        <li><a href="#tab7" data-toggle="tab">Step R>Doc return</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane" id="tab1">
                        <div class="form form-horizontal">
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Doc Request | Via:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="docrequest_via" name="S1DCDocRequestVia">
                                    </select>

                                </div>
                                <label class="form-label col-xs-2 col-sm-2">Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S1DCDocRequestDate" value="<?php echo $data['S1DCDocRequestDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Doc Received to HKO Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <div class="row">
                                        <label class="form-label col-xs-4 col-sm-4">1st</label>
                                        <div class="formControls col-xs-8 col-sm-8">
                                            <input type="text" class="input-text need_date" name="S1DCDocReceivedToHKO1stDate" value="<?php echo $data['S1DCDocReceivedToHKO1stDate'];?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="form-label col-xs-4 col-sm-4">2nd</label>
                                        <div class="formControls col-xs-8 col-sm-8">
                                            <input type="text" class="input-text need_date" name="S1DCDocReceivedToHKO2ndDate" value="<?php echo $data['S1DCDocReceivedToHKO2ndDate'];?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="form-label col-xs-4 col-sm-4">Last</label>
                                        <div class="formControls col-xs-8 col-sm-8">
                                            <input type="text" class="input-text need_date" name="S1DCDocReceivedLastdate80" value="<?php echo $data['S1DCDocReceivedLastdate80'];?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Doc Received Content:</label>
                                <div class="formControls col-xs-10 col-sm-10">
                                    <textarea type="text" class="input-textarea" rows="6" name="S1DCDocReceivedToHKOContent"><?php echo $data['S1DCDocReceivedToHKOContent'];?></textarea>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S1DCStaff" id="S1DCStaff">
                                    </select>
                                </div>
                                <div class="formControls col-xs-5 col-sm-5">
                                    <label>
                                        <input type="checkbox" id="S1DCok" name="S1DCok" value="1" <?php if ($data['S1DCok'] == 1) {echo 'checked';}?>> S1 ok
                                    </label>
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
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Office Handled:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="office_handled" name="S2DDOfficeHandled">
                                    </select>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Doc Transfer | via:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="doc_transfer" name="S2DDDocTsfvia">
                                    </select>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">| Arrival Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S2DDDocTsfArrivalDate" value="<?php echo $data['S2DDDocTsfArrivalDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Briefing Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S2DDBreifingDate" value="<?php echo $data['S2DDBreifingDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S2DDStaff" id="S2DDStaff">
                                    </select>
                                </div>
                                <div class="formControls col-xs-3 col-sm-5">
                                    <label>
                                        <input type="checkbox" name="S2DDok" value="1" <?php if ($data['S2DDok'] == 1) {echo 'checked';}?>> S2 ok
                                    </label>
                                </div>
                            </div>

                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn_2" value="Save" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="form form-horizontal">
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Commence Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S3ACCommenceDate" value="<?php echo $data['S3ACCommenceDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Staff1:as work:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S3ACStaff1" id="S3ACStaff1">
                                    </select>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">Staff2:as work:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S3ACStaff2" id="S3ACStaff2">
                                    </select>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Info Outstanding List |:</label>
                                <div class="formControls col-xs-10 col-sm-10">
                                    <div class="row">
                                        <label class="form-label col-xs-2 col-sm-2">1st:</label>
                                        <div class="formControls col-xs-3 col-sm-3">
                                            <input type="text" class="input-text need_date" name="S3ACInfoOutstanding1st" value="<?php echo $data['S3ACInfoOutstanding1st'];?>" readonly>
                                        </div>
                                        <label class="form-label col-xs-2 col-sm-2">| Reply:</label>
                                        <div class="formControls col-xs-3 col-sm-3">
                                            <input type="text" class="input-text need_date" name="S3ACInfoOutstanding1stReply" value="<?php echo $data['S3ACInfoOutstanding1stReply'];?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="form-label col-xs-2 col-sm-2">2nd:</label>
                                        <div class="formControls col-xs-3 col-sm-3">
                                            <input type="text" class="input-text need_date" name="S3ACInfoOutstanding2nd" value="<?php echo $data['S3ACInfoOutstanding2nd'];?>" readonly>
                                        </div>
                                        <label class="form-label col-xs-2 col-sm-2">| Reply:</label>
                                        <div class="formControls col-xs-3 col-sm-3">
                                            <input type="text" class="input-text need_date" name="S3ACInfoOutstanding2ndReply" value="<?php echo $data['S3ACInfoOutstanding2ndReply'];?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Staff:for o/s list:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S3ACStaff3" id="S3ACStaff3">
                                    </select>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Draft FS ready Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S3ACDraftFSDate" value="<?php echo $data['S3ACDraftFSDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Staff:for draft FS:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S3ACStaff4" id="S3ACStaff4">
                                    </select>
                                </div>
                            <div class="formControls col-xs-5 col-sm-5">
                                    <label>
                                        <input type="checkbox" name="S3ACok" value="1" <?php if ($data['S3ACok'] == 1) {echo 'checked';}?>> S3 ok
                                    </label>
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
                    <div class="tab-pane" id="tab4">
                        <div class="form form-horizontal">
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">1st Review | Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S4FSR1stReviewDate" value="<?php echo $data['S4FSR1stReviewDate'];?>" readonly>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">| Amended Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S4FSR1stReviewAmendedDate" value="<?php echo $data['S4FSR1stReviewAmendedDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">2nd Review | Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S4FSR2ndReviewDate" value="<?php echo $data['S4FSR2ndReviewDate'];?>" readonly>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">| Amended Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S4FSR2ndReviewAmendedDate" value="<?php echo $data['S4FSR2ndReviewAmendedDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S4FSRStaff" id="S4FSRStaff">
                                    </select>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Remarks:</label>
                                <div class="formControls col-xs-10 col-sm-10">
                                    <textarea type="text" class="input-textarea" rows="6" name="Remarks1"><?php echo $data['Remarks1'];?></textarea>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2"></label>
                                <div class="formControls col-xs-10 col-sm-10">
                                    <textarea type="text" class="input-textarea" rows="6" name="Remarks2"><?php echo $data['Remarks2'];?></textarea>
                                    <label>
                                        <input type="checkbox" name="S4FSRok" value="1" <?php if ($data['S4FSRok'] == 1) {echo 'checked';}?>> S4 ok
                                    </label>
                                </div>
                            </div>
                            <div class="row cl">
                                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                    <input type="button" id="create_btn_4" value="Save" class="btn btn-primary radius"/>
                                    <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab5">
                        <div class="form form-horizontal">
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Checklist Signoff | By:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S5FSFChecklistSignoffBy" id="S5FSFChecklistSignoffBy">
                                    </select>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S5FSFChecklistSignoffDate" value="<?php echo $data['S5FSFChecklistSignoffDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">FS Printed | By:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S5FSFFSPrintedBy" id="S5FSFFSPrintedBy">
                                    </select>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S5FSFFSPrintedDate" value="<?php echo $data['S5FSFFSPrintedDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">DN Issued By:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select name="S5FSFDNIssuedBy" id="S5FSFDNIssuedBy">
                                    </select>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">DN | No:</label>
                                <div class="formControls col-xs-2 col-sm-2">
                                    <input type="text" class="input-text" name="S5FSFDNNoxx" value="<?php echo $data['S5FSFDNNoxx'];?>">
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                                <div class="formControls col-xs-2 col-sm-2">
                                    <input type="text" class="input-text need_date" name="S5FSFDNDatexx" value="<?php echo $data['S5FSFDNDatexx'];?>" readonly>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">| Amount:</label>
                                <div class="formControls col-xs-2 col-sm-2">
                                    <input type="text" class="input-text" name="S5FSFDNAmountxx" value="<?php echo $data['S5FSFDNAmountxx'];?>">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">FS Pack e-Sent | By:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S5FSFFSPackeSentBy" id="S5FSFFSPackeSentBy">
                                    </select>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S5FSFFSPackeSentDate" value="<?php echo $data['S5FSFFSPackeSentDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">No of Queries from Client:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text" name="S5FSFNoOfQFrClient" value="<?php echo $data['S5FSFNoOfQFrClient'];?>">
                                </div>
                                <div class="formControls col-xs-5 col-sm-5">
                                    <label>
                                        <input type="checkbox" name="S5FSFok" value="1" <?php if ($data['S5FSFok'] == 1) {echo 'checked';}?>> S5 ok
                                    </label>
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
                    <div class="tab-pane" id="tab6">
                        <div class="form form-horizontal">
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Packed Up:</label>
                                <div class="formControls col-xs-10 col-sm-10">
                                <label>
                                    <input type="checkbox" name="S6DFPackedUpClientDoc" value="1" <?php if ($data['S6DFPackedUpClientDoc'] == 1) {echo 'checked';}?>> Client Doc
                                </label>
                                <label>
                                    <input type="checkbox" name="S6DFPackedUpSoftcopy" value="1" <?php if ($data['S6DFPackedUpSoftcopy'] == 1) {echo 'checked';}?>> Softcopy
                                </label>
                                <label>
                                    <input type="checkbox" name="S6DFPackedUpHardcopy" value="1" <?php if ($data['S6DFPackedUpHardcopy'] == 1) {echo 'checked';}?>> Hardcopy
                                </label>
                                <label>
                                    <input type="checkbox" name="S6DFFiledDoc" value="1" <?php if ($data['S6DFFiledDoc'] == 1) {echo 'checked';}?>> Filed Doc
                                </label>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="S6DFFiledDate" value="<?php echo $data['S6DFFiledDate'];?>" readonly>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Filed Staff:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S6DFFiledStaff" id="S6DFFiledStaff">
                                    </select>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Doc Location:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="S6DFDocLoc" id="S6DFDocLoc">
                                    </select>
                                </div>
                                <div class="formControls col-xs-5 col-sm-5">
                                    <label>
                                        <input type="checkbox" name="S6DFok" value="1" <?php if ($data['S6DFok'] == 1) {echo 'checked';}?>> S6 ok
                                    </label>
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
                    <div class="tab-pane" id="tab7">
                        <div class="form form-horizontal">
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">HK Office Date:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <input type="text" class="input-text need_date" name="SRDRHKODate" value="<?php echo $data['SRDRHKODate'];?>" readonly>
                                </div>
                                <label class="form-label col-xs-2 col-sm-2">Storage Location:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_docLoc" name="SRDRStoreLoc">
                                    </select>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Doc Despatched:</label>
                                <div class="formControls col-xs-10 col-sm-10">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label class="form-label col-xs-4">To:</label>
                                            <div class="formControls col-xs-8">
                                                <input type="text" class="input-text" name="SRDRDocDespatchedTo" value="<?php echo $data['SRDRDocDespatchedTo'];?>">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <label class="form-label col-xs-4">Invite:</label>
                                            <div class="formControls col-xs-8">
                                                <input type="text" class="input-text need_date" name="SRDRDocDespatchedInviteDate" value="<?php echo $data['SRDRDocDespatchedInviteDate'];?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <label class="form-label col-xs-4">Delivery Date:</label>
                                            <div class="formControls col-xs-8">
                                                <input type="text" class="input-text need_date" name="SRDRDocDespatchedDeliveryDate" value="<?php echo $data['SRDRDocDespatchedDeliveryDate'];?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                                <div class="formControls col-xs-3 col-sm-3">
                                    <select class="select_staff" name="SRDRDocDespatchedDeliveryStaff" id="SRDRDocDespatchedDeliveryStaff">
                                    </select>
                                </div>
                                <div class="formControls col-xs-5 col-sm-5">
                                    <label>
                                        <input type="checkbox" name="SRDRok" value="1" <?php if ($data['SRDRok'] == 1) {echo 'checked';}?>> SR ok
                                    </label>
                                </div>
                            </div>

                        <div class="row cl">
                            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                                <input type="button" id="create_btn_7" value="Save" class="btn btn-primary radius"/>
                                <a class="btn btn-primary" href="<?php echo base_url('JobProg');?>" style="color: #fff;">Cancel</a>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <!--<ul class="pager wizard">-->
                        <!--<li class="previous first" style="display:none;"><a href="#">First</a></li>-->
                        <!--<li class="previous"><a href="#">Previous</a></li>-->
                        <!--<li class="next last" style="display:none;"><a href="#">Last</a></li>-->
                        <!--<li class="next"><a href="#">Next</a></li>-->
                    <!--</ul>-->
                </div>
            </div>
        </form>
    </article>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap-datepicker.css')?>">
<script type="text/javascript" src="<?php echo base_url('/lib/bootstrap-datepicker/bootstrap-datepicker.js')?>"></script>
<script>
$(function () {
    $(".need_date").datetimepicker({
        todayBtn: 1,
        startView: 2,
        minView: 2,
        autoclose: 1,
        format: 'yyyy-mm-dd'
    });
    $("input[id^='create_btn_']").click(function () {
//        let ClientCode1 = $.trim($("#ClientCode1").val());
//        if (!ClientCode1) {
//            alert("請填寫 ClientCode1");
//            return false;
//        }
        $("#JobProg_form").submit();
    });
});
var staffList = <?php echo json_encode($staffList); ?>;
var docLoc    = <?php echo json_encode($docLoc); ?>;
var acMgr     = <?php echo json_encode($acMgr); ?>;
var sentOutVia= <?php echo json_encode($sentOutVia); ?>;
var clientList= <?php echo json_encode($clientList); ?>;  
var DDOfficeHandled =   <?php echo json_encode($sys_param['S2DDOfficeHandled']); ?>; 
var DDDocTsfvia =   <?php echo json_encode($sys_param['S2DDDocTsfvia']); ?>;

$("#QuotationProposedFee").html(formatFee(<?php echo $data['QuotationProposedFee'];?>));
$("#QuotationAgreedFee").html(formatFee(<?php echo $data['QuotationAgreedFee'];?>));

function formatFee(value){
    if (value) {
      return value.toLocaleString('en-US', {
        style: 'currency',
        currency: 'USD',
      });
    } else { return ' ';};
}

var clientCode=[];
for(var i=0; i<clientList.length; i++){
    clientCode.push({value: clientList[i].ClientCode1, data: clientList[i].ClientName, clientcode2: clientList[i].ClientCode2, clientcode3: clientList[i].ClientCode3, NormalYearEndDate: clientList[i].NormalYearEndDate, NonTaxDeadlineDate: clientList[i].NonTaxDeadlineDate});
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

var docrequestViaHtml='';
for(var i=0; i<sentOutVia.length; i++){
    docrequestViaHtml+='<option>'+sentOutVia[i].SentOutMeans+'</option>';
}
$(".docrequest_via").html(docrequestViaHtml);
$(".docrequest_via").val("<?php echo $data['S1DCDocRequestVia'];?>");

var docLocHtml='';
for(var i=0; i<docLoc.length; i++){
    docLocHtml+='<option>'+docLoc[i].DocLoc+'</option>';
}
$(".select_docLoc").html(docLocHtml);
$("#SRDRStoreLoc").val("<?php echo $data['SRDRStoreLoc'];?>");

var staffHtml='';
for(var i=0; i<staffList.length; i++){
    staffHtml+='<option value='+staffList[i].StaffCode+'>'+staffList[i].StaffCode+' | '+ (staffList[i].StaffName == null ? '': staffList[i].StaffName) +'</option>';
}

var officeHandledHtml='';
for(var i=0; i<DDOfficeHandled.length; i++){
    officeHandledHtml+='<option>'+DDOfficeHandled[i]+'</option>';
}
$(".office_handled").html(officeHandledHtml);
$("#S2DDOfficeHandled").val("<?php echo $data['S2DDOfficeHandled'];?>");

var docTransferHtml='';
for(var i=0; i<DDDocTsfvia.length; i++){
    docTransferHtml+='<option>'+DDDocTsfvia[i]+'</option>';
}
$(".doc_transfer").html(docTransferHtml);
$("#S2DDDocTsfvia").val("<?php echo $data['S2DDDocTsfvia'];?>");


$("#S3ACStaff1").html(staffHtml);
$("#S3ACStaff1").val("<?php echo $data['S3ACStaff1'];?>");
$("#S3ACStaff2").html(staffHtml);
$("#S3ACStaff2").val("<?php echo $data['S3ACStaff2'];?>");
$("#S3ACStaff3").html(staffHtml);
$("#S3ACStaff3").val("<?php echo $data['S3ACStaff3'];?>");
$("#S3ACStaff4").html(staffHtml);
$("#S3ACStaff4").val("<?php echo $data['S3ACStaff4'];?>");
$("#S1DCStaff").html(staffHtml);
$("#S1DCStaff").val("<?php echo $data['S1DCStaff'];?>");
$("#S2DDStaff").html(staffHtml);
$("#S2DDStaff").val("<?php echo $data['S2DDStaff'];?>");
$("#S4FSRStaff").html(staffHtml);
$("#S4FSRStaff").val("<?php echo $data['S4FSRStaff'];?>");
$("#S5FSFChecklistSignoffBy").html(staffHtml);
$("#S5FSFChecklistSignoffBy").val("<?php echo $data['S5FSFChecklistSignoffBy'];?>");
$("#S5FSFFSPrintedBy").html(staffHtml);
$("#S5FSFFSPrintedBy").val("<?php echo $data['S5FSFFSPrintedBy'];?>");
$("#S5FSFDNIssuedBy").html(staffHtml);
$("#S5FSFDNIssuedBy").val("<?php echo $data['S5FSFDNIssuedBy'];?>");
$("#S5FSFFSPackeSentBy").html(staffHtml);
$("#S5FSFFSPackeSentBy").val("<?php echo $data['S5FSFFSPackeSentBy'];?>");
$("#S6DFFiledStaff").html(staffHtml);
$("#S6DFFiledStaff").val("<?php echo $data['S6DFFiledStaff'];?>");
$("#S6DFDocLoc").html(docLocHtml);
$("#S6DFDocLoc").val("<?php echo $data['S6DFDocLoc'];?>");
$("#SRDRDocDespatchedDeliveryStaff").html(staffHtml);
$("#SRDRDocDespatchedDeliveryStaff").val("<?php echo $data['SRDRDocDespatchedDeliveryStaff'];?>");



$('#rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
</script>

