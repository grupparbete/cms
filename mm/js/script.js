$(function(){
	$('.editEntry').click(function() {
		var $this = $(this);
		var oldText = $this.parent().parent().find('p').text();
		var id = $this.parent().parent(). find('#id').val();
		$this.parent().parent().find('p').empty().append('<textarea class="newDescription" cols="33">' + oldText + '</textarea>');
		$('.newDescription').blur(function(){
			var newText =$(this).val;
			$.ajax({
				type: 'POST',
				url: 'update.php',
				data: 'description=' + newText + '&id=' + id,

				success: function() {
					$this.parent().parent().find('p').empty().append(newText);
				}
			})
		});
		return false;
	});
});
$('deleteEntryAnchor').click(function(){
	var thisparam = $(this);
	thisparam.parent.parent().find('p').text('Raderar, vänta ett ogönblick');
	$.ajax({
		type: 'GET',
		url: thisparam.attr('href'),

		success: function(results){
			thisparam.parent().parent().fadeOut('slow');
		}
	})
	return false;
});