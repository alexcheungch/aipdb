<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Job Maintenance</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">Create</span>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <form action="<?php echo base_url('JobMtn/save')?>" method="POST" id="JobMtn_form" class="form form-horizontal">
             <!-- <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Client Code:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="clientcode1" id="clientcode1" class="input-text" value="" placeholder="公司簡寫">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Client name:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="clientname" id="clientname" class="input-text" value="" placeholder="公司名稱">
                </div>
            </div>
             <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Normal Year End Date:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="clientlegalentity" id="clientlegalentity" class="input-text" value="" placeholder="公司名稱">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-5 col-sm-5">Job Nature:</label>
                <div class="formControls col-xs-5 col-sm-5">
                    <input type="text" name="acmgr" id="acmgr" class="input-text" value="" placeholder="">
                </div>
            </div> -->

            
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
                    <input type="text" class="input-text" style=" display: inline-block; width: 150px;" id="autocomplete_clientCode">
                    -
                    <input type="text" class="input-text" style="width: 150px;">
                    / 
                    <select class="">
                        <option>A1</option>
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Client Name:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-2 col-sm-2">Normal Year End Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
                </div>
                <label class="form-label col-xs-2 col-sm-2">Non Tax Deadline Date:</label>
                <div class="formControls col-xs-3 col-sm-3">
                    <input type="text" class="input-text">
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
            <!-- <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                    <a class="btn btn-primary" href="#">Return</a>
                    <input type="button" id="" value="Delete" class="btn btn-primary radius">
                </div>
            </div> -->
        </form>
    </article>
</div>

<script>
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