var oTable = null;

$(document).ready(function(){

	oTable = $('#allBlogs').dataTable({
		"ajax":'http://localhost/unilever/public/getAllblogs',
		
	});
});