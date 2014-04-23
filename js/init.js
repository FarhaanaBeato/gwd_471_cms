// JavaScript Document

$(document).ready(function(){

	$('#home #main-content a').click(function(e){
		e.preventDefault();
		
		$('#placeholder').fadeOut('fast' , function(){
			
			//CHANGE PHOTO
			$('#placeholder').attr('src' , e.target.href);
			$('#placeholder').fadeIn('slow');
			
		});
	});
  
});