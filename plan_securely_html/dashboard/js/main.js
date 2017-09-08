$(document).ready(function(){
    $(".btn-menu").click(function(){
        $(".row-column").toggleClass("menu-collapse");
		$(".btn-menu").toggleClass("close-menu");
    });
});

$(window).resize(function(){
   console.log('resize called');
   var width = $(window).width();
   if(width < 900){
        $(".row-column").removeClass("menu-collapse");
   }
})
$(window).resize(function(){
   console.log('resize called');
   var width = $(window).width();
   if(width > 900){
        $(".row-column").addClass("menu-collapse");
   }
})

$(document).ready(function() {
	$(".chat-dropdown .dropdown-menu").on('click', function(e) {
		e.stopPropagation();
	});
});		

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));

if ($(window).width() > 768) {
$('.rightColumn .box-content, .leftColumn .main-navigation').mCustomScrollbar({
	theme: "minimal",
	keyboard: false
});
}

$("#showPaletteOnly").spectrum({
    showPaletteOnly: true,
    showPalette:true,
    color: 'blanchedalmond',
    palette: [
        ['black', 'white', 'blanchedalmond',
        'rgb(255, 128, 0);', 'hsv 100 70 50'],
        ['red', 'yellow', 'green', 'blue', 'violet']
    ]
});


