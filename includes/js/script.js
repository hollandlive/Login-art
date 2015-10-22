/*

My Custom JS
============
deze .js opent een venster met "cookies" (na opdrukken van knopje "More Info" en doe het dicht als een "kruisje" wordt opgedrukt :
http://www.arthem.info/login/
Author:  Art Aksenovs
Updated: October 2015
Notes:	 

*/
$(function() {
	$('#alertMe').click(function(e) {
		e.preventDefault();
		$('#successAlert').slideDown();
	});
});
	
