// Javascript document

var $btn = $('button');
var $nav = $('nav');

$btn.click(function(){
	$nav.toggleClass('open');
});