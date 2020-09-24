<div id="loading_background" style="display:none;"></div> 
<div id="loading_bar" style="display:none;">處理中，請稍後...</div>
<script type="text/javascript">
function importdate(obj){
 var formData = new FormData();
     formData.append("uploadfile", $(obj)[0].files[0]);
     $.ajax({
		type:"POST",
		url:uploadurl,
        data : formData,
		datatype:'json',
		cache: false,
		async: true,
        processData: false,
        contentType: false ,
		success:function(data){
			console.log(data)
			if(data.code!= '200' && data.code != '400' && data.code != '401'&& data.code != '402' ){
				var data=JSON.parse(data);
			}
			alert(data.error_msg);
			window.location.reload();
		}
	});
}
</script>