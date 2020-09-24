<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Job Prog</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('JobMtn/save')?>" method="POST" id="JobMtn_form" class="form form-horizontal">            
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Record ID:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Record Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Code:</label>
                <div class="formControls col-xs-10 col-sm-10">
                    <input type="text" class="input-text" style=" display: inline-block; width: 150px;" id="autocomplete_clientCode1">
                    -
                    <input type="text" class="input-text" style="width: 150px;" id="client_Code2" disabled>
                    / 
                    <input type="text" class="input-text" style="width: 150px;" id="client_Code3" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Name:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" id="client_name" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Normal Year End Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" id="NormalYearEndDate" disabled>
                </div>
                <label class="form-label col-xs-2 col-sm-2">Non Tax Deadline Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text" id="NonTaxDeadlineDate" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Job Nature:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select class="">
                        <option>Mth Ac</option>
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Period:</label>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">From:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">To:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Official Deadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">[-60days]=AS Deadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Job Deadline:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Job No:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Quotation | Via:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <select class="">
                        
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">| Sent Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Proposed Fee:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">| Confirmed Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">| Agreed Fee:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Job Code Assigned:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
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
                                <input type="text" class="input-text">
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Doc Received to HKO Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <div class="row">
                                    <label class="form-label col-xs-4 col-sm-4">1st</label>
                                    <div class="formControls col-xs-8 col-sm-8">
                                        <input type="text" class="input-text">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="form-label col-xs-4 col-sm-4">2nd</label>
                                    <div class="formControls col-xs-8 col-sm-8">
                                        <input type="text" class="input-text">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="form-label col-xs-4 col-sm-4">Last</label>
                                    <div class="formControls col-xs-8 col-sm-8">
                                        <input type="text" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Doc Received Content:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <textarea type="text" class="input-textarea" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                            <div class="formControls col-xs-5 col-sm-5">
                                <label>
                                    <input type="checkbox" id="S1ok"> S1 ok
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
                            <label class="form-label col-xs-2 col-sm-2">Office Handled:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="office_handled">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Doc Transfer | via:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="doc_transfer">
                                </select>
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">| Arrival Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Briefing Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                            <div class="formControls col-xs-3 col-sm-5">
                                <label>
                                    <input type="checkbox" id="S2ok"> S2 ok
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
                            <label class="form-label col-xs-2 col-sm-2">Commence Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff1:as work:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">Staff2:as work:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Info Outstanding List |:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <div class="row">
                                    <label class="form-label col-xs-2 col-sm-2">1st:</label>
                                    <div class="formControls col-xs-3 col-sm-3">
                                        <input type="text" class="input-text">
                                    </div>
                                    <label class="form-label col-xs-2 col-sm-2">| Reply:</label>
                                    <div class="formControls col-xs-3 col-sm-3">
                                        <input type="text" class="input-text">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="form-label col-xs-2 col-sm-2">2nd:</label>
                                    <div class="formControls col-xs-3 col-sm-3">
                                        <input type="text" class="input-text">
                                    </div>
                                    <label class="form-label col-xs-2 col-sm-2">| Reply:</label>
                                    <div class="formControls col-xs-3 col-sm-3">
                                        <input type="text" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:for o/s list:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Draft FS ready Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:for draft FS:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                        <div class="formControls col-xs-5 col-sm-5">
                                <label>
                                    <input type="checkbox" id="S3ok"> S3 ok
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
                            <label class="form-label col-xs-2 col-sm-2">1st Review | Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">| Amended Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">2nd Review | Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">| Amended Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Remarks:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <textarea type="text" class="input-textarea" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2"></label>
                            <div class="formControls col-xs-10 col-sm-10">
                                <textarea type="text" class="input-textarea" rows="6"></textarea>                                
                                <label>
                                    <input type="checkbox" id="S4ok"> S4 ok
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
                            <label class="form-label col-xs-2 col-sm-2">Checklist Signoff | By:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">FS Printed | By:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">DN | No:</label>
                            <div class="formControls col-xs-2 col-sm-2">
                                <select>
                                </select>
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                            <div class="formControls col-xs-2 col-sm-2">
                                <input type="text" class="input-text">
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">| Amount:</label>
                            <div class="formControls col-xs-2 col-sm-2">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">FS Pack e-Sent | By:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">| Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">No of Queries from Client:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                            <div class="formControls col-xs-5 col-sm-5">
                                <label>
                                    <input type="checkbox" id="S5ok"> S5 ok
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
                <div class="tab-pane" id="tab6">
                    <div class="form form-horizontal">
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Packed Up:</label>
                            <div class="formControls col-xs-10 col-sm-10">
                            <label>
                                <input type="checkbox"> Client Doc
                            </label>
                            <label>
                                <input type="checkbox"> Softcopy
                            </label>
                            <label>
                                <input type="checkbox"> Hardcopy
                            </label>
                            <label>
                                <input type="checkbox"> Filed Doc
                            </label>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Filed Staff:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Doc Location:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select>
                                </select>
                            </div>
                        <div class="formControls col-xs-5 col-sm-5">
                                <label>
                                    <input type="checkbox" id="S6ok"> S6 ok
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
                <div class="tab-pane" id="tab7">
                    <div class="form form-horizontal">
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">HK Office Date:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <input type="text" class="input-text">
                            </div>
                            <label class="form-label col-xs-2 col-sm-2">Storage Location:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_docLoc">
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
                                            <input type="text" class="input-text">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <label class="form-label col-xs-4">Invite:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <label class="form-label col-xs-4">Delivery Date:</label>
                                        <div class="formControls col-xs-8">
                                            <input type="text" class="input-text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row cl">
                            <label class="form-label col-xs-2 col-sm-2">Staff:</label>
                            <div class="formControls col-xs-3 col-sm-3">
                                <select class="select_staff">
                                </select>
                            </div>
                            <div class="formControls col-xs-5 col-sm-5">
                                <label>
                                    <input type="checkbox" id="SRok"> SR ok
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
                <!--<ul class="pager wizard">-->
                    <!--<li class="previous first" style="display:none;"><a href="#">First</a></li>-->
                    <!--<li class="previous"><a href="#">Previous</a></li>-->
                    <!--<li class="next last" style="display:none;"><a href="#">Last</a></li>-->
                    <!--<li class="next"><a href="#">Next</a></li>-->
                <!--</ul>-->
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

var docLocHtml='';
for(var i=0; i<docLoc.length; i++){
    docLocHtml+='<option>'+docLoc[i].DocLoc+'</option>';
}
$(".select_docLoc").html(docLocHtml);

$('#rootwizard').bootstrapWizard({'tabClass': 'bwizard-steps'});
</script>