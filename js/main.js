	jQuery(document).ready(function($) {
		var count = 1;
		var id = $(".comments_block").data("post-id").id;
		getComments();
		$("#show_comments").bind("click",function(){
			getComments();
		});

		$("#submit").on("click",function(){
			var data = $("#commentform").serialize() + '&action=post_comment';

			WPsendAJAX(data, function(res){
				if (!res) return;

				getSingleComment();
			});

			return false;
		});

		function getSingleComment() {
			var data = "action=comments&id=" + id + "&count=1&single=true";
			WPsendAJAX(data, function(res){
				if (res !== '') {
					jQuery(".comment_list").prepend(res);
				}
			});
		}

		function getComments() {
			var data = "action=comments&id=" + id + "&count=" + count;
			WPsendAJAX(data, function(res){
				if (res !== '') {
					jQuery(".comment_list").append(res);
					count++;
				}
			});
		}

		function WPsendAJAX(data, callback) {
			$.ajax({
				url: myAjax.ajaxurl,
				type: "POST",
				data: data,
				success: callback
			});
		}
	});