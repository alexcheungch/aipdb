<link href="<?php echo base_url('css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url('js/jquery.dataTables.min.js') ?>"></script>
<nav class="breadcrumb">
    <i class="Hui-iconfont"></i> 
    <a href="<?php echo base_url('/') ?>" class="maincolor">Comments</a> 
    <span class="c-999 en">&gt;</span>
    <span class="c-666">List</span>
    <a href="../download/PLC68U-02-006-1.xlsx" download="PLC68U-02-006-1-示例文件.xlsx"><button class="btn btn-primary" style="float: right;height: 2.7rem;padding: 0 10px;">下載範例</button></a>
</nav>
<div class="Hui-article">
    <article class="cl pd-20">
        <table id="comments_table" style="width: 100%;text-align: center;" class="table">
            <thead>
                <tr>
                    <td>comment resource code</td>
                    <td>comment item code</td>
                    <td>comment marks from</td>
                    <td>comment marks to</td>
                    <td>comment title</td>
                    <td>comment body</td>
                    <td>Operation</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </article>
</div>
<input type="file" class="btn btn-danger" onchange="importResource(this)" name="IMPort" id="IMPort" value="" style="display: none;"/>
<script>
var uploadurl ="<?php echo base_url('comments/import')?>";
$(function () {
	 $.ajax({
            type: "POST",
            url: "<?php echo base_url('Comments/getfiledata') ?>",
            cache: false,  //禁用缓存
            data: '',  //传入组装的参数
            dataType: "json",
            success: function (result) {
                //setTimeout仅为测试延迟效果
                var returnData = [];
                returnData= result.data;//返回的数据列表
                console.log(returnData);
            	$('#comments_table').DataTable({
		            order: [1], //取消默认排序查询,否则复选框一列会出现小箭头
		            data:returnData,
		            columnDefs:[{
		                targets: 6,
		                render: function (data, type, row, meta) {
							  return '<button class="btn btn-default comments" type="button"  attrid="'+ row.id +'" >Edit</button><button class="btn btn-default delete_btn" type="button"  attrid="'+ row.id +'" >刪除</button>';
		            }}],
		            //列表表头字段
		            columns: [
		                { "data": "comment_resource_code" },
		                { "data": "comment_item_code" },
		                { "data": "comment_marks_from" },
		                { "data": "comment_marks_to" },
		                { "data": "comment_title" },
		                { "data": "comment_body" },
		                { "data": null }
		            ]
			    });
			    $('#comments_table tbody').on( 'click', ".delete_btn", function () {
			        if (confirm("確認要刪除嗎？")) {
			            var id=$(this).attr('attrid');
			            location.href = "<?php echo base_url('Comments/delete') ?>/"+id;
			        }
			    });
			    $('#comments_table tbody').on( 'click', ".comments", function () {
		            var id=$(this).attr('attrid');
			        location.href = "<?php echo base_url('Comments/edit') ?>/"+id;
			    });
            }
        });


});
</script>