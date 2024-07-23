<footer id="footer-primary">
		<div class="wrapper">
			<div class="grid">
				<?php // dynamic_sidebar('footer-area'); ?>
				<div class="grid-span-nah">
					<img class="rt-logo" src="/wp-content/themes/rt.fitness/images/rt-fitness-logo-alt.svg">
				</div>
				<div class="grid-span-8">
					<p>Copyright &copy; 2024 Rich Turner, Personal Training in Newport, Shropshire.</p>
					<div class="footer-links">
						<ul>
							<li><a href="/privacy-policy/">Privacy Policy</a></li>   
							<li><a href="/contact/">Contact Me</a></li>
						</ul>
					</div>
				</div>
				<div class="grid-span-3">
					<p><a target="_blank" href="http://madebytoast.com/">Made by Toast</a></p>
				</div>
			</div>
		</div>
	</footer>

</div>
<!-- / wrapper -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz8JeqPx4ai3m72nIPjPBpzRjX2Ivq4v4&loading=async&callback=initMap"></script>

<script>
  AOS.init();
</script>

<script>
document.getElementById('gform_1').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the form from submitting the traditional way
  
  // Display confetti
  confetti({
    particleCount: 100,
    spread: 70,
    origin: { y: 0.6 },
    colors: ['#ff0000', '#000000']
  });

  // Optionally, you can add further logic here, like sending the form data via AJAX.
  
  // Example of form data processing
  const name = document.getElementById('gform_1').value;
  console.log(`Form submitted with name: ${name}`);

  // Clear the form after submission
  event.target.reset();
});

// Add the script to include confetti library
var script = document.createElement('script');
script.src = 'https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js';
document.head.appendChild(script);
</script>

<?php wp_footer(); ?> 

</body>
</html>