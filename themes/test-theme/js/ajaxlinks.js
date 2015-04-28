$(document).ready(function() {

/*This script controls AJAX loading of pages on click of ajaxtrigger css class*/
 $('.ajaxtrigger').click(function(){
    var url = $(this).attr('href');
    if(url.match('^http')){
      return true;
    } else {
      $('#loadedContent').load(url, function(){
		$('html, body').animate({
			scrollTop: $('#loadedContent').offset().top		
			}, 500);
	});
      return false;
    }
  });
});