//show window
$(document).ready(function(){
	$('#login').bind('click', function(){
		$('#login-popup').show();
		return false;
	});
});

//hide window

$(document).mouseup(function (e)
{
    var container = $('#login-popup');
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
        container.hide();
    }
});