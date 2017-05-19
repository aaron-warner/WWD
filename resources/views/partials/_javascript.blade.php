<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="js/jquery-2.1.1.js"></script>

<script src="js/main.js"></script> <!-- Resource jQuery -->

<script>

	/* Open when someone clicks on the span element */
	function openNav() {
	    document.getElementById("overlay-nav").style.width = "100%";
	}

	/* Close when someone clicks on the "x" symbol inside the overlay */
	function closeNav() {
	    document.getElementById("overlay-nav").style.width = "0%";
	}

</script>

<script>

	$(window).scroll(function() {
	    if ($(this).scrollTop() >= 400) {        // If page is scrolled more than 250px
	        $('#return-to-top').fadeIn(500);    // Fade in the arrow
	    } else {
	        $('#return-to-top').fadeOut(500);   // Else fade out the arrow
	    }
	});
	$('#return-to-top').click(function() {      // When arrow is clicked
	    $('body,html').animate({
	        scrollTop : 0                       // Scroll to top of body
	    }, 500);
	});

</script>