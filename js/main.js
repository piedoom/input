$(function(){
	function update(){
		$('.fullHeight').height($(window).height());
		//keeps right-hand editing window take up the screen not used by the left-hand bar
		$('#edit').width($(window).width()-$('#tableSection').width());
		//because the textarea is the deciding height, we need to apply that height to the parent element!
		$('.pair').height($(this).find('.key').height());
		//make .value take up rest of the space so .key can stay same width
		//again, I need to subtract object padding.  Not sure why js isn't reading that or how I can fix it.
		$('.value').width($('.card').width() - $('.key').width() -64);
		//makes key stay the same size as the textarea
		//subtracts from object padding too since js doesn't understand box-sizing
		$('.key').each(function(){
		      $(this).height($(this).parent().height() - 32);    
		});
	}
	
	update();
	$(window).resize(function(){
		update();
	});
	
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
				update();
			}
		}); 
	});
});