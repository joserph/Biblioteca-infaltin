$(document).ready(function()
{
	$('.navbar-nav1 li a.dropdown-toggle1').click(function(e)
	{
		e.preventDefault();
		$(this).parent().toggleClass('open1');
	});
	$('[data-toggle="collapse"]').click(function()
	{
		var target = $(this).attr('data-target');
		$(target).toggleClass('in1');
	});

});