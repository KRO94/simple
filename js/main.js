
	var count = 1;
	
	jQuery(document).ready(function($) {
		var id = $(".comments_block").data("post-id").id;
		getComments();
    	$("#show_comments").bind("click",function(){
    		getComments();
    	});

    	function getComments() {
    		$.ajax({
    			url: "http://" + location.host + "/wp-admin/admin-ajax.php",
    			type: "POST",
    			data: "action=comments&id=" + id + "&count=" + count,
    			success: function(res){
				    if (res !== '') {
					    jQuery(".comment_list").append(res);
					    count++;
					}
				}
    		});
    	}
	});
