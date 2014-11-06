$(function(){
	function update(){
		$('.fullHeight').height($(window).height());
	}
	
	update();
	$(window).resize(function(){
		update();
	});
	
	//apply javascript to dynamic objects
	//there is probably a better way to do this
	function dynamic(){	
		$('.value').elastic();
		$('.value').focus(function(){
		});
	}
	
	//getting table data based on click
	$('.tableListing').click(function(){
		var tableId = $(this).attr('id');
		$.ajax({
			type: "POST",
			url: '../php/tableLoad.php', //This is the current doc
			data: {'name': tableId},
			success: function(data){
				//$('#edit').html(data);
				console.log('success');
				$('#edit').html(data);	
				dynamic();
			}
		}); 
	});
});