/* ================================================================= */
/* CSS Style Switcher By FIFO THEMES
====================================================================== */

window.console = window.console || (function(){
	var c = {}; c.log = c.warn = c.debug = c.info = c.error = c.time = c.dir = c.profile = c.clear = c.exception = c.trace = c.assert = function(){};
	return c;
})();


jQuery(document).ready(function($) {	
		// Color Changer		
		$(".blue" ).click(function(){
			$("#colors" ).attr("href", "css/colors/blue.css" );
			return false;
		});
		
		$(".green" ).click(function(){
			$("#colors" ).attr("href", "css/colors/green.css" );
			return false;
		});
		
		$(".orange" ).click(function(){
			$("#colors" ).attr("href", "css/colors/orange.css" );
			return false;
		});
		
		
		$(".purple" ).click(function(){
			$("#colors" ).attr("href", "css/colors/purple.css" );
			return false;
		});

		$(".red" ).click(function(){
			$("#colors" ).attr("href", "css/colors/red.css" );
			return false;
		});

		$(".magenta" ).click(function(){
			$("#colors" ).attr("href", "css/colors/magenta.css" );
			return false;
		});		
		
		$(".brown" ).click(function(){
			$("#colors" ).attr("href", "css/colors/brown.css" );
			return false;
		});
		
		$(".gray" ).click(function(){
			$("#colors" ).attr("href", "css/colors/gray.css" );
			return false;
		});
		
		$(".teal" ).click(function(){
			$("#colors" ).attr("href", "css/colors/teal.css" );
			return false;
		});
		
		$(".golden" ).click(function(){
			$("#colors" ).attr("href", "css/colors/golden.css" );
			return false;
		});	

		$("#style-switcher h2 a").click(function(e){
			e.preventDefault();
			var div = $("#style-switcher");
			console.log(div.css("left"));
			if (div.css("left") === "-206px") {
				$("#style-switcher").animate({
					left: "0px"
				}); 
			} else {
				$("#style-switcher").animate({
					left: "-206px"
				});
			}
		});

		//Layout Switcher
	   $("#layout-style").change(function(e){
			if( $(this).val() == 1){
				$("div#wrapper").removeClass("boxed"), 
				$(window).resize();
			} else{
				$("div#wrapper").addClass("boxed"),
				$(window).resize();
			}
		});

		$("#layout-switcher").on('change', function() {
			$('#layout').attr('href', $(this).val() + '.css');
		});

		$(".colors li a").click(function(e){
			e.preventDefault();
			$(this).parent().parent().find("a").removeClass("active");
			$(this).addClass("active");
		});
		
	/*	$('.bg li a').click(function() {
			var current = $('#style-switcher select[id=layout-style]').find('option:selected').val();
			if(current == '2') {
				var bg = $(this).css("backgroundImage");
				$("body").css("backgroundImage",bg);
			} else {
				alert('Please select boxed layout');
			}
		});	

		$("#reset a").click(function(e){
			var bg = $(this).css("backgroundImage");
			$("body").css("backgroundImage","url(./images/bg/noise.png)");
			$("#navigation" ).removeClass("style-2")
		}); 		
		*/
		
		
			

	});
	
	function bachgound_colors(color)
	{
		//alert(color);
		jQuery("#webriti_background").css('background-color:color');
	}